<?php

namespace App\Http\Controllers\User;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function userTask(){
        $tasks = auth()->user()->tasks;
        return view('tasks.user',compact('tasks'));
    }
}
