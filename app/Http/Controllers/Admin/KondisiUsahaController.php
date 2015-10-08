<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\KondisiUsahaRequest;
use App\Http\Controllers\Controller;
use App\KondisiUsaha;
use App\TenagaKerja;
class KondisiUsahaController extends Controller
{
	function __construct() {
		$prefix = 'admin.kondisiusaha';
		$model = new KondisiUsaha();
		$moduleName = "Kondisi Usaha";
		parent::__construct($prefix,$model,$moduleName);
	}
    public function store(KondisiUsaha $m, KondisiUsahaRequest $r)
    {
    	$kondisiUsahaData = $r->only(['unit_usaha_id', 'tahun', 'bulan', 'aset', 'omset', 'pirt', 'mn', 'halal', 'iso', 'lain_lain', 'twitter', 'facebook', 'instagram']);
    	if($m->fill($kondisiUsahaData)->save()){
    		$kondisiUsaha = $m->last();
            if( ! $kondisiUsaha->bahan_baku()->sync($r->input('bahan_baku')) ){
                $this->routeBackWithError('store')->withErrors(['Bahan baku gagal di pilih']);
            } 
            if( ! $kondisiUsaha->permodalan()->sync($r->input('permodalan')) ){
                $this->routeBackWithError('store')->withErrors(['Bahan baku gagal di pilih']);
            } 
            if( ! $kondisiUsaha->manajement()->sync([$r->input('manajement')]) ){
                $this->routeBackWithError('store')->withErrors(['Bahan baku gagal di pilih']);
            } 
            if( ! $kondisiUsaha->tujuan_pemasaran()->sync($r->input('tujuan_pemasaran')) ){
                $this->routeBackWithError('store')->withErrors(['Bahan baku gagal di pilih']);
            } 
            if( ! $kondisiUsaha->tempat_pemasaran()->sync($r->input('tempat_pemasaran')) ){
                $this->routeBackWithError('store')->withErrors(['Bahan baku gagal di pilih']);
            } 
            $tenagaKerjaData = $r->only(['pekerja_pria','pekerja_wanita']);
            $mtk = new TenagaKerja($tenagaKerjaData);
            if($mtk->save()){
                if( ! $kondisiUsaha->tenaga_kerja()->sync([$mtk->id]) ){
                    $this->routeBackWithError('store')->withErrors(['Bahan baku gagal di pilih']);
                } 
            }
            return $this->routeAndSuccess('store');
    	}
        return $this->routeBackWithError('store');
    }
}