<?php

namespace App\Http\Controllers\Admin\Data;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TempatPemasaranRequest;
use App\Http\Controllers\Controller;
use App\TempatPemasaran;

class TempatPemasaranController extends Controller
{
    function __construct() {
    	$prefix = 'admin.data.tempat_pemasaran';
    	$model = new TempatPemasaran();
    	$moduleName = 'Data Utama Tempat Pemasaran';
    	parent::__construct($prefix,$model,$moduleName);
    }
    public function store( TempatPemasaran $model,  TempatPemasaranRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }
    public function update(TempatPemasaran $model, TempatPemasaranRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
    public function destroy(TempatPemasaran $model)
    {
         if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
