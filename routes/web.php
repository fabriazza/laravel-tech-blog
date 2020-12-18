<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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


Auth::routes();

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Articolo singolo
Route::get('/article/{title}', [ArticleController::class, 'show'])->name('article.show');

// Contatti
Route::get('/contatti', [HomeController::class, 'contacts'])->name('contacts');

// Blog - con lista articoli
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

// Pagina About us
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
