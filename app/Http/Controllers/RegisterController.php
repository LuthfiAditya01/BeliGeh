<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->validated()['name'],
            'email' => $request->validated()['email'],
            'password' => bcrypt($request->validated()['password']),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Account registered successfully');
    }
}
