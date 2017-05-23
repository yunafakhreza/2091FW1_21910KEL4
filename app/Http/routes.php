<?php
 


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/index', function () {
    return view('index');
});


Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/admin',function(){
	return view('lama');
});

Route::get('barang','BarangController@awal');
Route::get('barang/tambah','BarangController@tambah');
Route::get('barang/{barang}','BarangController@lihat');
Route::post('barang/simpan','BarangController@simpan');
Route::get('barang/edit/{barang}','BarangController@edit');
Route::post('barang/edit/{barang}','BarangController@update');
Route::get('barang/hapus/{barang}','BarangController@hapus');

Route::get('suplier','SuplierController@awal');
Route::get('suplier/tambah','SuplierController@tambah');
Route::get('suplier/{suplier}','SuplierController@lihat');
Route::post('suplier/simpan','SuplierController@simpan');
Route::get('suplier/edit/{suplier}','SuplierController@edit');
Route::post('suplier/edit/{suplier}','SuplierController@update');
Route::get('suplier/hapus/{suplier}','SuplierController@hapus');

Route::get('angsuran','AngsuranController@awal');
Route::get('angsuran/tambah','AngsuranController@tambah');
Route::get('angsuran/{angsuran}','AngsuranController@lihat');
Route::post('angsuran/simpan','AngsuranController@simpan');
Route::get('angsuran/edit/{angsuran}','AngsuranController@edit');
Route::post('angsuran/edit/{angsuran}','AngsuranController@update');
Route::get('angsuran/hapus/{angsuran}','AngsuranController@hapus');

Route::get('admin','AdminController@awal');
Route::get('admin/tambah','AdminController@tambah');
Route::get('admin/{admin}','AdminController@lihat');
Route::post('admin/simpan','AdminController@simpan');
Route::get('admin/edit/{admin}','AdminController@edit');
Route::post('admin/edit/{admin}','AdminController@update');
Route::get('admin/hapus/{admin}','AdminController@hapus');

Route::get('konsumen','KonsumenController@awal');
Route::get('konsumen/tambah','KonsumenController@tambah');
Route::get('konsumen/{admin}','KonsumenController@lihat');
Route::post('konsumen/simpan','KonsumenController@simpan');
Route::get('konsumen/edit/{admin}','KonsumenController@edit');
Route::post('konsumen/edit/{admin}','KonsumenController@update');
Route::get('konsumen/hapus/{admin}','KonsumenController@hapus');

Route::get('pemesanan','PemesananController@awal');
Route::get('pemesanan/tambah','PemesananController@tambah');
Route::get('pemesanan/{admin}','PemesananController@lihat');
Route::post('pemesanan/simpan','PemesananController@simpan');
Route::get('pemesanan/edit/{admin}','PemesananController@edit');
Route::post('pemesanan/edit/{admin}','PemesananController@update');
Route::get('pemesanan/hapus/{admin}','PemesananController@hapus');


Route::get('jual','JualController@awal');
Route::get('jual/tambah','JualController@tambah');
Route::get('jual/{jual}','JualController@lihat');
Route::post('jual/simpan','JualController@simpan');
Route::get('jual/edit/{jual}','JualController@edit');
Route::post('jual/edit/{jual}','JualController@update');
Route::get('jual/hapus/{jual}','JualController@hapus');

Route::get('user','UserController@awal');
Route::get('user/tambah','UserController@tambah');
Route::get('user/{user}','UserController@lihat');
Route::post('user/simpan','UserController@simpan');
Route::get('user/edit/{user}','UserController@edit');
Route::post('user/edit/{user}','UserController@update');
Route::get('user/hapus/{user}','UserController@hapus');

