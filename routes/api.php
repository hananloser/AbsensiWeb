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

Route::post('/login', 'API\PegawaiControllerApi@login');
Route::post('/absen', 'API\AbsensiControllerApi@store');
Route::get('/atasan', 'API\PegawaiControllerApi@atasan');
Route::post('/cuti', 'API\CutiControllerApi@store');
Route::post('/darurat', 'API\DaruratControllerApi@store');
