<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admins=Admin::orderBy('id','asc');
        $this->authorize('viewAny' , Admin::class);

        // if ($request->get('name')) {
        //     $results = Admin::where('actor_type', 'App\User')->whereHasMorph('actor', 'App\User')
        //     ->whereHas('actor', function($query) {
        //     $query->where('f_name', 'like', '%search_term%');
        // })->get();

        //     // $admins = Admin::where('user.f_name', 'like', '%' . $request->name . '%');
        // }
        // if ($request->get('f_name')) {
        //     $admins = Admin::where('user.f_name', 'like', '%' . $request->f_name . '%');
        // }

        if ($request->get('email')) {
            $admins = Admin::where('email', 'like', '%' . $request->email . '%');
        }

        $admins = $admins->paginate(5);

        return response()->view('cms.admin.index' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $roles = Role::where('guard_name' , 'admin')->get();
        $this->authorize('create' , Admin::class);

        return response()->view('cms.admin.create' , compact('cities','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'status' => 'required',
            // 'city_id' => 'required',
            'image' => 'nullable',
            'email' => 'required',
            'password' => 'required',
        ] , [

        ]);

        if(! $validator->fails()){
            $admins = new Admin();
            $admins->email = $request->get('email');
            $admins->password = Hash::make($request->get('password')) ;

            $isSaved = $admins->save();
            if($isSaved){
                $users = new User();

                $roles = Role::findOrFail($request->get('role_id'));
                $admins->assignRole($roles->name);

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
                $users->city_id = 1;
                $users->actor()->associate($admins);
                $isSaved = $users->save();

                return response()->json([
                    'icon' => 'success' ,
                    'title' => 'Created is Successfully',
                ] , 200);

            }
        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first(),
            ] , 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view' , Admin::class);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::findOrFail($id);
        $cities = City::all();
        $this->authorize('update' , Admin::class);

        return response()->view('cms.admin.edit' , compact('admins' ,'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

            return ['redirect' =>route('admins.index')];

        }
    }
        else{
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first()
            ] , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::destroy($id);
    }

    public function truncate()
    {
        $countries=Admin::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
