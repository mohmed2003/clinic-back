<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Doctor;
use App\Models\Spachilty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctors = Doctor::orderBy('id' , 'desc');
        $this->authorize('viewAny' , Doctor::class);

        if ($request->get('email')) {
            $doctors = Doctor::where('email', 'like', '%' . $request->email . '%');
        }
        $doctors=$doctors->paginate(10);
        return response()->view('cms.doctor.index' , compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $spachilties = Spachilty::all();
        $this->authorize('create' , Doctor::class);

        return response()->view('cms.doctor.create' , compact('cities','spachilties'));
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
            'firstname' => 'required|string|min:2|max:15',
            'lastname' => 'required|string|min:2|max:15',
            'mobile' => ['required', 'not_regex:/^[^a-zA-Z]*$/'],
            'date' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'city_id' => 'required',
            'spachilty_id' => 'required',
            'description' => 'required',
            'image' => 'nullable',
            // 'type'=>'required',
            'email' => 'required|unique:doctors,email',
        ] , [

        ]);

        if(! $validator->fails()){
            $doctors = new Doctor();
            $doctors->email = $request->get('email');
            $doctors->type = $request->get('type');
            $doctors->spachilty_id = $request->get('spachilty_id');
            $doctors->description = $request->get('description');

            $isSaved = $doctors->save();
            if($isSaved){
                $users = new User();

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/doctor', $imageName);

                    $users->image = $imageName;
                    }
                $users->f_name = $request->get('firstname');
                $users->l_name = $request->get('lastname');
                $users->mobile = $request->get('mobile');
                $users->date = $request->get('date');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->city_id = $request->get('city_id');
                $users->actor()->associate($doctors);
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
             $doctors = Doctor::findOrFail($id);
             $cities=City::all();
             $spachilties = Spachilty::all();
             $this->authorize('view' , Doctor::class);
return response()->view('cms.doctor.show',compact('doctors','cities','spachilties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::findOrFail($id);
        $cities = City::all();
        $spachilties = Spachilty::all();
        $this->authorize('update' , Doctor::class);

        return response()->view('cms.doctor.edit' , compact('doctors' ,'cities','spachilties'));
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
            'spachilty_id' => 'required',
            'description' => 'required',
            'image' => 'nullable',
            'email' => 'required',
            // 'type'=>'required',
        ] , [

        ]);

        if(! $validator->fails()){


        $doctors = Doctor::findOrFail($id);
        $doctors->email = $request->get('email');
        $doctors->type = $request->get('type');
        $doctors->spachilty_id = $request->get('spachilty_id');
        $doctors->description = $request->get('description');

        $isUpdated = $doctors->save();

        if($isUpdated){
            $users = $doctors->user;

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/doctor', $imageName);

                $users->image = $imageName;
                }

            $users->f_name = $request->get('firstname');
            $users->l_name = $request->get('lastname');
            $users->mobile = $request->get('mobile');
            $users->date = $request->get('date');
            $users->gender = $request->get('gender');
            $users->status = $request->get('status');
            $users->city_id = $request->get('city_id');
            $users->actor()->associate($doctors);
            $isUpdated = $users->save();

            return ['redirect' =>route('doctors.index')];

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
        $doctors = Doctor::destroy($id);
    }

    public function truncate()
    {
        $doctors=Doctor::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
