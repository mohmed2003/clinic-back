<?php

namespace App\Http\Controllers;

use App\Models\SupDescription;
use Illuminate\Http\Request;

class Sup_descriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSupDescription($id,Request $request)
    {
        //
        $sup_descriptions = SupDescription::where('service_id', $id)->orderBy('created_at', 'desc')->paginate(5);

        return response()->view('cms.card.index',compact('id','sup_descriptions'));
    }

    public function createSupDescription($id)
    {
       return response()->view('cms.card.create',compact('id'));
    }
    // public function index(Request $request)
    // {
    //     $sup_descriptions=SupDescription::orderBy('id','desc');
    //     // $this->authorize('viewAny' , SupTitle::class);

    //     if ($request->get('title')) {
    //         $sup_descriptions = SupDescription::where('title', 'like', '%' . $request->title . '%');
    //     }
    //     $sup_descriptions=$sup_descriptions->paginate(20);

    //     return response()->view('cms.card.index',compact('sup_descriptions'));

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     // $this->authorize('create' , SupTitle::class);
    //     return response()->view('cms.card.create');
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
            $sup_descriptions=new SupDescription();
            // $sup_descriptions->title=$request->get('title');
            $sup_descriptions->service_id=$request->service_id;
            $sup_descriptions->description=$request->get('description');
            $isSaved=$sup_descriptions->save();
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
        $sup_descriptions=SupDescription::findOrFail($id);
        // $this->authorize('view' , SupTitle::class);

        return response()->view('cms.card.show',compact('sup_descriptions'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sup_descriptions=SupDescription::findOrFail($id);
        // $this->authorize('update' , SupTitle::class);

        return response()->view('cms.card.edit',compact('sup_descriptions'));
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
        $sup_descriptions=SupDescription::findOrFail($id);
        // $sup_descriptions->title=$request->get('title');
        $sup_descriptions->service_id=$request->service_id;
        $sup_descriptions->description=$request->get('description');
        $isUpdate=$sup_descriptions->save();

        // return response()->json([
        //     'icon' => 'success',wep
        // ])
        return ['redirect'=>route('sup_descriptions.index')];
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
         $sup_descriptions=SupDescription::destroy($id);
    }

    public function truncate()
    {
        $sup_descriptions=SupDescription::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
