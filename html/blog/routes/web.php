<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/', 'HomeController@home'); // Old laravel versions could use this kind as well
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/post/{post}', [\App\Http\Controllers\HomeController::class, 'post']);
Route::post('/post', [\App\Http\Controllers\PostController::class, 'store']);
//Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
