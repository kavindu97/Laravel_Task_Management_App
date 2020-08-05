<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taskmodel;

class taskcontroller extends Controller
{
    public function addtask(Request $request) {
        $taskobj = new taskmodel;

        $taskobj->task = $request->task;
        $taskobj->save();
        $tasklist = taskmodel::all();
       return redirect()->back();
    }
    public function taskcompleted($id) {
        $taskobj = taskmodel::find($id);
        $taskobj->iscompleted = 1;
        $taskobj->save();
        $tasklist = taskmodel::all();
        return redirect()->back();

    }
    public function tasknotcompleted($id) {
        $taskobj = taskmodel::find($id);
        $taskobj->iscompleted = 0;
        $taskobj->save();
        $tasklist = taskmodel::all();
        return redirect()->back();

    }
    public function taskupdate($id) {
       
        $tasklist = taskmodel::find($id);
        return view('updatetask')->with('tasks', $tasklist);
    }
    public function taskrename(Request $request) {
        $task = taskmodel::find($request->id);
        $task->task = $request->task;
        $task->save();
        $tasklist = taskmodel::all();
        return view('welcome')->with('tasks', $tasklist);

    }
    public function taskdelete($id) {
        $task = taskmodel::find($id);
        $task->delete();
        $tasklist = taskmodel::all();
        return redirect()->back();

    }
}
