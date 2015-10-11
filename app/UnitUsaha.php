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
        public function produk()
        {
            return $this->hasMany(Produk::class,"unit_usaha_id");
        }
        public function kondis_first()
        {
            return $this->kondisi->first();
        }
        public function LastReport()
        {
            $getOut = [];
            foreach ($this->has('kondisi')->get() as $usaha) {
                $get = $usaha->with(['kondisi'=>function ($q) use ($usaha)
                {
                    $tahun =  $q->where('unit_usaha_id',$usaha->id)->max('tahun');
                    $bulan =  $q->where('unit_usaha_id',$usaha->id)->max('bulan');
                    $a = $q->where('tahun',$tahun)->orWhere(['tahun'=>$tahun,'bulan'=>$bulan])->orderBy('updated_at','desc');
                }])->get()->toArray();
                $getOut = array_replace_recursive($get,$getOut);
            }
            return $getOut;
        }

}
