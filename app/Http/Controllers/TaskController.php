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
        return view('show',compact('task'));
    }

    public function store(){
        $task = Task::create($this->validateData());
        $task->save();
        return redirect('/');
    }
    public function destroy(Task $id){
        // $task = Task::findOrFail($id);
        // $task->delete();
        $id->delete();
        return redirect('/');
    }
    protected function validateData(){

        return request()->validate([
            'title'=>'required',
            'desc'=>'required'
        ]);
    }

    
}
