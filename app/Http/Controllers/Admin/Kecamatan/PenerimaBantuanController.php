<?php

namespace App\Http\Controllers\Admin\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PenerimaBantuanRequest;
use App\PenerimaBantuan;
use App\Bantuan;
use App\Kriteria;
use App\Indikator;

class PenerimaBantuanController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kecamatan.penerima';
        $model = new PenerimaBantuan;
        $moduleName = "Calon Penerima Bantuan";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(PenerimaBantuan $s, PenerimaBantuanRequest $r)
    {
        foreach ($r->input('indikator') as $idi) {
            if(! Indikator::findOrFail($idi)){
                return $this->routeAndError('store')->withErrors(['salah satu indikator tidak di kenali']); 
            }
        }
        foreach ($r->input('indikator') as $idi) {
            $indikator = Indikator::find($idi);
            $data = $r->except(['indikator','_token','instansi_id']);
            $data['indikator_id'] = $indikator->id;
            $data['kriteria_id'] = $indikator->kriteria->id;
            if(! $s->create($data) ){
                return $this->routeAndError('store')->withErrors(['salah satu indikator tidak di kenali']); 
            }
        }
        return $this->routeAndSuccess('store');
    }
    public function update(PenerimaBantuan $s, PenerimaBantuanRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(PenerimaBantuan $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
    public function getBantuan(Request $r)
    {
        $data = [];
        foreach ( Bantuan::where('instansi_id',$r->input('id'))->get() as $list){
            $data =array_merge_recursive($data,[['id'=>$list->id,'text'=>$list->title]]);
        }
        return $data;
    }
    public function getKI(Request $r)
    {
        $data = [];
        foreach ( Kriteria::where('bantuan_id',$r->input('id'))->get() as $list){
            $_temp = [
                    'kriteria_text'=>$list->title,
                    'kriteria_ket'=>$list->keterangan,
                    'indikator'=>$list->indikator,
            ];
            $data =array_merge_recursive($data,[$_temp]);
        }
        return $data;
    }
}
