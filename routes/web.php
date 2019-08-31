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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

// route to trimesters pages'
// First - Second - Third.

Route::get('articles/{id}', 'ArticleController@index');


Auth::routes();

Route::any('/logout', [
    'as' => 'logout',
    function () {
        auth()->logout();
        return redirect('/');
    }
]);

Route::any('/home', [
    'as' => 'home',
    function () {
        return view('welcome');
    }
]);


/**
 * To create a new Article after
 * hitting submit button.
 */
Route::post('/createarticle', [
    'uses' => 'ArticleController@create',
    'as' => 'article.create'
]);


/**
 * To Delete an Article after
 * hitting delete button.
 */
Route::get('/delete-article/{article_id}', [
    'uses' => 'ArticleController@deleteArticle',
    'as' => 'article.delete',
    'middleware' => 'auth'
]);


/**
 * To Edit an Article after
 * hitting edit button.
 */
Route::any('/edit-article/{article_id}', [
    'uses' => 'ArticleController@editArticle',
    'as' => 'article.edit',
    'middleware' => 'auth'
]);


/**
 * To Save an Article after
 * hitting edit button.
 */
Route::any('/save-article/{article_id}', [
    'uses' => 'ArticleController@save',
    'as' => 'article.save',
    'middleware' => 'auth'
]);