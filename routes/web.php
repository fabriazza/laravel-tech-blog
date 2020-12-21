<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

// Invio form contatti
Route::post('/formcontatti', [ContactController::class, 'sendcontact'])->name('contact.send');

// Redirect Mail inviata con successo
Route::get('/mailsuccess', [ContactController::class, 'thankyou'])->name('mail.thankyou');

// Blog - con lista articoli
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

// Pagina About us
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
