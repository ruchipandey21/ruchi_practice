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
  Route::get('send','TestController@send');
  Route::get('getdetails','TestController@getdetails');
  Route::get('reg','TestController@reg');
   Route::get('home', 'TestController@viewer');
   Route::get('report','TestController@report');
   Route::post('login','TestController@login');
     Route::get('loginview','TestController@loginview'); 
     Route::get('registerform','TestController@registerform');
      Route::post('insertform','TestController@insertform');
      Route::post('add','TestController@add');
      Route::get('logout', 'TestController@logout');
      Route::get('delete/{id}','TestController@delete');
 Route::post('update','TestController@update');
  Route::get('edit/{id}', 'TestController@edit');
   Route::get('view/{id}', 'TestController@view');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('home','TestController@index');
