<?php

namespace App\Http\Controllers\Admin\Data;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PermodalanRequest;
use App\Http\Controllers\Controller;
use App\Permodalan;

class PermodalanController extends Controller
{
    function __construct() {
    	$prefix = 'admin.data.permodalan';
    	$model = new Permodalan();
    	$moduleName = 'Data Utama Sumber Modal';
    	parent::__construct($prefix,$model,$moduleName);
    }
    public function store( Permodalan $model,  PermodalanRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }
    public function update(Permodalan $model, PermodalanRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
    public function destroy(Permodalan $model)
    {
         if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
