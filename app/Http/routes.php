<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// employee login route ( do not remove )
Route::auth();

// main home page controller ( do not remove )
Route::get('/home', 'HomeController@index');


// Rashinda's routes
//Route::resource('tourpackage', 'Tour\TourPackageController');

// Udana's routes
//Route::resource('advertisements', 'Advertisement\AdvertisementController');

// Sithira's routes
Route::resource('system/employee', 'Employee\EmployeeController');
Route::get('/system/employee/{employee}/stats/salary-slips', 'Employee\EmployeeController@getSalarySlip');
Route::get('/system/employee/{employee}/stats/overtimes', 'Employee\EmployeeController@getOverTime');

Route::resource('system/customer', 'Customer\CustomerController');

// System test routes ( timesheet )
Route::get('/attendance/{employee}/check-out', 'Employee\TimeSheetController@checkOut');
Route::get('/attendance/{employee}/check-in', 'Employee\TimeSheetController@checkIn');

Route::auth();

Route::get('/home', 'HomeController@index');