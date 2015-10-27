<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $guarded = ['id'];
    public function kabupaten()
    {
    	return $this->belongsTo(Kabupaten::class);
    }
    public function desa()
    {
    	return $this->hasMany(Desa::class);
    }
    public function generate()
        {
            return $this->hasMany(Generate::class);
        }
}
