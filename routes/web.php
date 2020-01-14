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

Route::group(['prefix' => 'companyowner'], function () {
  Route::get('/login', 'CompanyownerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CompanyownerAuth\LoginController@login');
  Route::post('/logout', 'CompanyownerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CompanyownerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CompanyownerAuth\RegisterController@register');

  Route::post('/password/email', 'CompanyownerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CompanyownerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CompanyownerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CompanyownerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployeeAuth\LoginController@login');
  Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

  // Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
  // Route::post('/register', 'EmployeeAuth\RegisterController@register');

  Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'assistant'], function () {
  Route::get('/login', 'AssistantAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AssistantAuth\LoginController@login');
  Route::post('/logout', 'AssistantAuth\LoginController@logout')->name('logout');

  // Route::get('/register', 'AssistantAuth\RegisterController@showRegistrationForm')->name('register');
  // Route::post('/register', 'AssistantAuth\RegisterController@register');

  Route::post('/password/email', 'AssistantAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AssistantAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AssistantAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AssistantAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  // Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  // Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
