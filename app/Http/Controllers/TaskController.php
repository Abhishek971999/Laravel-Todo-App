<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function create(){
        return view('create');
    }
    public function index(){
        $task = Task::all();
        return view('show',['task'=>$task]);
    }

    public function store(){
        $task = new Task();
        $task->title = request('task');
        $task->save();
        // error_log(request('task'));
        return redirect('/');
    }
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
