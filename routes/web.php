<?php

use App\Http\Controllers\KalkulasiController;
use App\Http\Controllers\UpdateRiwayatPenyakitController;

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

Route::get('/profil','UpdateDataDiri\UpdateDataDiriController@displayProfil');
// Route::post('/dashboard','UpdateDataDiri\UpdateDataDiriController@saveAccountData');
Route::post('/dashboard','UpdateDataDiri\UpdateDataDiriController@ValidateData');
Route::get('/dashboard','UpdateDataDiri\UpdateDataDiriController@displayDashboard');



Route::get('/kalkulasi', 'KalkulasiController@displayKalkulasi');

Route::get('/riwayatpenyakit','UpdateRiwayatPenyakitController@displayRiwayatPenyakit');

Route::get('/buatakun/verifikasi','EatController@verif');


Route::post('/riwayatpenyakit','UpdateRiwayatPenyakitController@saveRiwayatPenyakit');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
