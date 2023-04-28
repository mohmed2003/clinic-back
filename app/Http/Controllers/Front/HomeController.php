<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Opinion;
use App\Models\Service;
use App\Models\Spachilty;
use App\Models\Step;
use App\Models\SupDescription;
use App\Models\SupTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $count=4;
        $doctors=Doctor::take(5)->get();
        $services=Service::take($count)->get();
        $opinions=Opinion::take(3)->get();
        $spachilties=Spachilty::all();
        return response()->view('front.index', compact('services','count','opinions','doctors'));
    }
    public function about(){
        return response()->view('front.about');
    }

    public function services(){

        $services=Service::withCount('sup_titles')->withCount('sup_descriptions')->withCount('steps')->orderBy('id','asc')->get();
        $sup_titles = SupTitle::all();
        $sup_descriptions=SupDescription::all();
        $steps = Step::all();
        return response()->view('front.services',compact('services','sup_titles','sup_descriptions','steps'));
    }
    public function service($id){
        $services=Service::where('id',$id)->withCount('sup_titles')->withCount('sup_descriptions')->withCount('steps')->first();
        $sup_titles = SupTitle::all();
        $sup_descriptions=SupDescription::all();
        $steps = Step::all();
        return response()->view('front.service',compact('id','services','sup_titles','sup_descriptions','steps'));

    }
    public function staff(){

        $doctorsCo=Doctor::where('type','co-doctor')->paginate(6);
        $doctorsStaff=Doctor::where('type','from our stuff')->paginate(9);
        $hospitals=Hospital::all();
        return response()->view('front.staff',compact('doctorsCo','doctorsStaff','hospitals'));
    }

    public function contact(){
        return response()->view('front.contact');
    }
    public function storContact(Request $request){
        $validator=validator($request->all(),[
            'name'=>'required|string',
            'email'=>'nullable|string',
          ]);
                 if($validator->fails()){
                    return response()->json([
                    'icon'=>'error',
                    'title'=>$validator->getMessageBag()->first()
                    ],400);
                 }else{
                    $contacts=new Contact();
                    $contacts->name=$request->get('name');
                    $contacts->email=$request->get('email');
                    $contacts->massge=$request->get('massge');
                    $isSaved=$contacts->save();
                    // return redirect()->back();
                    // return ['redirect' =>route('view.contact')];
                    return response()->json([
                        'icon'=>'success',
                        'title'=>'Has been sent',
                        ],200);
                 }
    }
}
