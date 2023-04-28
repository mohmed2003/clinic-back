<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::withCount('cities')->orderBy('id' , 'desc');
        $this->authorize('viewAny' , Country::class);

        if ($request->get('name')) {
            $countries = Country::withCount('cities')->where('name', 'like', '%' . $request->name . '%');
                                //  ->Orwhere('code', 'like', '%' . $request->code . '%');
        }

        if ($request->get('code')) {
            $countries = Country::withCount('cities')->where('code', 'like', '%' . $request->code . '%');
        }

        // if ($request->get('created_at')) {
        //     $countries = Country::where('created_at', 'like', '%' . $request->created_at . '%');
        // }

        $countries = $countries->paginate(10);

        return response()->view('cms.country.index',compact('countries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create' , Country::class);

        return response()->view('cms.country.create');
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
    'name'=>'required|string|min:3|max:30',
    'name_ar'=>'required|string|min:3|max:30',
    'code'=>'required|string:4'
  ]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $countries=new Country();
            $countries->name=$request->get('name');
            $countries->name_ar=$request->get('name_ar');
            $countries->code=$request->get('code');
            $isSaved=$countries->save();
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
        $countries=Country::findOrFail($id);
        $this->authorize('view' , Country::class);

        return response()->view('cms.country.show',compact('countries'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries=Country::findOrFail($id);
        $this->authorize('update' , Country::class);

        return response()->view('cms.country.edit',compact('countries'));
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
            'name'=>'required|string|min:3|max:20',
            'name_ar'=>'required|string|min:3|max:30',
            'code'=>'required'
        ]));

        if(!$validator->fails()){
        $countries=Country::findOrFail($id);
        $countries->name=$request->get('name');
        $countries->name_ar=$request->get('name_ar');
        $countries->code=$request->get('code');
        $isUpdate=$countries->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('countries.index')];
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
         $countries=Country::destroy($id);
    }

    public function truncate()
    {
        $countries=Country::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
