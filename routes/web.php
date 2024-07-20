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
    return view('pengguna.login');
});

Route::get('/login',function(){
return view('pengguna.login');
});


//login
Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
//logout
Route::get('/logout','LoginController@logout')->middleware('auth');
//
Route::get('/dashboard','DashboardController@index')->name('dashboard');
//CRUD KELOLA USER
Route::get('/kelola_user','DatauserController@index');
Route::get('/delete/{id}','DatauserController@delete');
Route::post('/insertdata','DatauserController@insertdata');
Route::get('/tampildata/{id}','DatauserController@tampildata');
Route::post('/updatedata/{id}','DatauserController@updatedata');

//CRUD KELOLA PAKET
Route::get('/kelola_paket','DatapaketController@index');
Route::post('/insertpaket','DatapaketController@insertpaket');
Route::get('/tampildatapaket/{id}','DatapaketController@tampildatapaket');
Route::post('/updatepaket/{id}','DatapaketController@updatepaket');
Route::get('/deletepaket/{id}','DatapaketController@deletepaket');
Route::get('/laporan','RiwayattranksaksiController@laporan');


Route::get('/tambahuser','DatauserController@tambahuser');
Route::get('/tambahpaket','DatapaketController@tambahpaket');


//CRUD TAMBAH TRANKSAKSI
Route::get('/riwayat_tranksaksi','RiwayattranksaksiController@index');
Route::get('/tampiltranksaksi','RiwayattranksaksiController@tampiltranksaksi');
Route::get('/edittranksaksi/{id}','RiwayattranksaksiController@edittranksaksi');
Route::post('/tambahtranksaksi','RiwayattranksaksiController@tambahtranksaksi');
Route::get('/deletetranksaksi/{id}','RiwayattranksaksiController@deletetranksaksi');
Route::get('/exportpdf','RiwayattranksaksiController@exportpdf');
Route::post('/updatetranksaksi/{id}','RiwayattranksaksiController@updatetranksaksi');