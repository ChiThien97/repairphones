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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home-2', 'HomeController2@index')->name('home-2');

