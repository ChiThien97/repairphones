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

Route::resource('/danh-muc', 'DanhmucController');

Route::resource('/dich-vu', 'DichvuController');

Route::resource('/don-hang', 'DatHangController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/phan-cong', 'HomeDemoController@phancong')->name('phan-cong');

Route::get('/home-demo', 'HomeDemoController@index')->name('home-demo');

Route::get('/hienthi/{id}','DichvuController@hienthiDsDichVu')->name('dich-vu.hienthi');
