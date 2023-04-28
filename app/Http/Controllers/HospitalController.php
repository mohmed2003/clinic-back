<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hospitals=Hospital::orderBy('id','desc');
        $this->authorize('viewAny' , Hospital::class);

        if ($request->get('name')) {
            $hospitals = Hospital::where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->get('type')) {
            $hospitals = Hospital::where('type', 'like', '%' . $request->type . '%');
        }


        $hospitals=$hospitals->paginate(20);
        return response()->view('cms.hospital.index',compact('hospitals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create' , Hospital::class);

        $cities=City::all();
        return response()->view('cms.hospital.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

  $validator=validator($request->all(),[
    'name'=>'required|string|min:2|max:20',
    'name_ar'=>'required|string|min:2|max:25',
    'city_id'=>'required',
    'url'=>'required'
]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $hospitals=new Hospital();
            $hospitals->name=$request->get('name');
            $hospitals->name_ar=$request->get('name_ar');
            $hospitals->url=$request->get('url');
            $hospitals->city_id=$request->get('city_id');
            $isSaved=$hospitals->save();
            return response()->json([
                'icon'=>'success',
                'title'=>'Created is successfuly',
                ],200);
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
        $hospitals=Hospital::findOrFail($id);
        $cities=City::all();

        $this->authorize('view' , Hospital::class);

        return response()->view('cms.hospital.show',compact('hospitals','cities'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospitals=Hospital::findOrFail($id);
        $cities=City::all();

        $this->authorize('update' , Hospital::class);

        return response()->view('cms.hospital.edit',compact('hospitals','cities'));
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
        $validator=Validator($request->all([
            'name'=>'required|string|min:2|max:25',
            'name_ar'=>'required|string|min:2|max:25',
            'city_id'=>'required',
            'url'=>'required'
        ]));

        if(!$validator->fails()){
        $hospitals=Hospital::findOrFail($id);
        $hospitals->name=$request->get('name');
        $hospitals->name_ar=$request->get('name_ar');
        $hospitals->url=$request->get('url');
        $hospitals->city_id=$request->get('city_id');
        $isUpdate=$hospitals->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('hospitals.index')];
        }else{
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
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
         $hospitals=Hospital::destroy($id);
    }

    public function truncate()
    {
        $hospitals=Hospital::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
