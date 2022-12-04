<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('response', 'ResponseController@index')->name("main.response.index");

Route::get('blog', 'BlogController@index')->name("main.blog.index");

Route::get('blog/{blog}', 'BlogController@show')->name("main.blog.show");

Route::get('activity', 'ActivityController@index')->name("main.activity.index");

Route::get('activity/{activity}', 'ActivityController@show')->name("main.activity.show");

Route::get('consult', 'ConsultController@index')->name("main.consult.index");

Route::get('consult/{consult}', 'ConsultController@show')->name("main.consult.show");

Route::post('image-crop', 'ImageController@imageCropPost')->name("imageCrop");

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');

Route::group(['namespace' => 'Adms', 'prefix' => 'adms', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', function () {return view('adms.admin');})->name('adms.admin');

    Route::resource('certificate', 'CertificateController');

    Route::resource('activity', 'ActivityController');

    Route::resource('consult', 'ConsultController');

    Route::resource('response', 'ResponseController');

    Route::resource('blog', 'BlogController');

    Route::resource('galery', 'GaleryController');

    Route::resource('video', 'VideoController');

    Route::resource('appointment', 'AppointmentController');

    Route::resource('about', 'AboutController');

    Route::resource('contact', 'ContactController');

    // Route::group(['prefix' => 'contact'], function () {

    //     Route::get('/', 'ContactController@index')->name('contact.index');
    //     Route::get('/edit', 'ContactController@edit')->name('contact.edit');
    //     Route::post('/', 'ContactController@update')->name('contact.update');
    // });
});
