<?php 

Route::model('instansi',\App\Instansi::class);
Route::model('bantuan',\App\Bantuan::class);
Route::model('kriteria',\App\Kriteria::class);
Route::model('indikator',\App\Indikator::class);
Route::model('provinsi',\App\Provinsi::class);
Route::model('desa',\App\Desa::class);
Route::model('kecamatan',\App\Kecamatan::class);
Route::model('kabupaten',\App\Kabupaten::class);
Route::model('penduduk',\App\Penduduk::class);
Route::model('penerima',\App\PenerimaBantuan::class);