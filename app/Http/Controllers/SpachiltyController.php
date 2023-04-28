<?php

namespace App\Http\Controllers;

use App\Models\Spachilty;
use Illuminate\Http\Request;

class SpachiltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $spachilties=Spachilty::orderBy('id','desc');
        $this->authorize('viewAny' , Spachilty::class);

        if ($request->get('name')) {
            $spachilties = Spachilty::where('name', 'like', '%' . $request->name . '%');
        }

        $spachilties = $spachilties->paginate(5);

        return response()->view('cms.spachilty.index',compact('spachilties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create' , Spachilty::class);

        return response()->view('cms.spachilty.create');
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
    'name'=>'required|string|min:3|max:40',
    'name_ar'=>'required|string|min:3|max:40',
  ]);
         if($validator->fails()){
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ],400);
         }else{
            $spachilties=new Spachilty();
            $spachilties->name=$request->get('name');
            $spachilties->name_ar=$request->get('name_ar');
            $isSaved=$spachilties->save();
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
        $spachilties=Spachilty::findOrFail($id);
        $this->authorize('view' , Spachilty::class);

        return response()->view('cms.spachilty.show',compact('spachilties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spachilties=Spachilty::findOrFail($id);
        $this->authorize('update' , Spachilty::class);

        return response()->view('cms.spachilty.edit',compact('spachilties'));
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
             'name_ar'=>'required|string|min:3|max:40',
        ]));

        if(!$validator->fails()){
        $spachilties=Spachilty::findOrFail($id);
        $spachilties->name=$request->get('name');
        $spachilties->name_ar=$request->get('name_ar');
        $isUpdate=$spachilties->save();

        // return response()->json([
        //     'icon' => 'success',
        // ])
        return ['redirect'=>route('spachilties.index')];
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
         $spachilties=Spachilty::destroy($id);
    }

    public function truncate()
    {
        $countries=Spachilty::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
