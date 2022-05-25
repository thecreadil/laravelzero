<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\PostsController;

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

Route::get('/city/{city}', function ($city) {
    return view('city', ['city'=>$city]);
});

Route::get('/birthday', function () {
    return view('birthday');
});

Route::get('/stars', function () {
    return view('stars');
});

Route::get('/hi', [FirstController::class, 'sayHi']);

Route::get('/today', [FirstController::class, 'today']);

Route::resource('/posts', PostsController::class);
