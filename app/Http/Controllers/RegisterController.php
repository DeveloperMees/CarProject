<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = \request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $attributes['password'] = Hash::make('password');


       $user = User::create($attributes);

        \auth()->login($user);

        return redirect('/')->with('succes', 'Je account is aangemaakt');

    }
}
