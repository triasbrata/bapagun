<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\JenisProduk;
use App\Http\Requests\JenisProdukRequest;

class JenisProdukUsahaController extends Controller
{
    function __construct() {
    	$prefix = "admin.jenis_produk";
    	$model = new JenisProduk;
    	$moduleName= "Jenis Produk Usaha";
    	parent::__construct($prefix,$model, $moduleName);
    }
	public function store(JenisProduk $m, JenisProdukRequest $r)
	{
		$unitUsahaData = $r->only(['nama_usaha','telp','email','tipe_program','keterangan']);
		
		if($unitUsaha = $m->fill($unitUsahaData)->save()){
			$unitUsaha = $m->last();
			$personal = $unitUsaha->personal();
			$temppersonalData = $r->except(['nama_usaha','telp','email','tipe_program','keterangan']);
			foreach ($temppersonalData as $key => $value) {
				$personalData[str_replace('personal_', '', $key)] = $value;
			}
			if ($personal->create($personalData)) {
				return $this->routeAndSuccess('store');
			}else{
				$unitUsaha->destroy();
			}
		}
		return $this->routeAndError('store');		
	}
	public function update(JenisProduk $m, JenisProdukRequest $r)
	{
		$unitUsahaData = $r->only(['nama_usaha','telp','email','tipe_program','keterangan']);
		
		if($m->fill($unitUsahaData)->save()){
			$personal = $m->personal();
			$temppersonalData = $r->except(['nama_usaha','telp','email','tipe_program','keterangan']);
			foreach ($temppersonalData as $key => $value) {
				$personalData[str_replace('personal_', '', $key)] = $value;
			}
			if ($personal->create($personalData)) {
				return $this->routeAndSuccess('update');
			}else{
				$unitUsaha->destroy();
			}
		}
		return $this->routeAndError('update');		
	}
	public function destroy(JenisProduk $m)
	{
		if($m->delete()){
			return $this->routeAndSuccess('destroy');
		}
		return $this->routeAndError('destroy');	
	}
}
