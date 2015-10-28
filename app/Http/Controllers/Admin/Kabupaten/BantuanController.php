<?php

namespace App\Http\Controllers\Admin\Kabupaten;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BantuanRequest;
use App\Bantuan;

class BantuanController extends Controller
{
    public function __construct()
    {
        $prefix = 'admin.kabupaten.bantuan';
        $model = new Bantuan;
        $moduleName = "Bantuan";
        parent::__construct($prefix,$model,$moduleName);
    }
    
    public function store(Bantuan $s, BantuanRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('store');
        }
            return $this->routeAndError('store'); 
    }
    public function update(Bantuan $s, BantuanRequest $r)
    {
        if($s->fill($r->all())->save()){
            return $this->routeAndSuccess('update');
        }
            return $this->routeAndError('update'); 
    }
    public function destroy(Bantuan $s)
    {
        if($s->delete()){
            return $this->routeAndSuccess('destroy');
        }
            return $this->routeAndError('destroy'); 
    }
}
