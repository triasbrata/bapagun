<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    	protected $guarded = ['id'];
    	public function unit_usaha()
    	{
    		return $this->belongsTo(UnitUsaha::class,"unit_usaha_id");
    	}
    	public function scopeOfUnggulan($q, $unggulan)
    	{
    		return $q->whereUnggulan($unggulan);
    	}
    	public function kategori()
    	{
    		return $this->belongsTo(SubKategoriProduk::class,'kategori_id');
    	}
}
