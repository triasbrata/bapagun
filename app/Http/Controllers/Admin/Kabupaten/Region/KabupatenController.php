<?php

namespace App\Http\Controllers\Admin\Kabupaten\Region;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\KabupatenRequest;
use App\Kabupaten;

class KabupatenController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.region.kabupaten';
        $model = new Kabupaten;
        $moduleName = "Kabupaten";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Kabupaten $s, KabupatenRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Kabupaten $s, KabupatenRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Kabupaten $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
