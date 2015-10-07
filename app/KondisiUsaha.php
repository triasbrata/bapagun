<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiUsaha extends Model
{
    	protected $guarded = ['id'];

    	public function usaha()
    	{
    		return $this->belongsTo(UnitUsaha::class,"ukm_id");
    	}
}
