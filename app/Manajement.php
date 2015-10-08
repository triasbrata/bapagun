<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manajement extends Model
{
    protected $guarded = ['id'];
    	public function kondisi_usaha()
    	{
    		$this->belongsToMany(KondisiUsaha::class,'kondisi_usaha_manajement');
    	}
}
