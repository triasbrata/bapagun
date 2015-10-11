<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiUsaha extends Model
{
    	protected $guarded = ['id'];

    	public function usaha()
    	{
    		return $this->belongsTo(UnitUsaha::class,"unit_usaha_id");
    	}
       
    	public function last()
    	{
    		return $this->orderBy('created_at', 'desc')->first();
    	}
    	public function tujuan_pemasaran()
    	{
    		return $this->belongsToMany(TujuanPemasaran::class,'kondisi_tujuan_pem');
    	}
    	public function manajement()
    	{
    		return $this->belongsToMany(Manajement::class,'kondisi_usaha_manajement');
    	}
    	public function tenaga_kerja()
    	{
    		return $this->belongsToMany(TenagaKerja::class,'kutk');
    	}
    	public function tempat_pemasaran()
    	{
    		return $this->belongsToMany(TempatPemasaran::class,'kondisi_tempat_pem');
    	}
    	public function permodalan()
    	{
    		return $this->belongsToMany(Permodalan::class,'kondisi_usaha_permodalan');
    	}
    	public function bahan_baku()
    	{
    		return $this->belongsToMany(BahanBaku::class,'bahan_baku_kondisi_usaha');
    	}
}
