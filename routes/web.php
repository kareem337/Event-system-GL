<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\DevicesController;

use App\Http\Controllers\AvailableTimesController;
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
Route::get('/codes', [GamesController::class, 'codes_view'])->name('codes_view');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// Route::post('/scan_submit', [UserController::class, 'signin'])->name('scan_submit');

Route::get('/dashboard', [MatchesController::class, 'dashboard'])->name('dashboard');
Route::get('/games', [GamesController::class, 'games'])->name('games');
Route::post('/add_game', [GamesController::class, 'create'])->name('add_game');
Route::get('/matches', [MatchesController::class, 'from_today_matches'])->name('matches');
Route::get('/matches/start/{id}', [MatchesController::class, 'start_match'])->name('start_match');
Route::get('/matches/score/{id}{p1_id}{p2_id}', [MatchesController::class, 'end_match'])->name('end_match');
Route::post('/matches/score/add_score', [PlayersController::class, 'edit_score'])->name('add_score');
Route::get('/getDevices/{id}', [DevicesController::class, 'get_devices'])->name('get_devices');

Route::get('/getTimes/{id}', [AvailableTimesController::class, 'get_time'])->name('get_time');

