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

Route::get('/', 'TraineeController@home');
Route::get('/home_ajax_customer', 'TraineeController@home_ajax_customer');
Route::get('/trainee/brain', 'BrainController@index'); //by: brain
Route::get('/boroms', 'TraineeController@boroms');
Route::get('/joshua', 'TraineeController@josh');
Route::get('/mai', 'TraineeController@mai');
Route::get('/trainee/guillermo', 'GuillermoController@index');
Route::get('/trainee/rommel', 'RommelController@index');
Route::get('/trainee/borroms', 'BorromsController@borroms');
Route::get('/trainee/renz', 'RenzController@renz');
Route::get('/raymond' , 'RaymondController@message');
Route::get('/trainee/joshua','JoshuaController@Add');
