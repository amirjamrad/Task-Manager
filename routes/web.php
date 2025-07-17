<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

Route::get('/', function () {
    $tasks = App\Models\Task::all();

    return view('home',['tasks'=>$tasks]);
});

Route::delete('/tasks/{id}', function ($id) {
    App\Models\Task::destroy($id);
    
    return redirect('/');
})->name('task.delete');

Route::get('tasks/{id}/edit', function ($id) {

    $task = App\Models\Task::findOrFail($id);
    return view('tasks.edit',['task'=>$task]);

})->name('tasks.edit');

Route::get('tasks/create',function(){
    return view('tasks.create');
});

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

Route::put('/tasks/{id}', function ($id) {
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




