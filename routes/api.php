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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tasks')->group(function() {
    Route::get('/1', 'TaskController@taskOne');
    Route::get('/2', 'TaskController@taskTwo');
    Route::get('/3', 'TaskController@taskThree');
    Route::get('/4', 'TaskController@taskFour');
});