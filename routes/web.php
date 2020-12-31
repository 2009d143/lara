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

/*Route::get('/', function () {
    return view('login');
});*/

Route::view('login', 'login')->name('login');
Route::post('login', 'LoginController@loginAction');

Route::view('registration', 'registration')->name('registration');
Route::post('registration', 'LoginController@registrationAction');

Route::get('/', function () {
    return view('landing');
});

Route::get('/', 'LandingController@landingAction');

Route::get('/imageupload', 'LandingController@imageuploadAction');
Route::post('/imageupload', 'LandingController@imageuploadAction');

Route::get('/admin', 'LandingController@adminAction');
Route::post('/admin', function() {
	echo "Test";exit;
});

