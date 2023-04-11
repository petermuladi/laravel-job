<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function registrate()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $formFields = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (auth()->attempt($formFields)) {

            $request->session()->regenerate();
            return redirect("/")->with("message", "User Logged In");

        }
        return back()->withErrors(['email' => 'Invalid Email or Password!'])->onlyInput('email');
    }


    public function store(Request $request)
    {
        $formFields = $request->validate([

            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:7|confirmed',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect("/")->with('message', 'User Created and Logged in!');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/")->with('message', 'User Logged Out!');
    }
}