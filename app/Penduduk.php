<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    	protected $guarded = ['id'];
    	public function provinsi()
    	{
    		return $this->belongsTo(Provinsi::class);
    	}
    	public function kecamatan()
    	{
    		return $this->belongsTo(Kecamatan::class);
    	}
    	public function kabupaten()
    	{
    		return $this->belongsTo(Kabupaten::class);
    	}
    	public function desa()
    	{
    		return $this->belongsTo(Desa::class);
    	}
        public function listNew()
        {
            $data = [];
            foreach ($this->all() as $l) {
                $data[$l->id] = "{$l->no_nik} - {$l->nama}";
            }
            return $data;
        }
        public function generate()
        {
            return $this->hasMany(Generate::class);
        }

}
