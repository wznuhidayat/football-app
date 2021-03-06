<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/main', [Main::class, 'index']);
Route::get('/main/standigs', [Main::class, 'Standings']);
Route::get('/main/matches', [Main::class, 'Matches']);
Route::get('/main/clubs', [Main::class, 'Clubs']);
Route::get('/main/matchespage', [Main::class, 'Matchespage']);
Route::get('/main/topscorers', [Main::class, 'topScorers']);
Route::get('/main/matchespage/{page}/{limit}', [Main::class, 'Matchespage']);
Route::get('/main/clubinfo/{id}', [Main::class, 'clubInfo']);

