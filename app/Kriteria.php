<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    	protected $guarded = ['id'];
    	public function bantuan()
    	{
    		return $this->belongsTo(Bantuan::class);
    	}
    	public function indikator()
    	{
    		return $this->hasMany(Indikator::class);
    	}
    	public function listNew()
    	{
    		$bantuanList = [];
			foreach($this->all() as $bnt){
				$bantuanList[$bnt->bantuan->title][$bnt->id] = $bnt->title;
			}
			return $bantuanList;
    	}

}
