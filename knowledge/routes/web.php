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
    return view('form');
});

Route::get('form','EmployeeController@form');
Route::get('reset_password','ForgotPasswordController@forget_password');
Route::get('try','EmployeeController@try');
Route::get('demo','EmployeeController@demo');
Route::get('loginform','EmployeeController@loginform')->name('login');


Route::get('rab','EmployeeController@rab');

Route::post('insert','EmployeeController@insert');
Route::post('login1','EmployeeController@login');
Route::post('charityform','EmployeeController@charityform');
Route::post('sendForgotPasswordLink','ForgotPasswordController@sendForgotPasswordLink');
Route::get('reset_password/{token}','ForgotPasswordController@resetPassword');
Route::post('setNewPassword','ForgotPasswordController@setNewPassword');

Route::middleware(['auth'])->group(function () {
	
	Route::get('logout','EmployeeController@logout');
	Route::get('home','EmployeeController@home');

	Route::get('registrationform','EmployeeController@registrationform');
});
