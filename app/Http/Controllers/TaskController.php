<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:5', 'max:100'],
            'body' => ['required', 'min:5']
        ]);
        $task = new Task();
        $task->title = \request('title');
        $task->body = \request('body');
        $task->is_done = \request()->has('is_done') ? 1 : 0;
        $task->save();
        return redirect()->route('task.index');

    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Task $task)
    {

        \request()->validate([
            'title' => ['required', 'min:5', 'max:100'],
            'body' => ['required', 'min:5']
        ]);

        $task->title = \request('title');
        $task->body = \request('body');
        $task->is_done = \request()->has('is_done') ? 1 : 0;
        $task->save();
        return redirect()->route('task.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index');
    }


}
