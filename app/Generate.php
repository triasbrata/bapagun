<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generate extends Model
{
    	protected $guarded = ['id'];
    	public function penduduk()
    	{
    		return $this->belongsTo(Penduduk::class);
    	}
    	public function bantuan()
    	{
    		return $this->belongsTo(Bantuan::class);
    	}
    	public function kecamatan()
    	{
    		return $this->belongsTo(Kecamatan::class);
    	}
}
