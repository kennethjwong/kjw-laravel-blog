<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if (!auth()->attempt($attributes)) {

            // failed auth
            // option 1
//        return back()->withInput()->withErrors(['email'=>'Your email/password combination cannot be verified']);
            // option 2
            throw ValidationException::withMessages([
                'email' => 'Your email/password combination cannot be verified'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!!');
    }
    public function  destroy()
    {
        auth()->logout();
        return redirect("/")->with('success', 'Bye!!');
    }
}
