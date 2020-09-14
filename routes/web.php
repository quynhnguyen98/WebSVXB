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
//Front-end
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/thong-tin','HomeController@thongtin');
Route::get('/dien-dan','HomeController@diendan');
Route::get('/su-kien','HomeController@sukien');

//Back-end
Route::get('/admin','AdminController@adminlogin');
Route::get('/dashboard','AdminController@dashboard');
Route::post('/show-dashboard','AdminController@login');
Route::get('/thanh-vien','AdminController@thanhvien');

