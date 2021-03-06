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

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('praktikum2', function () {
    return view('prak2js');
});

Route::get('ets2021',"ViewController@showETS") ;

Route::get('greetings',"ViewController@showGreetings") ;
Route::post('sayhi',"ViewController@sayHi") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/detail/{id}','PegawaiController@view');


//tugas CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/buat','AbsenController@buat');
Route::post('/absen/simpan','AbsenController@simpan');
Route::get('/absen/ubah/{id}','AbsenController@ubah');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/detail/{id}','AbsenController@view');

//Tas Route
Route::get('/tas','TasController@index');
Route::get('/tas/add','TasController@add');
Route::post('/tas/store','TasController@store');
Route::get('/tas/edit/{id}','TasController@edit');
Route::post('/tas/update','TasController@update');
Route::get('/tas/delete/{id}','TasController@delete');
Route::get('/tas/search','TasController@search');
Route::get('/tas/view/{id}','TasController@view');

//Keranjang Route
Route::get('/keranjang','KeranjangController@index');
Route::get('/keranjang/add','KeranjangController@add');
Route::post('/keranjang/store','KeranjangController@store');
Route::get('/keranjang/delete/{id}','KeranjangController@delete');

