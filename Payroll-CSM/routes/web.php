<?php

use App\Http\Controllers\AuthenticationController;

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

Route::get('/', function () {
    return view('admin_login');
});

Route::match(['get','post'], '/adminlogin', [AuthenticationController::class, 'login']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
