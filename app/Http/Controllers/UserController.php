<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users= User::all();

        return $users;
    }

    public function store()
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'john@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
    }

    public function show($id)
    {
        $user = User::find($id);

        return $user;
    }
}
