<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Post::find($id);
        $recently=DB::select("select * from posts ORDER BY id DESC LIMIT 10");
        $auth="Admin";
        if(auth()->user()==null){
            $auth="Login";
        }
        return view("Public.blog-details",['data'=>$data,'recently'=>$recently,'auth'=>$auth]);
    }
}
