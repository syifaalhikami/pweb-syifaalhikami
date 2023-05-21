<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post; //<- bisa begini

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "posts",
            "name" => "Syifa Alhikami",
            "email" =>"syifaboy@yahoo.com",
            "image" => "Syifa.JPG",
            "posts" => post::all()//\App\Models\post::all<-bisa begini

        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
                "title" => "single post",
               // "post" => post::find($id)
                "post" => $post
        ]);
    }
}