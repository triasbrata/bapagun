<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    	protected $guarded = ['id'];
    	public function provinsi()
    	{
    		return $this->belongsTo(Provinsi::class);
    	}
    	public function kecamatan()
    	{
    		return $this->hasMany(Kecamatan::class);
    	}
}
