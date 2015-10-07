<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TujuanPemasaran extends Model
{
    	protected $guarded = ['id'];
    	public function kondisi_usaha()
    	{
    		$this->hasMany(KondisiUsaha::class);
    	}
    
}
