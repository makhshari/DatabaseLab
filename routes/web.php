<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {


    $tasks = \App\Task::orderBy('created_at', 'asc')->get();
    return view('dashboard', ['tasks' => $tasks]);
});



Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');


