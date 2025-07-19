<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

Route::get('/',[TaskController::class,'index'])->name('task.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');
Route::get('/tasks/{task}/edit',[TaskController::class,'edit'])->name('tasks.edit');
Route::patch('tasks/{task}',[TaskController::class,'update'])->name('tasks.update');
Route::delete('tasks/{task}',[TaskController::class,'destroy'])->name('tasks.destroy');








