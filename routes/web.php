<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;



#Crud Barang masuk
Route::get('/barangmasuk','BarangController@index');
Route::get('/barangmasuk/tambah','BarangController@tambah');
Route::post('/barangmasuk/store','BarangController@store');
Route::get('/barangmasuk/edit/{id}','BarangController@edit');
Route::post('/barangmasuk/update','BarangController@update');
Route::get('/barangmasuk/hapus/{id}','BarangController@hapus');
Route::get('/barangmasuk/cari','BarangController@cari');


#Crud Barang Keluar
Route::get('/barangkeluar','KeluarController@index');
Route::get('/barangkeluar/tambah','KeluarController@tambah');
Route::post('/barangkeluar/store','KeluarController@store');
Route::get('/barangkeluar/edit/{id}','KeluarController@edit');
Route::post('/barangkeluar/update','KeluarController@update');
Route::get('/barangkeluar/hapus/{id}','KeluarController@hapus');
Route::get('/barangkeluar/cari','KeluarController@cari');

#Crud Barang Rusak
Route::get('/barangrusak','RusakController@index');
Route::get('/barangrusak/tambah','RusakController@tambah');
Route::post('/barangrusak/store','RusakController@store');
Route::get('/barangrusak/edit/{id}','RusakController@edit');
Route::post('/barangrusak/update','RusakController@update');
Route::get('/barangrusak/hapus/{id}','RusakController@hapus');
Route::get('/barangrusak/cari','RusakController@cari');

#Crud pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{lengkap}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
#dashboar
Route::get('/dashapp','DashController@index');