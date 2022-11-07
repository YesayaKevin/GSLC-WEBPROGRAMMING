<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IdentityController;

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
    return view('index', [
        "title" => "Index"
    ]);
});

Route::get('/identity', [IdentityController::class, 'index']);
Route::get('/articles', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);