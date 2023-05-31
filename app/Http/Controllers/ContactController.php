<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>"required|string|max:255",
           'email'=>"required|email",
           'subject'=>"required|string|max:255",
           'message'=>"required|string"
        ]);
        $data=new Contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return response([
            'OK'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=auth()->user();
        $data=Contact::find($id);
        $data->status=1;
        $data->save();
        $ntf=DB::select("select * from contacts where status=0 ORDER BY id DESC");
        return view('AdminPanel.Messages.show',['user'=>$user,'data'=>$data,'ntf'=>$ntf]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::destroy($id);
        return redirect()->back();
    }
}
