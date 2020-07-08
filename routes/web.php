<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@sing_in_page');
// ->middleware('checkLogin:login')
Route::get('/index', 'MainController@index');
// ->middleware('checkLogin:index')

// student register
Route::post('/student_register', 'MainController@student_register');

// employee register
Route::post('/employee_register', 'MainController@employee_register');

// login
Route::post('/login', 'MainController@login');

// logout
Route::get('/logout', 'MainController@logout');

// <= =============== Verify =============== =>
Route::get('/account/verify/{hash}/{id}', "MainController@g_verify");
