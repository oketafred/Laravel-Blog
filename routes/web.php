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

//Authenication
// Login Routes
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');


Route::get('/', 'PagesController@getIndex');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::resource('/posts', 'PostController');

Route::resource('categories', 'CategoryController', ['except' => ['create', 'show']]);
Route::resource('tags', 'TagController', ['except' => ['create', 'show']]);

Route::get('blog', 'BlogController@getIndex')->name('blog.index');

Route::get('blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');
