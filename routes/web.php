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

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/users/register', 'RegisterController@showRegistrationForm')->name('register');;
    Route::post('/users/register', 'RegisterController@register');
    Route::get('/users/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/users/login', 'LoginController@login');
    Route::get('/users/logout', 'LogoutController@logout')->name('logout');
    Route::post('/account/password', 'ChangePasswordController@change')->name('change_password');
    Route::get('/account/password', 'ChangePasswordController@index')->name('change_password');
});

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/account', 'AccountController@index')->name('account');
    Route::get('/account/edit-profile', 'AccountController@editProfile')->name('edit_profile');
    Route::post('/account/edit-profile', 'AccountController@updateProfile')->name('update_profile');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contact');
    Route::post('/contact', 'HomeController@contactSend')->name('contact');
    Route::get('/products', 'ProductController@index')->name('product');
    Route::get('/product-of-category/{id}', 'ProductController@filterByCategory')->name('productcategory');
    Route::get('/product/{slug}', 'ProductController@show')->name('prodcut_detail');
});
