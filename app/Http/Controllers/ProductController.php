<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        return 'show productscreate form';
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'create products handler';
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        return  view ('product.edit');
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        return 'update product handler';
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy()
    {
        return 'delete product handler';
    }
}
