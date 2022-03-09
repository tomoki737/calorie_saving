<?php

use App\Http\Controllers\BooksController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

require __DIR__.'/auth.php';

Route::resource('questions', QuestionController::class, ['except' => ['create', 'show', 'store']]);
Route::get('questions/{book}', [QuestionController::class, 'create'])->name('questions.create');
Route::post('questions/{book}', [QuestionController::class, 'store'])->name('questions.store');

Route::get('books', [BooksController::class, 'index'])->name('books.index');
