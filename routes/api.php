<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'cors'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('users-info', 'AuthController@getUserInfo');
        Route::post('logout', 'AuthController@logout');

        Route::get('users','UserController@index');
        Route::post('users/store','UserController@store');
    });
    Route::post('login', 'AuthController@login');
});

