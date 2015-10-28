<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    	protected $guarded = ['id'];

    	public function instansi()
    	{
    		return $this->belongsTo(Instansi::class);
    	}
    	public function kriteria()
    	{
    		return $this->hasMany(Kriteria::class);
    	}
        public function generate()
        {
            return $this->hasMany(Generate::class);
        }
    	public function listNew()
    	{
    		$bantuanList = [];
			foreach($this->all() as $bnt){
				$bantuanList[$bnt->instansi->title] = [$bnt->id => $bnt->title];
			}
			return $bantuanList;
    	}
}
