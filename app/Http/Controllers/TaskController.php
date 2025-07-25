<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::select('id','title','body','is_done')->orderBy('created_at','desc')->get();

        return view('home', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        $data = $request->validated();
        $data['is_done'] = $request->has('is_done') ? 1 : 0;
        Task::create($data);
        return redirect()->route('tasks.index');

    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Task $task, UpdateTaskRequest $request)
    {

        $data = $request->validated();
        $data['is_done'] = $request->has('is_done') ? 1 : 0;
        $task->update($data);
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }


}
