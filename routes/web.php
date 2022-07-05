<?php
use App\Http\Controllers\reservationController;
use App\Http\Controllers\Etudiantcontroller;
use App\Http\Controllers\volController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ListevolsController;
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

// Route::get('welcome', 'volController');
//     return view('welcome');


Route::resource('vols', 'volController');
Route::resource('reservation', 'ReservationController');
Route::resource('details', 'DetailsController');
Route::resource('listevol', 'volController');


