<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaBantuan extends Model
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
    	public function kriteria()
    	{
    		return $this->belongsTo(Kriteria::class);	
    	}
    	public function indikator()
    	{
    		return $this->belongsTo(Indikator::class);	
    	}
}
