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

Route::get('/test/{test}', 'Employee\CalculateSalary@calculateSalaray');

Route::get('/system', 'HomeController@getDashBoard');

// Rashinda's routes
//Route::resource('tourpackage', 'Tour\TourPackageController');

// Udana's routes
Route::resource('advertisements', 'Advertisements\AdvertisementController');
Route::post('advertisements','Advertisements\AdvertisingController@store');


// Sithira's routes
Route::resource('system/employee', 'Employee\EmployeeController');

// stats on employee
Route::get('/system/employee/{employee}/stats/salary-slips', 'Employee\EmployeeController@getSalarySlip');
Route::get('/system/employee/{employee}/stats/overtimes', 'Employee\EmployeeController@getOverTime');
Route::get('/system/employee/{employee}/stats/loans', 'Employee\EmployeeController@getLoans');
Route::get('/system/employee/{employee}/stats/leaves', 'Employee\EmployeeController@getLeaves');
Route::get('/system/employee/{employee}/stats/attendance', 'Employee\EmployeeController@getAttendance');
Route::get('/system/employee/{employee}/stats/travel', 'Employee\EmployeeController@getTravel');

// employee additional links (advance, loans)
Route::get('/system/employee/extra/loan/create', 'Employee\General\Additional@getAddLoan');
Route::post('/system/employee/extra/loan/create', 'Employee\General\Additional@postAddLoan');

Route::get('/system/employee/extra/leave/create', 'Employee\General\Additional@getLeaveView');
Route::post('/system/employee/extra/leave/create', 'Employee\General\Additional@postAddLeave');

Route::get('/system/employee/extra/advance/create', 'Employee\General\Additional@getAdvancePayView');
Route::post('/system/employee/extra/advance/create', 'Employee\General\Additional@postAdvancePayView');

// Achala's routes
Route::get('/system/customer/view/', 'Customer\CustomerController@view');
Route::resource('/system/customer', 'Customer\CustomerController');

//Nuwan's Routes
Route::resource('system/rental','Rental\RentalController');


// System test routes ( timesheet )
Route::get('/attendance/{employee}/check-out', 'Employee\TimeSheetController@checkOut');
Route::get('/attendance/{employee}/check-in', 'Employee\TimeSheetController@checkIn');
