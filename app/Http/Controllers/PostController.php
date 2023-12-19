<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hello World',
            'content' => 'This is my first post with Laravel'
        ];

        return response()
            ->view('posts.index', $data, 200);
    }
}
