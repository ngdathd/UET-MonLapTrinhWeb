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


Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/request-it', 'Requests\RequestController');

Route::resource('/request/all', 'Requests\Mine\RequestAllController');
Route::resource('/request/new', 'Requests\Mine\RequestNewController');
Route::resource('/request/inprocess', 'Requests\Mine\RequestInprocessController');
Route::resource('/request/resolved', 'Requests\Mine\RequestResolvedController');
Route::resource('/request/out', 'Requests\Mine\RequestOutController');

Route::resource('/profile', 'ProfileController');

Route::resource('/employee', 'EmployeeController');