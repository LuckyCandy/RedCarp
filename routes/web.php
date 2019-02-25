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

/* -------------------着陆页-------------------*/
Route::get('/', "LandingController@index");                              //首页
Route::get('/about', "LandingController@about");                         //关于
Route::get('/manual', "LandingController@manual");                       //使用说明
Route::get('/protocol', "LandingController@protocol");                       //用户协议
