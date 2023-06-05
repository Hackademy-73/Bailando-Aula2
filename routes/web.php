<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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


// rotta per homepage
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// rotta per invio mail
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');

Route::post('/send', [PublicController::class, 'send'])->name('send');