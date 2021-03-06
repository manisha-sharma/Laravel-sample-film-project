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
    return view('auth/login');
});

Auth::routes();
//redirect from / to films
Route::get('/', function () {  
    return redirect('/films'); 
});

Route::get('films/{id}', 'FilmsController@show');
Route::resource('backend/filmgenre', 'GenreController');
Route::resource('backend', 'FilmsController');
Route::resource('comment', 'CommentController');



// /films to access data from backend api http://localhost/test_setup/backend
Route::get('/films', 'FilmsController@index')->name('Films');
