<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        dd($request->attract);
    }

    public function edit($id)
    {
        return view('posts.edit');
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    public function destroy($id)
    {
        dd($id);
    }
}
