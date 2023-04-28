<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services=Service::orderBy('id','desc');
        $this->authorize('viewAny' , Service::class);

        if ($request->get('title')) {
            $services = Service::where('title', 'like', '%' . $request->title . '%');
        }
        $services=$services->withCount('sup_titles')->withCount('sup_descriptions')->withCount('steps')->paginate(20);


        return response()->view('cms.service.index',compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create' , Service::class);
        return response()->view('cms.service.create');
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
    'title'=>'required|string|min:2|max:50',
    'description'=>'required',
    'title_ar'=>'required|string|min:2|max:50',
    'description_ar'=>'required'
  ]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $services=new Service();
            $services->title=$request->get('title');
            $services->description=$request->get('description');
            $services->title_ar=$request->get('title_ar');
            $services->description_ar=$request->get('description_ar');
            $isSaved=$services->save();
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
        $services=Service::findOrFail($id);
        $this->authorize('view' , Service::class);

        return response()->view('cms.service.show',compact('services'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Service::findOrFail($id);
        $this->authorize('update' , Service::class);

        return response()->view('cms.service.edit',compact('services'));
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
            'title'=>'required|string|min:2|max:50',
            'description'=>'required',
            'title_ar'=>'required|string|min:2|max:50',
            'description_ar'=>'required'
        ]));

        if(!$validator->fails()){
        $services=Service::findOrFail($id);
        $services->title=$request->get('title');
        $services->description=$request->get('description');
        $services->title_ar=$request->get('title_ar');
        $services->description_ar=$request->get('description_ar');
        $isUpdate=$services->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('services.index')];
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
         $services=Service::destroy($id);
    }

    public function truncate()
    {
        $opinions=Service::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
