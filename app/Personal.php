<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    	protected $guarded = ['id'];

    	public function unit_usaha()
    	{
    		return $this->belongsTo(UnitUsaha::class);
    	}
}
