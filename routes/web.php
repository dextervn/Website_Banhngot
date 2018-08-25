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
Route::get('trang-chu','PagesController@getIndex')->name('trang-chu');
Route::get('loai-san-pham/{type}','PagesController@getLoaiSP')->name('loai-san-pham');
Route::get('chi-tiet-san-pham/{id}','PagesController@getChiTietSanPham')->name('chi-tiet-san-pham');
Route::get('gioi-thieu','PagesController@getGioithieu')->name('gioi-thieu');
Route::get('lien-he','PagesController@getLienhe')->name('lien-he');
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@getLogin');