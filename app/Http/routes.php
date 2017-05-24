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
Route::get('/trainee/rommel', 'RommelController@index');

=======
<<<<<<< HEAD

Route::get('/trainee/borroms', 'BorromsController@borroms');
=======
<<<<<<< HEAD
Route::get('/trainee/renz', 'RenzController@renz');
=======
<<<<<<< HEAD
Route::get('/raymond' , 'RaymondController@message');
=======
Route::get('/trainee/joshua','JoshuaController@Add');
>>>>>>> 9ba38205d7b2946dd214648859e723f9ec89e562
>>>>>>> d5a31eef5bb87e5bee00fe3ac7f2dbfc756938d3
>>>>>>> c15873603489a6e477c315ef15e623e3f166e92d
>>>>>>> 8a5981a0c67c3c6f07f05c96c5facdf8afb6f8a4
