<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});

Route::get('/daftarakun', function () {
    return view('daftarakun');
});

Route::get('/daftarakun-2', function () {
    return view('daftarakun-2');
});

Route::get('/daftarakun-3', function () {
    return view('daftarakun-3');
});

Route::post('/daftarakun', [UserController::class, 'store'])->name('daftarakun.store');

Route::get('/home', function () {
    return view('home');
});
