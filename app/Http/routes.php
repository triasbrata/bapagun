<?php
include 'routes.default.php';
include 'routes.model.php';
Route::group(['prefix'=>'admin','middleware'=>'UAC:admin','namespace'=>'Admin'],function ()
{
	Route::get('/',['as'=>'admin.landing','uses'=>'AdminController@landing']);
	Route::resources([
			'unitkegiatan'=>'UnitKegiatanController',
			'jenis_produk'=>'JenisProdukUsahaController'
		]);
});