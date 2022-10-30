<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Project
*/

Route::namespace('Project')->prefix('Project')->name('Project.')->group(function () {
    Route::resource('/project', 'ProjectController');
    Route::resource('/edd', 'EddController');
    Route::resource('/bloc', 'BlocController');
    Route::resource('/typology', 'TypologyController');
});





