<?php

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
// Route::post('/appointment', function(){

//   return 'appointment';
// })->name('api.appointment.store');

Route::post('/appointment', 'AppointmentController@store')->name('api.appointment.store');

Route::post('/response', 'ResponseController@store')->name('api.response.store');

Route::post('/consult', 'ConsultController@store')->name('api.consult.store');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
