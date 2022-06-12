<?php

use Illuminate\Support\Facades\Route;



Route::get('/water', function () {
    return view('waterlevel/water');
});

Route::get('/', function () {
    return view('dashboard/index');
});

Route::get('/water/add','WaterController@index');
Route::get('/water/store','WaterController@store');


Route::get('/water/value','WaterController@show');
Route::get('/water/humidity','WaterController@humidity');
Route::get('/water/temp','WaterController@temp');


Route::view('/auto','arduino/auto');

Route::get('/ard/val','ArdController@index');
Route::get('/ard/create','ArdController@create');
Route::post('/ard/btn','ArdController@store');

Route::get('/ard/{id}','ArdController@update');
