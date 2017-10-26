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

// resource controller job and applicant
Route::resource('applicant', 'JobAppController@show');
Route::resource('delete', 'JobAppController@destroy');
Route::resource('accept', 'JobAppController@update');

Route::get('/profile', 'JobAppController@profile');
Route::get('/join', 'ApplicantController@index');
Route::post('/join', 'ApplicantController@store')->name('join_post');

 
// cartalyst sentinel
Route::get('signup', 'UserController@signup')->name('signup');
Route::post('signup', 'UserController@signup_store')->name('signup.store');

Route::get('/admin', 'JobAppController@index');
Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');
Route::get('logout', 'SessionsController@logout')->name('logout');

Route::get('/home', 'HomeController@index');


// reminder
Route::get('forgot-password', 'ReminderController@create')->name('reminders.create');
Route::post('forgot-password', 'ReminderController@store')->name('reminders.store');

//this routes for handle changes password
Route::get('reset-password/{id}/{token}', 'ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');