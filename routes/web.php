<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth.admin.dashboard');
    Route::get('/products', [ProductController::class, 'index']);
});
