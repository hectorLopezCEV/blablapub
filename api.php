<?php

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

Route::post('login', 'AuthController@login');

Route::post('refresh', 'AuthController@refresh');

Route::post('user', 'UserController@store');

Route::post('user/reset-password', 'UserController@resetPassword');

Route::group([
    'middleware' => 'auth:api',
], function ($router) {
    // Auth routes
    Route::post('logout', 'AuthController@logout');
    Route::post('profile', 'AuthController@profile');

    // User routes
    // TODO: sacar la ruta de crear usuario del auth:api
    // Route::resource('/user', 'UserController'); ///// creamos las rutas /////
    Route::get('user', 'UserController@index');
    Route::get('user/{id}', 'UserController@show');
    Route::put('user/{id}', 'UserController@update');
    Route::delete('user/{id}', 'UserController@destroy');

    // Place routes
    Route::resource('/place', 'PlaceController');

    // Promotion routes
    Route::resource('/promotion', 'PromotionsController');
});

