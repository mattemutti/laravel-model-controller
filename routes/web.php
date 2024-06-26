<?php

use App\Http\Controllers\Guests\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('guests.movies.home');
Route::get('/about', [PageController::class, 'about'])->name('guests.about');
Route::get('/contacts', [PageController::class, 'contacts'])->name('guests.contacts');
Route::get('/movies.show/{id}', [PageController::class, 'show'])->name('guests.movies.show');


