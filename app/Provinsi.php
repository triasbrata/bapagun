<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    	protected $guarded = ['id'];
    	public function kabupaten()
    	{
    		return $this->hasMany(Kabupaten::class);
    	}
    	public function lists($label,$key=null)
    	{
    		$ret = [''=>'Pilih Provinisi'];
    		$ret+= parent::lists('label','id')->toArray();
    		return $ret;
    	}
}
