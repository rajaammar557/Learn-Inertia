<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when(
                    Request::input('search'),
                    fn($query, $search) => $query->where('name', 'like', "%$search%")
                )
                ->latest()
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ]),
            'filters' => Request::only(['search'])
        ]);
    }
}
