<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::orderBy('id','desc')->get();

        // dd($tasks);
        return view('tasks.index',compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // ddd('sss');
        Task::create([
            'list'=>$request->list
        ]);

        return redirect('task');
    }

    public function edit($id)
    {
        $task=Task::find($id);
        
        return view('tasks.edit',compact('task'));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $task=Task::where('id',$id)->update(['list'=>$request->list]);
        return redirect('task');
    }

    public function destroy($id)
    {
        $task=Task::where('id',$id)->delete();
        // $task->delete();
        return redirect('task');

    }
}
