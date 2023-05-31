<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index()
    {
        $auth="Admin";
        if(auth()->user()==null){
            $auth="Login";
        }
        return view('Public.index',['auth'=>$auth]);
    }
    public function directions()
    {
        $auth="Admin";
        if(auth()->user()==null){
            $auth="Login";
        }
        return view('Public.directions',['auth'=>$auth]);
    }
    public function blog()
    {
        $data=DB::select("select * from posts ORDER BY RAND() LIMIT 10");
        $recently=DB::select("select * from posts ORDER BY id DESC LIMIT 10");
        $auth="Admin";
        if(auth()->user()==null){
            $auth="Login";
        }
        return view('Public.blog',['data'=>$data,'recently'=>$recently,'auth'=>$auth]);
    }
    public function contact()
    {
        $auth="Admin";
        if(auth()->user()==null){
            $auth="Login";
        }
        return view('Public.contact',['auth'=>$auth]);
    }
}
