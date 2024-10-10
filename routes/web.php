<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::query()
            ->when(
                Request::input('search'),
                fn($query, $search) => $query->where('name', 'like', "%$search%")
            )
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        'filters' => Request::only(['search'])
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::post('/logout', function () {
    dd('Logout');
});
