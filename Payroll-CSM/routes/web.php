<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EmployeeController;
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
    return view('admin.admin_login');
})->name('admin_login');
Route::get('/login', function () {
    return view('admin.admin_login');
})->name('admin_login');


/**All Function Route call */
Route::match(['get','post'], '/adminlogin', [AuthenticationController::class, 'login']);
Auth::routes();


/**Admin Panel After login*/
Route::group(['middleware'=>'admin_auth'],function(){
//This protect the section which require login 
Route::get('/dashboard', [EmployeeController::class, 'dashboard']); 
Route::get('/viewPayroll', [EmployeeController::class, 'viewPayroll']); 
Route::get('/viewProfile/{emp_id}', [EmployeeController::class, 'viewProfile']);

Route::get('/viewSalarySlip', function () {
    return view('admin.viewSlip');
});


// Employee Related Operation Routing
Route::match(['get','post'], '/addEmployee', [EmployeeController::class, 'addEmployee']); 
Route::match(['get','post'], '/createPaySlip', [EmployeeController::class, 'createPaySlip']); 



});

