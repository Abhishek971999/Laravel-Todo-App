<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'TaskController@index');
Route::get('/create','TaskController@create');
Route::post('/','TaskController@store');
Route::delete('/{id}','TaskController@destroy');
