<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollwersController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
