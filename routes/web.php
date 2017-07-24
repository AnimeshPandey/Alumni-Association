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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/details/{roll_no}','SearchController@details');


Route::get('/searchresults', 'SearchController@search');

Route::post('details/upload', 'HomeController@upload');


Route::get('/makeprofile','ProjectController@ProfileForm');

Route::post('/profilex','ProjectController@ProfileNow');