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
Route::get('/eatwell/buatakun','EatController@reg');
Route::get('/eatwell/masuk','EatController@login');
Route::get('/eatwell/dashboard','EatController@dash');
Route::get('/eatwell/kalkulasi', 'KalkulasiController@index');
Route::get('/eatwell/profil','UpdateDataDiri\UpdateDataDiriController@displayProfil');
Route::get('/eatwell/buatakun/verifikasi','EatController@verif');
Route::post('/eatwell/cekprofil','UpdateDataDiri\UpdateDataDiriController@ValidateData');




