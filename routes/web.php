<?php

use App\Http\Controllers\KalkulasiController;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

//router EatWell
Route::get('/','EatController@index');
Route::get('/buatakun','EatController@reg');
Route::get('/masuk','EatController@login');
Route::get('/dashboard','UpdateDataDiri\UpdateDataDiriController@saveAccountData');
Route::get('/kalkulasi', 'KalkulasiController@index');
Route::get('/profil','UpdateDataDiri\UpdateDataDiriController@displayProfil');
Route::get('/buatakun/verifikasi','EatController@verif');
Route::post('/dashboard','UpdateDataDiri\UpdateDataDiriController@ValidateData');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
