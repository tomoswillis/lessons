<?php

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

// When user requests homepage, return welcome view.
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Prefixes the URI with 'shows'
Route::prefix('shows')
    ->group(function() {

        // Returns all shows 
        Route::get('/')
        ->uses('Shows\ShowsController@index')
        ->name('shows.index');

        // Returns an individual show
        Route::get('{id}', function ($id) {
            return $id;
        })->name('shows.show');

    });