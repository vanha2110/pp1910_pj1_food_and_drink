<?php

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    
    Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LogoutController@logout')->name('logout');
    });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/index', 'HomeController@index')->name('index');
    });

    Route::group(['as' => 'users.', 'prefix' => '/users'], function () {
        Route::resource('users', 'UserController');
    });

    Route::resource('categories', 'CategoryController');
});