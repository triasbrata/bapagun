<?php

namespace App\Http\Controllers\Admin\Data;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ManajementRequest;
use App\Http\Controllers\Controller;
use App\Manajement;

class ManajementController extends Controller
{
    function __construct() {
    	$prefix = 'admin.data.manajement';
    	$model = new Manajement();
    	$moduleName = 'Data Utama Manajement Usaha';
    	parent::__construct($prefix,$model,$moduleName);
    }
    public function store( Manajement $model,  ManajementRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }
    public function update(Manajement $model, ManajementRequest $r)
    {
        if ($model->fill($r->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
    public function destroy(Manajement $model)
    {
         if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
