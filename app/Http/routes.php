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
<<<<<<< HEAD
Route::get('/momai', 'MaiController@mai');
=======
Route::get('/raymond' , 'RaymondController@message');
>>>>>>> e45f12b6a560d03b74eeb359e80ea03f1b82a364
=======
=======
Route::get('/trainee/borroms', 'BorromsController@borroms');
Route::get('/trainee/renz', 'RenzController@renz');
Route::get('/raymond' , 'RaymondController@message');
>>>>>>> 62a1105708c8f75eb465a0e311adb85a7258a570
Route::get('/trainee/joshua','JoshuaController@Add');
