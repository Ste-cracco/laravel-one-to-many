<?php

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


Auth::routes();

// Route::middleware('auth')->get('/admin/home', 'Admin\HomeController@index')->name('admin.home');

Route::middleware('auth')
    ->prefix('admin') // Prefisso sul percorso della rotta
    ->name('admin.') // Prefisso sul nome della rotta
    ->namespace('Admin') // Prefisso sul percorso del Controller
    ->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    // Creo rotte per gestire i Post
    Route::resource('post', 'PostController'); // Ci genera tutte le 7 rotte
});