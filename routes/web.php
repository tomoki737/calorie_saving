<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

require __DIR__.'/auth.php';

Route::resource('questions', QuestionController::class, ['except' => ['show']]);

Route::get('books', [BooksController::class, 'search'])->name('books.search');
