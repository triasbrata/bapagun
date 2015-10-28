<?php

namespace App\Http\Controllers\Admin\Kabupaten;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\KriteriaRequest;
use App\Kriteria;
class KriteriaController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.kriteria';
        $model = new Kriteria;
        $moduleName = "Kriteria";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Kriteria $s, KriteriaRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Kriteria $s, KriteriaRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Kriteria $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
