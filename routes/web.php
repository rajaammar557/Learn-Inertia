<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'name' => 'Raja Ammar',
        'frameworks' => [
            'Vue',
            'Inertia',
            'Laravel',
            'Tailwind'
        ]
    ]);
});
