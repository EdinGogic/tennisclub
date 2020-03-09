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

Route::resource('members', 'memberController');

Route::get('/customers/new', 'CustomerController@new');
Route::get('/home', function () {
    return view('home');
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update', 'CustomerController@update');
Route::post('/customers/create', 'CustomerController@create')->name('customers.create');



Route::resource('courts', 'courtController');
Route::resource('bookings', 'bookingController');

Route::post('/bookings/save', 'bookingController@store')->name('bookings.save');

Route::get('/calendar/display', 'calendarController@display');

Route::get('/calendar/json','CalendarController@json')->name('calendar.json');


Route::resource('membershiptypes', 'membershiptypeController');