<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request){
        $this->validate($request, [
            'user_id' => 'required',
            'thread_id' => 'required',
            'title' => 'required',
            'post' => 'required'
        ]);

        if(Post::create([
            'user_id' => $request->user_id,
            'thread_id' => $request->thread_id,
            'title' => $request->title,
            'post' => $request->post
        ])){
            return back()->with("success", "Post was created!");
        }
    }
}
