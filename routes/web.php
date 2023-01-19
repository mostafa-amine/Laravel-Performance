<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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



// Home Controller
Route::get('/' , HomeController::class);

Route::prefix('posts')->group(function () {
    Route::get('/' , [PostController::class, 'index']);

    Route::get('/posts', [PostController::class, 'show']);
});

Route::prefix('/users')->group(function(){
    Route::get('/', [UserController::class , 'index']);
});



