<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    	protected $guarded = ['id'];
    	protected $hidden  =['bobot'];
    	public function kriteria()
    	{
    		return $this->belongsTo(Kriteria::class);
    	}
}
