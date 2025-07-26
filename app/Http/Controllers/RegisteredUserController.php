<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(RegisterRequest $request){
        $data = $request->validated();
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('tasks.index');
    }
}
