<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', function () {
//     return view('frontend.index');
// });

Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('/about', 'Frontend\FrontendController@about')->name('about');
Route::get('/services', 'Frontend\FrontendController@services')->name('services');
Route::get('/gallery', 'Frontend\FrontendController@gallery')->name('gallery');
// Route::get('/', 'FrontendController@index')->name('index');

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

