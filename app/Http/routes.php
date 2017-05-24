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
<<<<<<< HEAD
Route::get('/trainee/rommel', 'RommelController@index');
=======
Route::get('/trainee/joshua','JoshuaController@Add');
>>>>>>> 9ba38205d7b2946dd214648859e723f9ec89e562
