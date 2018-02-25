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

Route::post('login', 'Auth\AuthController@login');

Route::group(['prefix' => 'medicos','middleware'=> ['jwt']], function () {

    Route::get('/', 'MedicosController@index');
   Route::get('{id}', 'MedicosController@show');
});
