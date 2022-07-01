<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;

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

Route::get('/genres', [GenreController::class, 'showGenres']);
Route::get('/genres/{genre_id}', [GenreController::class, 'showSongs']);
Route::get('/songs/detailpage/{song_id}', [SongController::class, 'show']);
