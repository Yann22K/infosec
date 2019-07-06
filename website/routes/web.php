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

Route::get('/', function (){
    dump(DB::select('select * from salle'));
});

Route::get('/salles', 'HomeController@salles');

Route::get('/conditions', 'HomeController@conditions');

Route::get('/about', 'HomeController@aboutus');

Route::get('/contact', 'HomeController@contactus');

Route::get('/details', 'HomeController@salle_details');

Route::get('/connect','LoggerController@connect');

Route::get('/register','LoggerController@register');
