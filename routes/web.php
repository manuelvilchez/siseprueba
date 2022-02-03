<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/user/{user}', [PostController::class, 'user'])->name('posts.user');
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/post/{post}', [CommentController::class, 'post'])->name('comments.post');