<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        // $validated = $request->validate([
        //     'title' => 'required|min:3|max:255',
        //     'content' => 'required|min:3|max:255',
        // ], [
        //     'title.required' => 'Judul harus diisi',
        //     'title.min' => 'Judul minimal 3 karakter',
        //     'title.max' => 'Judul maksimal 255 karakter',
        //     'content.required' => 'Konten harus diisi',
        //     'content.min' => 'Konten minimal 3 karakter',
        //     'content.max' => 'Konten maksimal 255 karakter',
        // ]);

        return redirect('/');
    }
}
