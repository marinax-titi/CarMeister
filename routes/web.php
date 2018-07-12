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
    return view('auth/login');
});
Route::get('admin/register', 'AdminUserController@create')->name('admin.register.create');
Route::post('admin/store', 'AdminUserController@store')->name('admin.register.store');
Route::get('/admin', 'AdminUserController@index')->name('admin.register.index');
Route::post('admin/doLogin', 'AdminUserController@doLogin')->name('admin.register.doLogin');
Route::get('admin/edit/{id}', 'AdminUserController@edit')->name('admin.register.edit');
Route::post('admin/edit/{id}', 'AdminUserController@update')->name('admin.register.update');
Route::get('admin/delete/{id}', 'AdminUserController@delete')->name('admin.register.delete');
Route::get('/{any}', 'SpaController@index')->where('any', '.*');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
