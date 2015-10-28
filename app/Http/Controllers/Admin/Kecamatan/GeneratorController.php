<?php

namespace App\Http\Controllers\Admin\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PenerimaBantuanRequest;
use Auth;
use App\Generate;
use App\Penduduk;
use App\PenerimaBantuan;

class GeneratorController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kecamatan.generate';
        $model = new Generate;
        $moduleName = "Penerima Bantuan";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(PenerimaBantuan $data, Request $r)
    {
        $dataTable = [];
        foreach ($data->orderBy('bantuan_id')->get() as $bantuan) {
            foreach ($data->where('bantuan_id',$bantuan->bantuan->id)->get() as $list) {
                    $dataTable[$list->penduduk->id][$list->kriteria->title] = $list->indikator->bobot;
                    $presentase[$list->kriteria->title] = $list->kriteria->presentase;
            }
        }
        if( isset($dataTable) ){
            $carimin = [];
            foreach ($dataTable as $d) {
                $carimin = array_merge_recursive($carimin,$d);
            }
            foreach ($carimin as $key => $value) {
                $min[$key] = min($value);
            }
            foreach ($dataTable as $orang => $kriteria) {
                foreach ($kriteria as $nama_kriteria => $bobot) {
                    $nilaiCost[$orang][$nama_kriteria]  = (float)($min[$nama_kriteria] / $bobot)*$presentase[$nama_kriteria];
                }
            }
            // return array_sum($nilaiCost[1]);
            foreach ($nilaiCost as $orang => $nilai) {
                $rangking[$orang] = array_sum($nilai);
            }
            asort($rangking);
            $rangking = $r->input('batas') <= count($rangking) ? array_slice($rangking,$r->input('batas')) : $rangking;
            $x = 1;
            foreach ($rangking as $org => $nilai ) {
                $penduduk = Penduduk::find($org);
                $databaru['penduduk_id'] = $penduduk->id;
                $databaru['rangking'] = $x;
                $databaru['kecamatan_id'] = $penduduk->kecamatan->id;
                $databaru['bantuan_id'] = $bantuan->bantuan->id;
                $gen = new Generate();
                $gen->fill($databaru)->save();
                $x++; 
                unset($databaru);
            }
        }
        return $this->routeAndSuccess('store');        
    }
}
