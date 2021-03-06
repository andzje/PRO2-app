<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\logoutController;

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
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::post('/logout', [logoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/posts', [PostController::class, 'index'])->name('posts')->middleware('auth');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts{post}', [PostController::class, 'destroy'])->name('posts.destroy');



