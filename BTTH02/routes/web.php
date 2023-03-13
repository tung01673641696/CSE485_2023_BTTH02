<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::get('login', [LoginController::class, 'login']);
Route::post('login-store', [LoginController::class, 'loginStore']);

Route::get('author', [AuthorController::class, 'Author']);
Route::get('add-author', [AuthorController::class, 'addAuthor']);
Route::post('save-author', [AuthorController::class, 'saveAuthor']);

Route::get('edit-author/{ma_tgia}', [AuthorController::class, 'editAuthor']);
Route::post('update-author/{ma_tgia}', [AuthorController::class, 'updateAuthor']);

Route::post('delete-author/{ma_tgia}', [AuthorController::class, 'deleteAuthor']);

Route::get('category', [CategoryController::class, 'Category']);
Route::get('add-category', [CategoryController::class, 'addCategory']);
Route::post('save-category', [CategoryController::class, 'saveCategory']);
Route::get('edit-category/{ma_tloai}', [CategoryController::class, 'editCategory']);

Route::get('article', [ArticleController::class, 'Article']);
Route::get('add-article', [ArticleController::class, 'addArticle']);
Route::post('save-article', [ArticleController::class, 'saveArticle']);