<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStep($id,Request $request)
    {
        //
        $steps = Step::where('service_id', $id)->orderBy('created_at', 'desc')->paginate(5);

        return response()->view('cms.step.index',compact('id','steps'));
    }

    public function createStep($id)
    {
       return response()->view('cms.step.create',compact('id'));
    }
    // public function index(Request $request)
    // {
    //     $steps=Step::orderBy('id','desc');
    //     // $this->authorize('viewAny' , SupTitle::class);

    //     // if ($request->get('title')) {
    //     //     $steps = Step::where('title', 'like', '%' . $request->title . '%');
    //     // }
    //     $steps=$steps->paginate(20);

    //     return response()->view('cms.step.index',compact('steps'));

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     // $this->authorize('create' , SupTitle::class);
    //     return response()->view('cms.step.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

  $validator=validator($request->all(),[
    // 'title'=>'required|string|min:2|max:20',
    'description'=>'required'
  ]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $steps=new Step();
            // $steps->title=$request->get('title');
            $steps->service_id=$request->service_id;
            $steps->sentence=$request->get('description');
            $isSaved=$steps->save();
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
        $steps=Step::findOrFail($id);
        // $this->authorize('view' , SupTitle::class);

        return response()->view('cms.step.show',compact('steps'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $steps=Step::findOrFail($id);
        // $this->authorize('update' , SupTitle::class);

        return response()->view('cms.step.edit',compact('steps'));
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
            // 'title'=>'required|string|min:2|max:25',
            'description'=>'required'
        ]));

        if(!$validator->fails()){
        $steps=Step::findOrFail($id);
        // $steps->title=$request->get('title');
        $steps->service_id=$request->service_id;
        $steps->sentence=$request->get('description');
        $isUpdate=$steps->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('steps.index')];
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
         $steps=Step::destroy($id);
    }

    public function truncate()
    {
        $steps=Step::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
