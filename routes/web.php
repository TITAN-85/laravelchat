<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RateController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chat', [ChatsController::class, 'index'])->name('chat');
Route::get('messages', [ChatsController::class, 'fetchMessages'])->name('messages');
Route::post('/messages', [ChatsController::class, 'sendMessage'])->name('send.messages');

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('players-create', [PlayerController::class, 'create'])->name('players.create');
Route::POST('/players-create', [PlayerController::class, 'store']);
Route::get('players/{players}', [PlayerController::class, 'show'])->name('players.show');

Route::get('comments/{comments}', [CommentController::class, 'show'])->name('comments.show');
Route::get('comments-create', [CommentController::class, 'create'])->name('comments.create');
Route::POST('/comments-create', [CommentController::class, 'store']);

Route::get('/search', [PlayerController::class, 'search'])->name('search');


