<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitUsaha extends Model
{
    	protected $guarded = ['id'];

    	public function personal()
    	{
    		return $this->hasOne(Personal::class);
    	}
    	public function delete()
    	{
    		if($this->personal()->delete()){
    			return parent::delete();
    		}
    		return false;
    	}
    	public function last()
    	{
    		return $this->orderBy('created_at', 'desc')->first();
    	}
        public function desa()
        {
            return $this->belongsTo(Desa::class);
        }
        public function kabupaten()
        {
            return $this->belongsTo(Kabupaten::class);
        }
        public function kecamatan()
        {
            return $this->belongsTo(Kecamatan::class);
        }
        public function kondisi()
        {
            return $this->hasMany(KondisiUsaha::class,"unit_usaha_id");
        }
        public function getLastOmset()
        {
            return $this->kondisi()->last()->omset;
        }
        public function getLastAset()
        {
            return $this->with('kondisi');
            $kondisi = $this->kondisi()->me();
        }
}
