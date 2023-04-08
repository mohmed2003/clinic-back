<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $cities=City::with('country')->orderBy('id','asc');
    $this->authorize('viewAny' , City::class);

    if ($request->get('name')) {
        $cities = City::where('name', 'like', '%' . $request->name . '%');
    }

    if ($request->get('street')) {
        $cities = City::where('street', 'like', '%' . $request->street . '%');
    }

    $cities = $cities->paginate(5);

      return response()->view('cms.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::orderBy('name','asc')->get();
        $this->authorize('create' , City::class);

        return response()->view('cms.city.create',compact('countries'));
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
            'name'=>'required|string',
            'street'=>'nullable|string',
            'country_id'=>'required'
          ]);
                 if($validator->fails()){
                    return response()->json([
                    'icon'=>'error',
                    'title'=>$validator->getMessageBag()->first()
                    ],400);
                 }else{
                    $cities=new City();
                    $cities->name=$request->get('name');
                    $cities->country_id=$request->get('country_id');
                    $cities->street=$request->get('street');
                    $isSaved=$cities->save();
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
        $cities=City::findOrFail($id);
        $this->authorize('view' , City::class);

        return response()->view('cms.city.show',compact('cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities=City::findOrFail($id);
        $countries=Country::all();
        $this->authorize('update' , City::class);

        return response()->view('cms.city.edit',compact('cities','countries'));
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
        $validator = validator($request->all() , [
            'name' => 'required',
            'street' => 'nullable',
            'country_id' => 'required',
        ] , [

        ]);

        if(! $validator->fails()){
            $cities = City::findOrFail($id);
            $cities->name = $request->get('name');
            $cities->street = $request->get('street');
            $cities->country_id = $request->get('country_id');

            $isUpdate = $cities->save();
            return ['redirect'=>route('cities.index')];
            return response()->json([
                'icon' => 'success' ,
                'title' => 'Updated is Successfully',

            ] , 200);
        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first(),
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
        $cities=City::destroy($id);

    }

    public function truncate()
    {
        $countries=City::truncate();
         return redirect()->route('cities.index');
    }
}
