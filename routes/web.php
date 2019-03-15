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
    return view('welcome');
});

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/employee', 'Auth\LoginController@showEmployeeLoginForm');
Route::get('/login/user', 'Auth\LoginController@showUserLoginForm');
Route::get('/register/employee', 'Auth\RegisterController@showEmployeeRegisterForm');
Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm');

Route::post('/login/employee', 'Auth\LoginController@employeeLogin');
Route::post('/login/user', 'Auth\LoginController@userLogin');
Route::post('/register/employee', 'Auth\RegisterController@createEmployee');
Route::post('/register/user', 'Auth\RegisterController@createUser');

Route::view('/home', 'home')->middleware('auth');
Route::view('/employee', 'employee');
Route::view('/user', 'user');