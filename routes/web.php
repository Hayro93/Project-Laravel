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
Route::get('/',['as'=>'/','uses'=>'Core@index']);
Route::get('/about',['as'=>'about','uses'=>'Core@about']);
Route::get('/services',['as'=>'services','uses'=>'Core@services']);
Route::match(['get', 'post'],'contacts', ['as'=>'contacts','uses'=>'Core@contacts']);



Auth::routes();

Route::get('/admin/account', 'HomeController@index')->name('admin/account');
Route::match(['get','post'],'/admin/account-edit', 'Admin\Core@account_edit')->name('admin/account-edit');
Route::match(['get', 'post'],'/admin/home', 'Admin\Core@home')->name('admin/home');
Route::match(['get', 'post'],'/admin/about', 'Admin\Core@about')->name('admin/about');