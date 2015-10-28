<?php

namespace App\Http\Controllers\Admin\Kabupaten;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstansiRequest;
use App\Instansi;

class InstansiController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.instansi';
        $model = new Instansi;
        $moduleName = "Instansi";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Instansi $s, InstansiRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Instansi $s, InstansiRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Instansi $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
