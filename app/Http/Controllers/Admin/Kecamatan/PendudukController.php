<?php

namespace App\Http\Controllers\Admin\Kecamatan;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PendudukRequest;
use App\Penduduk;

class PendudukController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kecamatan.penduduk';
        $model = new Penduduk;
        $moduleName = "Penduduk";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Penduduk $s, PendudukRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Penduduk $s, PendudukRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Penduduk $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
