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

Route::get('/', ['as' => 'welcome', 'uses' => 'App\Http\Controllers\HomeController@welcome']);
Route::get('/home', ['as' => 'welcome', 'uses' => 'App\Http\Controllers\HomeController@welcome']);
Auth::routes();

Auth::routes();

Route::get('auth/google', [App\Http\Controllers\Auth\GoogleController::Class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\GoogleController::Class, 'handleGoogleCallback']);



Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::put('submitCourse', [App\Http\Controllers\CourseController::class, 'submit'])->name('course.submit');
	Route::get('addCourse', [App\Http\Controllers\CourseController::class, 'create'])->name('course.add');
	Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');
	Route::get('/user/{username}', [App\Http\Controllers\UserController::class, 'show'])->name('profile.show');
	Route::get('/users', [App\Http\Controllers\UserController::class, 'show_all'])->name('profile.show.all');
});

