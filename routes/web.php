<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\VideogameController;

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

// Route Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('chi-siamo');
Route::get('/contact', [PublicController::class, 'contact'])->name('contatti');
Route::get('/services', [PublicController::class, 'services'])->name('servizi');

// Route videogame
Route::get('/videogames', [videogameController::class, 'videogame_index'])->name('videogames');
Route::get('/videogames/dettaglio/{id}',  [videogameController::class, 'videogame_show'])->name('videogames-dettaglio');