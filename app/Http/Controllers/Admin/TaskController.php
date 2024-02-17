<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function adminTask(){
        $tasks = Task::all();
        return view('tasks.admin',compact('tasks'));
    }
}
