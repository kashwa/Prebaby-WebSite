<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// List Users
Route::get('users', 'UserController@index');

// List single user
Route::get('user/{id}', 'UserController@show');

// Create new article
Route::post('user', 'UserController@store');

// Update user
Route::put('users', 'UserController@store');

// Delete article
Route::delete('users', 'UserController@destroy');

