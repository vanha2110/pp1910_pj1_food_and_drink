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

Route::get('/', function () {
    return view('web.index');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/users/register', 'RegisterController@showRegistrationForm')->name('register');;
    Route::post('/users/register', 'RegisterController@register');
    Route::get('/users/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/users/login', 'LoginController@login');
    Route::get('/users/logout', 'LogoutController@logout')->name('logout');
    
    Route::post('/account/password', 'ChangePasswordController@change')->name('change_password');
    Route::get('/account/password', 'ChangePasswordController@index');
});

Route::group(['namespace' => 'Web'], function () {
    Route::get('/account', 'AccountController@index')->name('account');
});

Route::get('/account/password', function () {
    return view('web.user.password.index');
});