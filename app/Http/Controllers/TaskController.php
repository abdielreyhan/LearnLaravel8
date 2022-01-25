<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=DB::table('tasks')->orderBy('id','desc')->get();
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
        DB::table('tasks')->insert([
            'list'=>$request->list
        ]);

        return redirect('task');
    }

    public function edit($id)
    {
        $task=DB::table('tasks')->where('id',$id)->first();
        // dd($task);

        return view('tasks.edit',compact('task'));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $task=DB::table('tasks')->where('id',$id)->update(['list'=>$request->list]);
        return redirect('task');
    }
}
