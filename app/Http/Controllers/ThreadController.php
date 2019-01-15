<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function post(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        if(Thread::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description
        ])) {
            return back()->with('success','Thread created');
        }else{
            return "An error occurred, we apologize.";
        }
    }

    public function get(Thread $thread){
        return view('thread', compact('thread'));
    }
}
