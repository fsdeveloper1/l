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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//auth route -added
route::get('auth/login','Auth\authController@getLogin');
route::post('auth/login','Auth\authController@postLogin');
route::get('auth/logout','Auth\authController@getlogout');
//register routs  -added
route::get('auth/Register','Auth\authController@getRegister');
route::post('auth/Register','Auth\authController@postRegister');
//fullregister route -added
Route::get('FullRegister', 'FullRegisterController@index')->name('fregister');
Route::post('FullRegister', 'FullRegisterController@store')->name('FullRegister');
Route::post('FROK', 'FullRegisterController@store')->name('FROK');
Route::post('FR','FRController@Update')->name('FR');
Route::post('330k5432','adminController@statistic')->name('admin');