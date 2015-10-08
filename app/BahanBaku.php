<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    protected $guarded = ['id'];
    	public function kondisi_usaha()
    	{
    		$this->belongsToMany(KondisiUsaha::class,'bahan_baku_kodisi_usaha');
    	}
}
