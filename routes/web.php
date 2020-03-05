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

Auth::routes(['verify' => true]);

Route::get('/', 'Guest\GuestController@index')->name('main');

Route::prefix('/')->group(function() {
	Route::get('/home', 'User\HomeController@index')->name('home');
	Route::post('/users/logout', 'Auth\LoginController@logout')->name('user.logout');
});

Route::get('/login/{social}','Auth\LoginController@redirectToProvider')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::prefix('admin')->group(function() {
	Route::get('/', 'Admin\HomeController@index')->name('admin.dashboard');
	Route::get('/home', 'Admin\HomeController@index')->name('admin.home');

	// Login Logout Routes
	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');

	// Password Resets Routes
	Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.update');
	Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
});
