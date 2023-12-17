<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user= User::with('phone')->where(function ($query) {
            $query->where('id', 1);
        })->first();

        $userFromePhone = Phone::with('user')->where(function ($query) {
            $query->where('id', 2);
        })->first();

        dd($userFromePhone->user);
    }
}
