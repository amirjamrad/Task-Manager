<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

//index
Route::get('/', function () {
    $tasks = Task::all();

    return view('home',['tasks'=>$tasks]);
})->name('task.index');

//DELETE
Route::delete('/tasks/{task}', function (Task $task) {
     $task->delete();
    return redirect('/');
})->name('task.destroy');

//Edit
Route::get('tasks/{task}/edit', function (Task $task) {

    return view('tasks.edit',['task'=>$task]);

})->name('tasks.edit');


//Show
Route::get('tasks/create',function(){
    return view('tasks.create');
})->name('tasks.create');

//Store
Route::post('/tasks',function(){

    request()->validate([
        'title' =>['required','min:3','max:100'],
        'body' =>['required','min:10'],

    ]);


    $task = new Task();
    $task->title = request('title');
    $task->body = request('body');
    $task->is_done = request()->has('is_done') ? 1 : 0;
    $task->save();

    return redirect('/');
})->name('tasks.store');


//Update
Route::patch('/tasks/{task}', function (Task $task) {
    request()->validate([
        'title' => ['required','min:3', 'max:100'],
        'body' => ['required','min:10']
    ]);

   $task->title = request('title');
   $task->body = request('body');
   $task->is_done = request('is_done') ? 1 : 0;

   $task->save();

   return redirect('/');
})->name('tasks.update');




