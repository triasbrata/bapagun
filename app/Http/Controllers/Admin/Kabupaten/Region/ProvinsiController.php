<?php

namespace App\Http\Controllers\Admin\Kabupaten\Region;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProvinsiRequest;
use App\Provinsi;

class ProvinsiController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.region.provinsi';
        $model = new Provinsi;
        $moduleName = "Provinsi";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Provinsi $s, ProvinsiRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Provinsi $s, ProvinsiRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Provinsi $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
