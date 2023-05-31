<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
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
        if(auth()->id() ==1) {
            return view("AdminPanel.Users.add");
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        if(auth()->id()==1) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect()->route('Users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (auth()->id() == 1) {
            $data = User::find($id);
            return view('AdminPanel.Users.edit', ['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [ 'required', 'string', 'email', 'max:255'],
        ]);
        $id=auth()->id();
        if($id==1) {
            $DB = DB::select("select * from users where id<>{$id} && email='{$request->email}'");
            if (count($DB) == 0) {
                $user = User::find($id);
                $user->name = $request->name;
                $user->email = $request->email;
                if ($request->password == $request->password_confirmation && $request->password > 0) {
                    $user->password = Hash::make($request->password);
                }
                $user->save();
            }
        }
        return redirect()->route("Users");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(auth()->id()==1){
            User::destroy($id);
        }
        return redirect()->back();
    }
}
