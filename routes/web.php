<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

//index
Route::get('/', function () {
    $tasks = App\Models\Task::all();

    return view('home',['tasks'=>$tasks]);
});

//DELETE
Route::patch('/tasks/{id}', function ($id) {
    App\Models\Task::destroy($id);
    return redirect('/');
})->name('task.delete');

//Edit
Route::get('tasks/{id}/edit', function ($id) {

    $task = App\Models\Task::findOrFail($id);
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


    $task = new App\Models\Task();
    $task->title = request('title');
    $task->body = request('body');
    $task->is_done = request()->has('is_done') ? 1 : 0;
    $task->save();

    return redirect('/');
})->name('tasks.store');


//Update
Route::patch('/tasks/{id}', function ($id) {
    request()->validate([
        'title' => ['required','min:3', 'max:100'],
        'body' => ['required','min:10']
    ]);


   $task = App\Models\Task::findOrFail($id);
   $task->title = request('title');
   $task->body = request('body');
   $task->is_done = request('is_done') ? 1 : 0;

   $task->save();

   return redirect('/');
})->name('tasks.update');




