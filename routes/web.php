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

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login_form');
Route::post('/login', 'HomeController@login');

Route::get('/register', 'HomeController@register_form');
Route::post('/register', 'HomeController@register');

Route::get('/account', 'HomeController@profile');

Route::resource('/employees', 'EmployeeController');