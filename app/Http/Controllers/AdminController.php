<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function posts()
    {
        $user=auth()->user();
        $data=Post::all()->sortKeysDesc();
        $ntf=DB::select("select * from contacts where status=0 ORDER BY id DESC");
        return view("AdminPanel.Posts.index",["data"=>$data,'user'=>$user,'ntf'=>$ntf]);
    }
    public function users()
    {
        $user=auth()->user();
        $data=User::all();
        $ntf=DB::select("select * from contacts where status=0 ORDER BY id DESC");
        return view("AdminPanel.Users.index",["data"=>$data,'user'=>$user,'ntf'=>$ntf]);
    }
    public function message()
    {
        $user=auth()->user();
        $data=Contact::all()->sortKeysDesc();
        $ntf=DB::select("select * from contacts where status=0 ORDER BY id DESC");
        return view("AdminPanel.Messages.index",["data"=>$data,'user'=>$user,'ntf'=>$ntf]);
    }
}
