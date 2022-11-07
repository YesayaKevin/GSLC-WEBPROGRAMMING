<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('articles', [
            "title" => "Articles",
            "name" => "Yesaya Kevinedo Delroyvitto",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
