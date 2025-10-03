<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use http\Client\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::all()->toArray();

        return view('dashboard', compact($tasks));
    }

    function create()
    {
        return view('tasks.add');
    }

    function store(TaskRequest $request)
    {
        $task = Auth::user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => $request->status,
            'category' => $request->category,
            'time_deadline' => $request->time_deadline,
            'date_deadline' => $request->date_deadline,
        ]);
//        $user = new Task([
//
//        ]);
        $data = $request->all();
        $task->save($data);

        return redirect("dashboard")->withSuccess('Great! You created task Successfully !');
    }

    function show()
    {
        $tasks = Task::all('id');


        return;
    }

    function edit()
    {

    }

    function update()
    {

    }

    function completed()
    {

    }

    function destroy()
    {

    }
}
