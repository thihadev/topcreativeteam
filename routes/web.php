<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Super admin route
 */
Route::prefix(config('app.admin_prefix'))->group(function () // 'weesi-admin'
{
	Auth::routes();
	Route::middleware(['auth', 'superadmin'])->group(function () {
		Route::get('/', 'Admin\DashboardController@index')->name('admin.index');
		Route::resource('users', 'Admin\UserController', ['as' => 'admin']);

	});
});

