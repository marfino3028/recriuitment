<?php

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


Route::resource('/home', 'HomeController')->middleware('auth');

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
})->middleware('auth');


Route::get('/register', function () {
    //return view('welcome');
    return view('auth.register');
});





//route untuk aplikasi

Route::resource('/employees', 'EmployeesController')->middleware('auth');
Route::resource('/companies', 'CompaniesController')->middleware('auth');
Route::resource('/user', 'UserController')->middleware('auth');

Route::resource('/profile', 'ProfileController')->middleware('auth');



Route::get('employees-pdf', 'EmployeesController@employeesPDF')->middleware('auth');
Route::get('export', 'EmployeesController@export')->name('export')->middleware('auth');
Route::get('companies-pdf', 'CompaniesController@companiesPDF')->middleware('auth');
Route::get('export', 'CompaniesController@export')->name('export')->middleware('auth');


Route::get('/afterRegister', function () {
    return view('layouts.afterRegister');
});


Route::get('/clear-cache', function(){
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Auth::routes();

