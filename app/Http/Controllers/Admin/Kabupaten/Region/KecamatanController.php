<?php

namespace App\Http\Controllers\Admin\Kabupaten\Region;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\KecamatanRequest;
use App\Kecamatan;
use App\Provinsi;
use App\Kabupaten;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.region.kecamatan';
        $model = new Kecamatan;
        $moduleName = "Kecamatan";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Kecamatan $s, KecamatanRequest $r)
    {
        if($s->fill($r->only(['label','kabupaten_id']))->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Kecamatan $s, KecamatanRequest $r)
    {
        if($s->fill($r->only(['label','kabupaten_id']))->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Kecamatan $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
