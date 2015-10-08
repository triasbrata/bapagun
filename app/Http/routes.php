<?php
include 'routes.default.php';
include 'routes.model.php';
Route::group(['prefix'=>'admin','middleware'=>'UAC:admin','namespace'=>'Admin'],function ()
{
	Route::get('/',['as'=>'admin.landing','uses'=>'AdminController@landing']);
	Route::resources([
			'unitkegiatan'=>'UnitKegiatanController',
			'kondisiusaha'=>'KondisiUsahaController'
	]);
	Route::group(['prefix'=>'data','namespace'=>'Data'],function ()
	{
		Route::resources([
			'tujuan_pemasaran'=>'TujuanPemasaranController',
			'tempat_pemasaran'=>'TempatPemasaranController',
			'bahan_baku'=>'BahanBakuController',
			'permodalan'=>'PermodalanController',
			'manajement'=>'ManajementController'
		]);
	});
});
Route::group(['namespace'=>'Umum'],function ()
{
	Route::get('/',['as'=>'umum.awal','uses'=>'IndexController@awal']);
	Route::post('/',['as'=>'umum.cari','uses'=>'IndexController@cari']);
	Route::get('/profil/{id}',['as'=>'umum.profil','uses'=>'IndexController@profil']);
});