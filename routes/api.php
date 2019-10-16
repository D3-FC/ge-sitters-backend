<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function (){

    Route::get('/users/me', 'UserController@me');
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::put('/users/{user}', 'UserController@update');
    Route::delete('/users/{user}', 'UserController@destroy');
    Route::get('/users/{user}', 'UserController@show');
    Route::delete('/users', 'UserController@destroyMany');

    Route::get('/workers', 'WorkerController@index');

    Route::get('/ads', 'AdsController@index');
    Route::post('/ads', 'AdsController@store');
    Route::put('/ads/{ads}', 'AdsController@update');
    Route::delete('/ads/{ads}', 'AdsController@destroy');
    Route::get('/ads/{ads}', 'AdsController@show');




});
