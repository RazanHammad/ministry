<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('dashboard.index');
});*/

Route::resource('/person','personController');

Route::resource('/qualy','qualyController');

Route::resource('/project','projectController');


Route::resource('/study','feasabilityController');
Route::get('search','indexController@getsearch');
Route::resource('/','indexController');