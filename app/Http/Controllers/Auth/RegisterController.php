<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request as req;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{

    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Req $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:55'],
            'email' => ['required', 'email', 'min:10', 'max:155', 'unique:users,email'],
            'password' => ['required', 'min:5', 'max:255'],
        ]);

        $register = User::create($attributes);
        event(new Registered($register));
        
        Auth::login($register);

        return redirect()->intended();
    }
}
