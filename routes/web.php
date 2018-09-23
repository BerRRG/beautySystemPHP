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

Route::get('/', 'CalendarController@showCalendar');
Route::resource('/calendario', 'CalendarController');
Route::post('events', 'CalendarController@addEvent')->name('events.add');

Route::get('/contas-calendario', 'BillController@showCalendar');
Route::resource('contas', 'BillController');
Route::post('bills', 'BillController@addEvent')->name('bills.add');

Route::get('/user', 'UserController@index');

Route::resource('clients', 'ClientController');

Route::resource('clinics', 'ClinicController');

Route::resource('professionals', 'ProfessionalController');

Route::resource('treatments', 'TreatmentController');