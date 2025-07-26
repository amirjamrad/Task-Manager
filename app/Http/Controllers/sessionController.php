<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(LoginRequest $request){

       $request->session()->regenerate();
       return redirect()->route('tasks.index');


    }

    public function destroy(){
        Auth::logout();
        return redirect()->route('login');
    }
}
