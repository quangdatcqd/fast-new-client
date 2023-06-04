<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('', [PostController::class, 'index'])->name('home');
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('chi-tiet/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('danh-muc', [CategoryController::class, 'index'])->name('category.index');
Route::get('danh-muc/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('tim-kiem/{keyword}', [PostController::class, 'search'])->name('post.search');

Auth::routes();
