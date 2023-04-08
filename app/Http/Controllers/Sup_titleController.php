<?php

namespace App\Http\Controllers;

use App\Models\SupTitle;
use Illuminate\Http\Request;

class Sup_titleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSupTitle($id,Request $request)
    {
        //
        $sup_titles = SupTitle::where('service_id', $id)->orderBy('created_at', 'desc')->paginate(5);

        return response()->view('cms.sup_title.index',compact('id','sup_titles'));
    }

    public function createSupTitle($id)
    {
       return response()->view('cms.sup_title.create',compact('id'));
    }
    // public function index(Request $request)
    // {
    //     $sup_titles=SupTitle::orderBy('id','desc');
    //     // $this->authorize('viewAny' , SupTitle::class);

    //     if ($request->get('title')) {
    //         $sup_titles = SupTitle::where('title', 'like', '%' . $request->title . '%');
    //     }
    //     $sup_titles=$sup_titles->paginate(20);

    //     return response()->view('cms.sup_title.index',compact('sup_titles'));

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     // $this->authorize('create' , SupTitle::class);
    //     return response()->view('cms.sup_title.create');
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
    'title'=>'required|string|min:2|max:20',
    'description'=>'required'
  ]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $sup_titles=new SupTitle();
            $sup_titles->title=$request->get('title');
            $sup_titles->service_id=$request->service_id;
            $sup_titles->description=$request->get('description');
            $isSaved=$sup_titles->save();
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
        $sup_titles=SupTitle::findOrFail($id);
        // $this->authorize('view' , SupTitle::class);

        return response()->view('cms.sup_title.show',compact('sup_titles'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sup_titles=SupTitle::findOrFail($id);
        // $this->authorize('update' , SupTitle::class);

        return response()->view('cms.sup_title.edit',compact('sup_titles'));
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
            'title'=>'required|string|min:2|max:25',
            'description'=>'required'
        ]));

        if(!$validator->fails()){
        $sup_titles=SupTitle::findOrFail($id);
        $sup_titles->title=$request->get('title');
        $sup_titles->service_id=$request->service_id;
        $sup_titles->description=$request->get('description');
        $isUpdate=$sup_titles->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('sup_titles.index')];
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
         $sup_titles=SupTitle::destroy($id);
    }

    public function truncate()
    {
        $sup_titles=SupTitle::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
