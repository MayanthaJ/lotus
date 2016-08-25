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
    //(new \App\Http\Controllers\Accounts\AccountController())->testCalcs();

    $finances = Lava::DataTable();

    $finances->addDateColumn('Date')
        ->addNumberColumn('Max Temp')
        ->addNumberColumn('Mean Temp')
        ->addNumberColumn('Min Temp')
        ->addRow(['2014-10-1', 67, 65, 62])
        ->addRow(['2014-10-2', 68, 65, 61])
        ->addRow(['2014-10-3', 68, 62, 55])
        ->addRow(['2014-10-4', 72, 62, 52])
        ->addRow(['2014-10-5', 61, 54, 47])
        ->addRow(['2014-10-6', 70, 58, 45])
        ->addRow(['2014-10-7', 74, 70, 65])
        ->addRow(['2014-10-8', 75, 69, 62])
        ->addRow(['2014-10-9', 69, 63, 56])
        ->addRow(['2014-10-10', 64, 58, 52])
        ->addRow(['2014-10-11', 59, 55, 50])
        ->addRow(['2014-10-12', 65, 56, 46])
        ->addRow(['2014-10-13', 66, 56, 46])
        ->addRow(['2014-10-14', 75, 70, 64])
        ->addRow(['2014-10-15', 76, 72, 68])
        ->addRow(['2014-10-16', 71, 66, 60])
        ->addRow(['2014-10-17', 72, 66, 60])
        ->addRow(['2014-10-18', 63, 62, 62]);

    $columnchart = Lava::LineChart('Finances', $finances, [
        'title' => 'Company Performance',
        'titleTextStyle' => [
            'color' => '#eb6b2c',
            'fontSize' => 14
        ]
    ]);

    return view('testView', compact('columnchart'));


});

Route::get('/system', 'HomeController@getDashBoard');

// Rashinda's routes
//Route::resource('tourpackage', 'Tour\TourPackageController');

// Udana's routes
Route::resource('system/advertisements', 'Advertisements\AdvertisingController');


// Sithira's routes
Route::resource('system/employee', 'Employee\EmployeeController');

// Nimansa's routes
Route::resource('system/accounts/', 'Accounts\AccountController');

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
});


// Achala's routes
Route::get('/system/customer/view/', 'Customer\CustomerController@view');
Route::resource('/system/customer', 'Customer\CustomerController');
Route::resource('system/ticket', 'Ticket\TicketController');

//Nuwan's Routes
Route::resource('system/rental/vehicle', 'Rental\RentalController');
Route::resource('system/rental/driver', 'Rental\DriverController');
Route::resource('system/rental/reservation', 'Rental\ReservationController');

// System test routes ( timesheet )
Route::get('/attendance/{employee}/check-out', 'Employee\TimeSheetController@checkOut');
Route::get('/attendance/{employee}/check-in', 'Employee\TimeSheetController@checkIn');
