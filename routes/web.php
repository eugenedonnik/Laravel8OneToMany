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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post', [\App\Http\Controllers\PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [\App\Http\Controllers\PostController::class, 'addComment']);
Route::get('/get-comments/{id}', [\App\Http\Controllers\PostController::class, 'getCommentsByPost']);
