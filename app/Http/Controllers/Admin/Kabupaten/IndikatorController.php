<?php

namespace App\Http\Controllers\Admin\Kabupaten;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndikatorRequest;
use App\Indikator;

class IndikatorController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.indikator';
        $model = new Indikator;
        $moduleName = "Indikator";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Indikator $s, IndikatorRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Indikator $s, IndikatorRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Indikator $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
