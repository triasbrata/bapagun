<?php

namespace App\Http\Controllers\Admin\Data;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TujuanPemasaranRequest;
use App\Http\Controllers\Controller;
use App\TujuanPemasaran;

class TujuanPemasaranController extends Controller
{
    function __construct() {
    	$prefix = 'admin.data.tujuan_pemasaran';
    	$model = new TujuanPemasaran();
    	$moduleName = 'Data Utama Tujuan Pemasaran';
    	parent::__construct($prefix,$model,$moduleName);
    }
    public function store( TujuanPemasaran $model,  TujuanPemasaranRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }
    public function update(TujuanPemasaran $model, TujuanPemasaranRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
    public function destroy(TujuanPemasaran $model)
    {
         if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
