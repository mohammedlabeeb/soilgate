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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'GatesController@index');

// Gates Routing on User Side

Route::get('/gates', 'GatesController@index');
Route::get('/gates/addnew', 'GatesController@addnew');
Route::post('/gates/addnew', 'GatesController@addnew');
Route::get('/gates/edit/{gateid}', ['uses' =>'GatesController@edit']);
Route::post('/gates/edit/{gateid}', ['uses' =>'GatesController@edit']);
Route::get('/gates/delete/{gateid}', ['uses' =>'GatesController@delete']);
Route::post('/gates/delete/{gateid}', ['uses' =>'GatesController@delete']);

// Sensors Routing on User Side

Route::get('/gates/{gateid}/view/sensors', ['uses' =>'DevicesController@index']);
Route::post('/gates/{gateid}/view/sensors/', ['uses' =>'DevicesController@index']);
Route::get('/gates/{gateid}/addnew/sensor', ['uses' =>'DevicesController@addnew']);
Route::post('/gates/{gateid}/addnew/sensor', ['uses' =>'DevicesController@addnew']);

Route::get('/device/edit/{deviceid}', ['uses' =>'DevicesController@edit']);
Route::post('/device/edit/{deviceid}', ['uses' =>'DevicesController@edit']);

Route::get('gate/{gateid}/device/delete/{deviceid}', ['uses' =>'DevicesController@delete']);
Route::post('gate/{gateid}/device/delete/{deviceid}', ['uses' =>'DevicesController@delete']);

Route::get('/device/viewlog/{device_id}', ['uses' =>'DevicesController@viewlog']);
Route::post('/device/viewlog/{device_id}', ['uses' =>'DevicesController@viewlog']);

Route::get('/device/{device_id}/addlog/', ['uses' =>'DevicesController@addlog']);