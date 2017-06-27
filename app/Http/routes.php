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


Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::get('/', 'dataController@viewAll');
    Route::get('/post/{id}', 'dataController@view');
    Route::get('/post/delete/{id}', 'dataController@delete');
    Route::get('/insert', function (){
        return view('insert');
    });

    Route::auth();

    Route::post('/insert/data', 'dataController@insert');
    Route::post('/post/edit/{id}/save', 'dataController@update');
    Route::get('/post/edit/{id}', 'dataController@view');

});