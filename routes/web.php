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
//User Normal
Auth::routes();
Route::get('/home',           'HomeController@index')->name('home');
Route::get('/logout/general', 'Auth\LoginController@logoutUser')->name('general.logout');
//Admin Auth
Route::get('/admin/login',    'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login',   'Auth\AdminLoginController@loginPost')->name('admin.login.submit');
Route::get('/admin-home',     'AdminHomeController@index')->name('admin.home');
Route::get('/admin/logout',   'Auth\AdminLoginController@logout')->name('admin.logout');
//Admin Reset Password
Route::post('/admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset',  'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
