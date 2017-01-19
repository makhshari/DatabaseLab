<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::delete('/nulldesc/{task}', 'TaskController@nulldesc');
    Route::post('/updesc/{task}', 'TaskController@updesc');
    Route::post('/uprank/{task}', 'TaskController@uprank');
    Route::post('/uplist/{task}', 'TaskController@uplist');
    Route::post('/uplistrank/{task}', 'TaskController@uplistrank');

    Route::auth();

});
