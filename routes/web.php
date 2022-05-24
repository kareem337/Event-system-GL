<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UserController;
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
Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [MatchesController::class, 'dashboard'])->name('dashboard');
Route::get('/games', [GamesController::class, 'games'])->name('games');
Route::post('/add', [GamesController::class, 'create'])->name('add');
Route::get('/matches', [MatchesController::class, 'from_today_matches'])->name('matches');
Route::get('/matches/start/{id}', [MatchesController::class, 'start_match'])->name('start_match');
Route::get('/matches/end/{id}', [MatchesController::class, 'end_match'])->name('end_match');

