<?php

namespace App\Http\Controllers\Admin\Data;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BahanBakuRequest;
use App\Http\Controllers\Controller;
use App\BahanBaku;

class BahanBakuController extends Controller
{
    function __construct() {
    	$prefix = 'admin.data.bahan_baku';
    	$model = new BahanBaku();
    	$moduleName = 'Data Utama Bahan Baku';
    	parent::__construct($prefix,$model,$moduleName);
    }
    public function store( BahanBaku $model,  BahanBakuRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }
    public function update(BahanBaku $model, BahanBakuRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
    public function destroy(BahanBaku $model)
    {
         if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
