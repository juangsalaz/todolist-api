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

Route::prefix('/v1')->group(function () {
    Route::post('activities', 'ActivitiesController@store');
    Route::post('activities/{activity_id}/items', 'ActivitiesController@storeLists');
    
    Route::get('activities', 'ActivitiesController@show');
    Route::get('activities', 'ActivitiesController@show');
    
    Route::patch('activities/{activity_id}', 'ActivitiesController@activityUpdate');
    Route::patch('activities/{activity_id}/items/{item_id}', 'ActivitiesController@itemUpdate');
});
