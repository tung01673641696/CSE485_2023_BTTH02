<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('login', function () {
    return view('login.Login');
});

Route::post('dashboard', [AdminController::class, 'dashboard']);

Route::get('author', [AuthorController::class, 'Author']);
Route::get('add-author', [AuthorController::class, 'addAuthor']);
Route::post('save-author', [AuthorController::class, 'saveAuthor']);
Route::post('delete-author/{ma_tgia}', [AuthorController::class, 'deleteAuthor']);

Route::get('category', [CategoryController::class, 'Category']);
Route::get('add-category', [CategoryController::class, 'addCategory']);
Route::post('save-category', [CategoryController::class, 'saveCategory']);

Route::get('article', [ArticleController::class, 'Article']);