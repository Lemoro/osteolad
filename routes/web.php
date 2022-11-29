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

// Route::get('/', function () {
//     return view('main.index');
// })->name('main');
Route::get('response', 'ResponseController@index')->name("main.response.index");
// Route::get('response/{response}', 'ResponseController@show')->name("main.response.show");

Route::get('blog', 'BlogController@index')->name("main.blog.index");
Route::get('blog/{blog}', 'BlogController@show')->name("main.blog.show");

Route::get('activity', 'ActivityController@index')->name("main.activity.index");
Route::get('activity/{activity}', 'ActivityController@show')->name("main.activity.show");

Route::get('consult', 'ConsultController@index')->name("main.consult.index");
Route::get('consult/{consult}', 'ConsultController@show')->name("main.consult.show");


// Route::get('image-crop', 'ImageController@imageCrop');
Route::post('image-crop', 'ImageController@imageCropPost')->name("imageCrop");

// Route::post('/ajax/appointment', function(){
//     return response('Hello World', 200)
//                   ->header('Content-Type', 'text/plain');
// })->name('appointment.store');

// Route::post('/ajax/appointment', 'AppointmentController@store')->name('appointment.store');

// Route::get('/ajax/index', 'AppointmentController@index')->name('appointment.index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('test', function(){
//   return 'route-test';
// })->middleware(['auth','admin']);

// Route::get('test404', function(){
//   return 'r404';
// })->name('test404');

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');

Route::group(['namespace' => 'Adms', 'prefix' => 'adms', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('adms.admin');
    })->name('adms.admin');

    Route::group(['prefix' => 'about'], function () {

        Route::get('/', 'AboutController@index')->name('about');

        Route::get('/create', 'AboutController@create')->name('about.create');
        Route::post('/', 'AboutController@store')->name('about.store');

        Route::get('/edit', 'AboutController@edit')->name('about.edit');
        Route::patch('/', 'AboutController@update')->name('about.update');

    });

    Route::group(['prefix' => 'contact'], function () {

        Route::get('/', 'ContactController@index')->name('contact.index');
        Route::get('/edit', 'ContactController@edit')->name('contact.edit');
        Route::post('/', 'ContactController@update')->name('contact.update');
    });

//
    // Route::group(['prefix' => 'certificate'], function () {

    //     Route::get('/', 'CertificateController@index')->name('certificate.index');

    //     Route::get('/create', 'CertificateController@create')->name('certificate.create');
    //     Route::post('/', 'CertificateController@store')->name('certificate.store');

    //     Route::get('{certificate}/edit', 'CertificateController@edit')->name('certificate.edit');
    //     Route::patch('/{certificate}', 'CertificateController@update')->name('certificate.update');

    //     Route::delete('/{certificate}', 'CertificateController@destroy')->name('certificate.destroy');

    // });
    Route::resource('certificate', 'CertificateController');

    Route::resource('activity', 'ActivityController');

    Route::resource('consult', 'ConsultController');

    Route::resource('response', 'ResponseController');

    Route::resource('blog', 'BlogController');

    Route::resource('galery', 'GaleryController');

    Route::resource('video', 'VideoController');

    Route::resource('appointment', 'AppointmentController');

//суперадмин
    Route::group(['namespace' => 'user'], function () {
        Route::get('/user')->name('adms.user');
    });
});
