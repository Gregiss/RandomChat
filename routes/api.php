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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function() {
    Route::prefix('/msgs')->group(function(){
        Route::get('/', 'MsgController@index')->name('index_msgs');
        Route::get('/{id}', 'MsgController@show')->name('single_msgs');
    });
});
