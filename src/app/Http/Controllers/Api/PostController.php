<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;  //Postをモデルをuseする

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response()->json($posts,200);
    }
}
