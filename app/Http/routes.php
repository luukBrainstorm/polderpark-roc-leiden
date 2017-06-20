<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'dataController@viewAll');
Route::get('/post/{id}', 'dataController@view');
Route::get('/post/delete/{id}', 'dataController@delete');
Route::get('/insert', function (){
    return view('insert');
});
Route::post('/insert/data', 'dataController@insert');
Route::post('/post/php/{id}/save', 'dataController@update');
Route::get('/post/edit/{id}', 'dataController@view');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@showAll');