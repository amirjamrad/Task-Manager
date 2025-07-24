<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
//Route::controller(TaskController::class)->group(function (){
//    Route::get('/','index')->name('task.index');
//    Route::get('/tasks/create','create')->name('tasks.create');
//    Route::post('/tasks','store')->name('tasks.store');
//    Route::get('/tasks/{task}/edit','edit')->name('tasks.edit');
//    Route::patch('tasks/{task}','update')->name('tasks.update');
//    Route::delete('tasks/{task}','destroy')->name('tasks.destroy');
//});
Route::resource('tasks', TaskController::class);

Route::get('/register',[RegisteredUserController::class,'create']);









