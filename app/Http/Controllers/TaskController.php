<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    public function create(){
        $this->authorize('create',Task::class);
        return view('tasks.create');
    }
    public function store(){
        $this->authorize('create',Task::class);
    }

    public function edit(Task $task){
        $this->authorize('update',$task);
        return view('tasks.edit');
    }

    public function update(Task $task){
        $this->authorize('update',$task);
    }
    public function destroy(Task $task){
        $this->authorize('delete',$task);
        $task->delete();

        return redirect()->route('tasks.index');
    }




}
