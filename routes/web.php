<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

//index
Route::get('/',[TaskController::class,'index'])->name('task.index');

//Show Create
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');

//Store
Route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');

//Show Edit
Route::get('/tasks/{task}/edit',[TaskController::class,'edit'])->name('tasks.edit');

//Update
Route::patch('tasks/{task}',[TaskController::class,'update'])->name('tasks.update');

//Delete
Route::delete('tasks/{task}',[TaskController::class,'destroy'])->name('task.destroy');








