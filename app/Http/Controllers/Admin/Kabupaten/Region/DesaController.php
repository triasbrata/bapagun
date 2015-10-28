<?php

namespace App\Http\Controllers\Admin\Kabupaten\Region;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesaRequest;
use App\Desa;

class DesaController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.region.desa';
        $model = new Desa;
        $moduleName = "Desa";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Desa $s, DesaRequest $r)
    {
        if($s->fill($r->only(['label','kecamatan_id']))->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Desa $s, DesaRequest $r)
    {
        if($s->fill($r->only(['label','kecamatan_id']))->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Desa $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
