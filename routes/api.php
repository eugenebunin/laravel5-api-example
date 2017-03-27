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

// For web test purpose
Auth::routes();

Route::post('/auth/register', 'Api\Auth\RegisterController@register');

// Cabinet group
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/me', 'Api\Me\ProfileController@show');
    Route::put('/me', 'Api\Me\ProfileController@update');
});
