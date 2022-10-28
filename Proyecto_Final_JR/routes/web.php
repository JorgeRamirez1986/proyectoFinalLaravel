<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Providers\RouteServiceProvider;



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


Route::get('testDBConection', [HomeController::class, 'testDBConection']);
Route::resource('/', \App\Http\Controllers\ProductController::class)->only('index');
Route::resource('/categories',\App\Http\Controllers\CategoryController::class)->only('index');
Route::resource('/categories',\App\Http\Controllers\CategoryController::class)
    ->middleware('auth');
Route::resource('/products',\App\Http\Controllers\ProductController::class)->middleware('auth');
Route::resource('/users',\App\Http\Controllers\UserController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
