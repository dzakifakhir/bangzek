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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::get('/login/admin', 'Admin_loginController@adminform')->name('admin');
Route::post('/login/admin-logined', 'Admin_loginController@adminLogin')->name('login.admin');
Route::get('/logout', 'Admin_loginController@logout')->name('admin.logout');

Route::get('/admin/dashboard', 'Admin_loginController@admin_dashboard')->name('admin.dashboard');
