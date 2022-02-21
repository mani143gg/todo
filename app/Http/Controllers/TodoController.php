<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasklist;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo');
    }

    public function store(Request $request)
    {
        $post = new tasklist;
        $post->title = $request->title;
        $post->task = $request->task;
        $post->save();
        return view('todo')->with('status','Todo Task Created');
    }

    
}
