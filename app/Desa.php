<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    	protected $guarded = ['id'];

    	public function kecamatan()
    	{
    		return $this->belongsTo(Kecamatan::class);
    	}
}
