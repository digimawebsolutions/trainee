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

Route::get('/crud', 'CrudController@index');
Route::any('/crud/add', 'CrudController@add');
Route::any('/crud/edit', 'CrudController@edit');
Route::any('/crud/delete', 'CrudController@delete');

Route::get('/josh', 'JoshController@index');
Route::any('/josh/add', 'JoshController@add');
Route::any('/josh/edit', 'JoshController@edit');
Route::any('/josh/delete', 'JoshController@delete');

Route::get('/home_ajax_customer', 'TraineeController@home_ajax_customer');
Route::get('/trainee/brain', 'BrainController@index'); //by: brain
Route::get('/boroms', 'TraineeController@boroms');
Route::get('/joshua', 'TraineeController@josh');
Route::get('/mai', 'TraineeController@mai');

Route::get('/monde/login', 'RaymondController@login');
Route::get('/monde', 'RaymondController@index');
Route::any('/monde/add', 'RaymondController@add');
Route::any('/monde/edit', 'RaymondController@edit');
Route::any('/monde/delete', 'RaymondController@delete');

Route::get('/trainee/guillermo', 'GuillermoController@index');
Route::get('/trainee/rommel', 'RommelController@index');

Route::get('/rommel', 'RommelController@index');
Route::any('/rommel/add', 'RommelController@add');
Route::any('/rommel/edit', 'RommelController@edit');
Route::any('/rommel/delete', 'RommelController@delete');

Route::get('/trainee/borroms', 'BorromsController@borroms');

Route::get('/renz', 'RenzController@view_my_index');
Route::get('/renz_crud', 'RenzCrudController@renz_crud');
Route::any('/renz_crud_add', 'RenzCrudController@renz_crud_add');
Route::any('/renz_crud/delete', 'RenzCrudController@delete');
Route::any('/renz_crud/edit', 'RenzCrudController@edit');

Route::any('/trainee/borroms/add', 'BorromsController@add');
Route::any('/trainee/borroms/edit', 'BorromsController@edit');
Route::any('/trainee/borroms/delete', 'BorromsController@delete');

Route::get('/trainee/renz', 'RenzController@renz');
Route::get('/raymond' , 'RaymondController@message');
Route::get('/trainee/joshua','JoshuaController@Add');


Route::get('/flat','FlatController@index');
Route::get('/', 'TraineeController@home');
Route::get('/momai', 'MaiController@index');
Route::any('/momai/add', 'MaiController@add');
Route::any('/momai/edit', 'MaiController@edit');
Route::any('/momai/delete', 'MaiController@delete');

