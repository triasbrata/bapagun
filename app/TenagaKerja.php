<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenagaKerja extends Model
{
    protected $guarded = ['id'];
    	public function kondisi_usaha()
    	{
    		$this->belongsToMany(KondisiUsaha::class,'kutk');
    	}
}
