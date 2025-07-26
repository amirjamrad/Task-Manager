<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

Route::resource('tasks', TaskController::class);

Route::get('/register',[RegisteredUserController::class,'create'])->name('register');
Route::post('/register',[RegisteredUserController::class,'store'])->name('register.store');
Route::get('/login',[sessionController::class,'create'])->name('login');
Route::post('/login',[sessionController::class,'store'])->name('login.store');
Route::post('logout',[sessionController::class,'destroy'])->name('logout');









