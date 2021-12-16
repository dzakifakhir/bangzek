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

Route::get('/', 'MenuController@index')->name('index');


Auth::routes();

Route::get('/beli/{product:id}', 'BuyController@beli')->name('buy');
Route::post('/beli', 'BuyController@beli_insert')->name('buy.insert');

Route::get('/home', 'HomeController@index')->name('home');

//admin login routes
Route::get('/admin-masuk', 'Admin_loginController@adminform')->name('admin');
Route::post('/admin-masuk', 'Admin_loginController@adminLogin')->name('login.admin');
Route::get('/logout', 'Admin_loginController@logout')->name('admin.logout');
//end

//admin routes
Route::group(["middleware" => [\App\Http\Middleware\LoginSession::class]], function () {
    Route::get('/admin/dashboard', 'Admin_loginController@admin_dashboard')->name('admin.dashboard');
    Route::get('/admin/produk', 'ProductController@produk')->name('admin.produk');
    Route::get('/admin/produk/add', 'ProductController@produk_form')->name('produk.post');
    Route::post('/admin/produk/post', 'ProductController@produk_insert')->name('produk.post.send');
    Route::get('/admin/produk/edit/{product:id}', 'ProductController@produk_edit')->name('produk.edit');
    Route::post('/admin/produk/edit/{product:id}', 'ProductController@update')->name('produk.update');
    Route::any('/admin/delete/produk/{id}', 'ProductController@produk_delete')->name('produk.delete');
});
