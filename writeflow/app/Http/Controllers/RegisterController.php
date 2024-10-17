<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(){
        $attributes = request()->validate([
            'firstname' => ['required'],
            'lastname'  => ['required'],
            'email'      => ['required', 'email', 'unique:users,email'],
            'password'   => ['required', Password::min(4), 'confirmed']], [
            'email.unique' => 'The provided credentials are invalid.',
        ]);


        $attributes['password'] = Hash::make($attributes['password']);
        $user = User::create($attributes);

        Auth::login($user);


        return redirect('/');

    }
}
