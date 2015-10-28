<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    	protected $guarded = ['id'];
    	public function bantuan()
    	{
    		return $this->hasMany(Bantuan::class);
    	}
    	public function listNew()
    	{
            $data = [''=>'Pilih Instansi'];
            foreach ( $this->all() as $list){
                $data+=[$list->id => $list->title];
            };
            return $data;
    	}
}
