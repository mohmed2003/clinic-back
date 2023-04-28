<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $opinions=Opinion::orderBy('id','desc');
        $this->authorize('viewAny' , Opinion::class);

        if ($request->get('name')) {
            $opinions = Opinion::where('name', 'like', '%' . $request->name . '%');
        }

        // if ($request->get('email')) {
        //     $opinions = Opinion::where('email', 'like', '%' . $request->email . '%');
        // }

        $opinions=$opinions->paginate(20);

        return response()->view('cms.opinion.index',compact('opinions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create' , Opinion::class);
        return response()->view('cms.opinion.create');
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
    'description'=>'required',
    'name_ar'=>'required|string|min:2|max:20',
    'description_ar'=>'required'
  ]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $opinions=new Opinion();
            $opinions->name=$request->get('name');
            $opinions->description=$request->get('description');
            $opinions->name_ar=$request->get('name_ar');
            $opinions->description_ar=$request->get('description_ar');
            $isSaved=$opinions->save();
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
        $opinions=Opinion::findOrFail($id);
        $this->authorize('view' , Opinion::class);

        return response()->view('cms.opinion.show',compact('opinions'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opinions=Opinion::findOrFail($id);
        $this->authorize('update' , Opinion::class);

        return response()->view('cms.opinion.edit',compact('opinions'));
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
            'description'=>'required',
            'name_ar'=>'required|string|min:2|max:20',
            'description_ar'=>'required'
        ]));

        if(!$validator->fails()){
        $opinions=Opinion::findOrFail($id);
        $opinions->name=$request->get('name');
        $opinions->description=$request->get('description');
        $opinions->name_ar=$request->get('name_ar');
        $opinions->description_ar=$request->get('description_ar');
        $isUpdate=$opinions->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('opinions.index')];
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
         $opinions=Opinion::destroy($id);
    }

    public function truncate()
    {
        $opinions=Opinion::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
