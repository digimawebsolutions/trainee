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

Route::get('/trainee/brain', 'BrainController@index'); //by: brain


Route::get('/boroms', 'TraineeController@boroms');
Route::get('/joshua', 'TraineeController@josh');
Route::get('/mai', 'TraineeController@mai');
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/momai', 'MaiController@mai');
=======
Route::get('/raymond' , 'RaymondController@message');
>>>>>>> e45f12b6a560d03b74eeb359e80ea03f1b82a364
=======
Route::get('/trainee/joshua','JoshuaController@Add');
>>>>>>> 9ba38205d7b2946dd214648859e723f9ec89e562
