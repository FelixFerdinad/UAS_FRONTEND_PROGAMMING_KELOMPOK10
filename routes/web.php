<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home; // Ensure to import the Home controller
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Subscribe;
use App\Http\Controllers\Account;
use App\Http\Controllers\Register; 
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HOme::class, 'index'])->name('main');
// Route::get('/', [Home::class, 'index'])->name('main');
Route::get('/home', [Home::class, 'index'])->name('main');
Route::get('/about', [About::class, 'index'])->name('about');
Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::get('/subscribe', [Subscribe::class, 'index'])->name('subscribe');
Route::get('/account',[Account::class, 'index'])->name('account');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);


