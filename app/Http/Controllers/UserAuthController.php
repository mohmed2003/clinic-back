<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Notifications\SendLinkResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserAuthController extends Controller
{
    private $emailAddress;
    public function showLogin($guard){
        return response()->view('cms.auth.login' , compact('guard'));
    }

    public function login(Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'

        ]);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (!$validator->fails()) {
            if (Auth::guard($request->get('guard'))->attempt($credentials)) {
                return response()->json(['icon' => 'success', 'title' => 'Login is Successfully'], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => 'Login is Failed '], 400);
            }
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    public function logout(Request $request){
        $guard = auth('admin')->check() ? "admin" : "";
        Auth::guard($guard)->logout();
        $request->session()->invalidate();

        return redirect()->route('view.login' , $guard);

    }

    public function changePassword($id,Request $request){

        // $admins = Admin::FindOrFail($id);


        $guard = auth('admin')->check() ? 'admin' : 'web';

        $validator = Validator($request->all(),[

            'password' => 'required|string',
            'new_password' => 'required|string|confirmed',
            'new_password_confirmation' => 'required|string'
        ]);
        if(!$validator->fails()){
            $user = auth($guard)->user();
            if(Hash::check($request->get('password'), $user->password)){
                $user->password = Hash::make($request->get('new_password'));
                $isSaved = $user->save();
                return ['redirect' =>route('view_home')];

            }else{
                return response()->json(['icon' => 'error' , 'title' => 'Password is not true '] , 400);
            }


            if($isSaved){
            return response()->json(['icon' => 'success' , 'title'=> 'Password changed successfully'], 200 );


         } else {
            return response()->json(['icon' => 'error' , 'title' => 'Password change failed'] , 400);
        }
    }
        else {
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()], 400);
        }
    }

    public function showLinkRequestForm()
    {
        return view('cms.restPassword.forgotPassword');
    }
    public function forgetPassword(Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required|email|exists:admins,email',
        ]);

        if(!$validator->fails()){
            $admins=Admin::where('email',$request->get('email'))->first();
            $this->emailAddress=$admins;
            $token=random_int(1000,9999);
            $admins->token=Hash::make($token);
            $admins->save();
            $admins->notify(new SendLinkResetPassword()) ;
        }else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        }
       }

       public function showResetForm(){
        return response()->view('cms.restpassword.rest');
       }

        public function resetPassword(Request $request){
            $validator = Validator($request->all() ,[
                'code' => 'required|digits:4',
                'new_password' => 'required|string|min:6|confirmed',
            ]);

            if (!$validator->fails()) {
                if (Hash::check($request->get('code'), $this->emailAddress->token)) {
                    $this->emailAddress->password=Hash::make($request->get('new_password'));
                    $this->emailAddress->token=null;
                    return ['redirect' =>route('view.login')];
                }else{
                    return response()->json(['icon' => 'error' , 'title' => 'Password is not true'] , 400);
                }
            }else{
                return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
            }
        }

    public function editProfile($id){

      $admins=Admin::FindOrFail($id);
      $cities=City::all();
      return response()->view('cms.editProfile',compact('admins','cities'));

    }

    public function updateProfile(Request $request , $id){

        $validator = Validator($request->all() , [
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'city_id' => 'required',
            'image' => 'nullable',
            'email' => 'required',
            'password' => 'nullable',
        ] , [

        ]);

        if(! $validator->fails()){


        $admins = Admin::findOrFail($id);
        $admins->email = $request->get('email');
        // $admins->password = Hash::make($request->get('password')) ;

        $isUpdated = $admins->save();

        if($isUpdated){
            $users = $admins->user;

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $users->image = $imageName;
                }

            $users->f_name = $request->get('firstname');
            $users->l_name = $request->get('lastname');
            $users->mobile = $request->get('mobile');
            $users->date = $request->get('date');
            $users->gender = $request->get('gender');
            $users->status = $request->get('status');
            $users->city_id = $request->get('city_id');
            $users->actor()->associate($admins);
            $isUpdated = $users->save();

            return ['redirect' =>route('view_home')];

        }
    }
        else{
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first()
            ] , 400);
        }
    }
}
