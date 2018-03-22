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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', 'DashboardController@admin_index')->name('dashboard');

    Route::resource('user', 'UserController');
    Route::resource('user_role', 'UserRoleController');
});

Route::get('api/user', 'UserController@apiUser')->name('api.user');
Route::get('api/user_role', 'UserRoleController@apiUserRole')->name('api.user_role');