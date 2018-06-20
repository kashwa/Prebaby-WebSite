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

Route::group(['middleware' => ['web']], function() {
    Route::get('/', function () {
        return view('welcome');
    });
});

// route to trimesters pages'
// First - Second - Third.

Route::get('/first',[
    'uses' => 'ArticleController@index1'
    ]);
    
    Route::get('second', [
    'uses' => 'ArticleController@index2'
        
        ]);
        
Route::get('third', [
    'uses' => 'ArticleController@index3'
]);


// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::any('/register', [
'as' => 'register',
function() {
    return redirect('/login');
    }
]);

Route::any('/logout', [
'as' => 'logout',
function() {
    auth()->logout();
    return redirect('/');
    }
]);

Route::any('/home', [
'as' => 'home',
function() {
    return view('welcome');
    }
]);

/**
 * To create a new Article after
 * hitting submit button.
 */
Route::post('/createarticle', [
    'uses'  => 'ArticleController@articleCreateArticle',
    'as'    => 'article.create'
]);

/**
 * To Delete an Article after
 * hitting delete button.
 */
Route::get('/delete-article/{article_id}', [
    'uses'          => 'ArticleController@deleteArticle',
    'as'            => 'article.delete',
    'middleware'    => 'auth'
]);

/**
 * To Edit an Article after
 * hitting edit button.
 */
Route::get('/edit-article', [
    'uses' => 'ArticleController@editArticle',
    'as' => 'article.edit',
    'middleware' => 'auth'
]);