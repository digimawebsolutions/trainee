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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boroms', 'TraineeController@boroms');
Route::get('/joshua', 'TraineeController@josh');
Route::get('/mai', 'TraineeController@mai');
Route::get('/momai', 'MaiController@mai');