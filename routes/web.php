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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{id}', 'HomeController@show')->name('home.show');

Route::post('/home/{id}', 'HomeController@update')->name('home.update');

Route::resource('drone', 'DroneController');
Route::resource('flightPlan', 'FlightPlanController');

Route::resource('pilot', 'PilotController');