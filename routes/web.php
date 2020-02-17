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

// Prefixes the URI with 'Films'
Route::prefix('films')
    ->group(function() {

        // Returns all Films 
        Route::get('/')
        ->uses('Films\FilmsController@index')
        ->name('films.index');

        // Returns an individual film
        Route::get('{slug}', function ($slug) {
            return $slug;
        })->name('films.show');

    });

// Prefixes the URI with 'Films'
Route::prefix('shows')
->group(function() {

    // Returns all Films 
    Route::get('/')
    ->uses('Shows\ShowsController@index')
    ->name('shows.index');

});