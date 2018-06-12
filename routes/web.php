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

Route::get('/', function () {
    return view('welcome');
});

// route to trimesters pages'
// First - Second - Third.
Route::get('first', function() {
    return view('firstArticles');
});

Route::get('second', function() {
    return view('secondArticles');
});

Route::get('third', function() {
    return view('thirdArticles');
});
