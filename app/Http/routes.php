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


// Udana's routes
//Route::resource('advertisements', 'Advertisement\AdvertisementController');

// Sithira's routes
Route::resource('system/employee', 'Employee\EmployeeController');

// System test routes ( timesheet )
//Route::get('/attendance/{employee}/check-in', '');

Route::get('/test', function(){
   $time  = \Carbon\Carbon::now();

    echo $time->toDateString();
});

Route::get('/attendance/{employee}/check-out', function () {

});

Route::auth();

Route::get('/home', 'HomeController@index');
