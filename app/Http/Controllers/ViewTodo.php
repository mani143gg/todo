<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use App\Models\tasklist;

class ViewTodo extends Controller
{
    public function index()
    {
       $task = tasklist::all();
       foreach($task as $value){
        //    echo $value['title'];
           return view('todo', ['title' => $value['task'] ]); 
       }
        
        
    }
}
