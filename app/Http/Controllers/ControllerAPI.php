<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ControllerAPI extends Controller
{
    
    public function __construct()
    {
        
    }

    public function index()
    {
        $post = new Post();
        return $post::all();
        
    }

    public function Store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
    }
}
