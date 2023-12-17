<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;

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

Route::get('/greating', function () {
    return 'greating';
});

Route::post('/users', [UserController::class, 'store']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/param/{name?}', function (?string $name = null) {
    return $name;
});

Route::match(['get', 'post'], '/users', [UserController::class, 'index']);
