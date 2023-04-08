<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts=Contact::orderBy("id","desc")->get();
        $this->authorize('viewAny' , Contact::class);

        if ($request->get('name')) {
            $contacts = Contact::where('name', 'like', '%' . $request->name . '%')->get();
        }

        if ($request->get('email')) {
            $contacts = Contact::where('email', 'like', '%' . $request->email . '%')->get();
        }

        return response()->view('cms.contact.index',compact('contacts'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts=Contact::findOrFail($id);
        $this->authorize('view' , Contact::class);

        return response()->view('cms.contact.show',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $contacts=Contact::destroy($id);
    }

    public function truncate()
    {
        $contacts=Contact::truncate();
        return redirect()->back()->with('success', 'Table truncated successfully!');

    }
}
