<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permodalan extends Model
{
    protected $guarded = ['id'];
    	public function kondisi_usaha()
    	{
    		$this->belongsToMany(KondisiUsaha::class,'kodisi_usaha_permodalan');
    	}
}
