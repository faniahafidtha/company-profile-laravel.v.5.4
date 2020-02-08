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

Route::resource('index','DashboardController');
Route::resource('about_us','AboutUsController');
Route::resource('ourservice','OurServiceController');
Route::resource('portofolio','PortofolioController');
Route::resource('contactus','ContactUsController');
Route::resource('tb_home','TbHomeController');




Auth::routes();

Route::get('/home', 'HomeController@index');
