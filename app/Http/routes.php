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
Route::get('/test/', function () {
    (new \App\Http\Controllers\Accounts\AccountController())->testCalcs();
});

Route::get('/system', 'HomeController@getDashBoard');

// Rashinda's routes
Route::get('/system/tour/', 'Tour\TourController@index');
Route::get('/system/tour/hotels/{id}/show','Tour\hotels\HotelController@show');
Route::resource('system/tour/hotels', 'Tour\hotels\HotelController'); // <- this already calls the @create method
Route::resource('system/tour/guide', 'Tour\guide\GuideController'); // <- this already calls the @create method
Route::get('/system/tour/guide/{id}/show','Tour\guide\GuideController@show');
Route::resource('system/tour/tourmanage','Tour\tourmanage\TourManageController');
//Route::get('/system/tour/tourmanage/{id}/show','Tour\tourmanage\TourManageController@show');



// Udana's routes
Route::resource('system/advertisements/types', 'Advertisements\AdvertisementTypesController');
Route::resource('system/advertisements', 'Advertisements\AdvertisingController');

// Sithira's routes
Route::resource('system/employee', 'Employee\EmployeeController');

// Nimansa's routes
Route::resource('system/accounts/', 'Accounts\AccountController');
Route::resource('/system/accounts/quickbook', 'Accounts\QuickBookController');
Route::resource('system/accounts/', 'Accounts\AccountController');
Route::get('system/accounts/stats/{expense}/expense', 'Accounts\AccountController@getMoreExpense');
Route::get('system/accounts/stats/{income}/income', 'Accounts\AccountController@getMoreIncome');
Route::get('system/accounts/graphs/', 'Accounts\AccountController@getGraphsView');

// stats on employee
Route::get('/system/employee/{employee}/stats/salary-slips', 'Employee\EmployeeController@getSalarySlip');
Route::get('/system/employee/{employee}/stats/overtimes', 'Employee\EmployeeController@getOverTime');
Route::get('/system/employee/{employee}/stats/loans', 'Employee\EmployeeController@getLoans');
Route::get('/system/employee/{employee}/stats/leaves', 'Employee\EmployeeController@getLeaves');
Route::get('/system/employee/{employee}/stats/attendance', 'Employee\EmployeeController@getAttendance');
Route::get('/system/employee/{employee}/stats/travel', 'Employee\EmployeeController@getTravel');

/********************************************
 * Employee additional links (advance, loans)
 *******************************************/

// loans routes
Route::group(['middleware' => 'adminOrManager'], function () {
    Route::get('/system/admin/employee/loan/create', 'Employee\General\Additional@getAddLoan');
    Route::post('/system/admin/employee/loan/create', 'Employee\General\Additional@postAddLoan');

// leaves routes
    Route::get('/system/admin/employee/leave/create', 'Employee\General\Additional@getLeaveView');
    Route::post('/system/admin/employee/leave/create', 'Employee\General\Additional@postAddLeave');

// advance payments routes
    Route::get('/system/admin/employee/advance/create', 'Employee\General\Additional@getAdvancePayView');
    Route::post('/system/admin/employee/advance/create', 'Employee\General\Additional@postAdvancePayView');

    Route::get('/api/secured/employee/loans/{employee}', function ($employee) {
        return \App\User::findOrFail($employee)->loans->toJson();
    });

    Route::get('/api/secured/employee/leaves/{employee}', function ($employee) {
        return \App\User::findOrFail($employee)->leaves->toJson();
    });

    Route::get('/api/secured/employee/advance/{employee}', function ($employee) {
        return \App\User::findOrFail($employee)->advance->toJson();
    });

    Route::get('/api/secured/employee/name/{employee}', function ($employee) {
       return \App\User::where('name', 'like', '%'.$employee.'%')->get()->toJson();
    });
});

// Achala's routes
Route::get('/system/customer/{id}/terminate', 'Customer\CustomerController@terminate');
Route::get('/system/customer/undo/{id}/terminate', 'Customer\CustomerController@undoterminate');
Route::get('/system/customer/view/', 'Customer\CustomerController@view');
Route::resource('/system/customer', 'Customer\CustomerController');
Route::resource('system/ticket', 'Ticket\TicketController');

Route::resource('system/ticket','Ticket\TicketController');

//Achala's ajaxs
Route::get('/api/secured/customer/tours/{package_id}', function ($package_id) {
    return \App\Models\Tour\Tour::where('package_id', $package_id)->get();

});

//Nuwan's Routes
Route::resource('system/rental/vehicle', 'Rental\RentalController');
Route::resource('system/rental/driver', 'Rental\DriverController');
Route::resource('system/rental/reservation', 'Rental\ReservationController');
Route::resource('system/rental/income','Rental\IncomeController');
Route::resource('system/rental/expense','Rental\ExpenseController');
Route::resource('system/rental/profit','Rental\ProfitController');
Route::resource('system/rental/vehicle','Rental\RentalController');
Route::resource('system/rental/driver','Rental\DriverController');
Route::resource('system/rental/reservation','Rental\ReservationController');
Route::resource('system/rental','HomeController@getRentalDashboard');


// Danajalee's routes
Route::get('/system/package/{id}/terminate', 'Package\PackageController@terminate');
Route::resource('/system/package', 'Package\PackageController');

// System test routes ( timesheet )
Route::get('/attendance/{employee}/check-out', 'Employee\TimeSheetController@checkOut');
Route::get('/attendance/{employee}/check-in', 'Employee\TimeSheetController@checkIn');
