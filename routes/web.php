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

Route::get('/home', 'DashboardController@home')->name('home');

//auth routes
Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('permissions','PermissionController');
    Route::get('users/getusers/all','UserController@getUsers')->name('users.getusers');  
    Route::post('permissions/save', 'PermissionController@savePermissions')->name('permissions.save');

    Route::get('/dashboard', 'DashboardController@home')->name('dashboard');

    //test charts
    Route::get('setting/all', 'SettingController@index')->name('general.setting');
    Route::put('setting/update', 'SettingController@updateSettings')->name('update.setting');


    //test charts
    Route::get('chart', 'ChartController@index');
});
