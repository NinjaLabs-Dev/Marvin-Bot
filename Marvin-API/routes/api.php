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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('{id}/welcome', function ($id) {
    $result = DB::select('select welcome, channel from memberupdate where id = ?', array($id));
    return $result;
});

Route::post('{id}/leave', function ($id) {
    $result = DB::select('select goodbye, channel from memberupdate where id = ?', array($id));
    return $result;
});