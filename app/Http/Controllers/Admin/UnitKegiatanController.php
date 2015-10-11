<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UnitUsaha;
use App\Http\Requests\UnitUsahaRequest;

class UnitKegiatanController extends Controller
{
	private $path;
	private $filename;
    function __construct() {
    	$prefix = "admin.unitkegiatan";
    	$model = new UnitUsaha;
    	$moduleName= "Usaha";
    	$this->path  = './imgs/';
    	parent::__construct($prefix,$model, $moduleName);
    }
	public function store(UnitUsaha $m, UnitUsahaRequest $r)
	{
		$unitUsahaData = $r->only(['nama','telp','keterangan','alamat','kordinat','email','desa_id','kecamatan_id','kabupaten_id']);
		if(! $r->hasFile('foto')){
			return $this->routeBackWithError('store')->withErrors(['Foto unit usaha tidak ditemuka']);
		}
		$file = $r->file('foto');
		if (!$file->isValid()) {
			return $this->routeBackWithError('store')->withErrors(['Foto unit usaha tidak bisa diterima']);
		}
		if(!($file->getSize()/100) >= 1280){
			return $this->routeBackWithError('store')->withErrors(['File foto melewati batas 1 MB']);	
		}
		if(! starts_with($file->getMimeType(),'image/') ){
			return $this->routeBackWithError('store')->withErrors(['File bukan berupa foto']);		
		}
		$filename = md5(date("Y-m-d h:i:s")).'.'.str_replace('image/', '', $file->getMimeType());
		if($file->move($this->path,$filename)){
			$unitUsahaData['foto'] = $filename;
		}else{
			return $this->routeBackWithError($method)->withErrors(['Foto gagal diupload']);		
		}
		if($unitUsaha = $m->fill($unitUsahaData)->save()){
			$unitUsaha = $m->last();
			$personal = $unitUsaha->personal();
			$temppersonalData = $r->except(['nama','telp','keterangan','alamat','kordinat','foto','email','desa_id','kecamatan_id','kabupaten_id']);
			foreach ($temppersonalData as $key => $value) {
				$personalData[str_replace('personal_', '', $key)] = $value;
			}
			if ($personal->create($personalData)) {
				return $this->routeAndSuccess('store');
			}else{
				$unitUsaha->destroy();
			}
		}
		return $this->routeBackWithError('store');		
	}
	public function update(UnitUsaha $m, UnitUsahaRequest $r)
	{
		$unitUsahaData = $r->only(['nama','telp','keterangan','alamat','kordinat','email','desa_id','kecamatan_id','kabupaten_id']);
		if(! $r->hasFile('foto')){
			return $this->routeBackWithError('store')->withErrors(['Foto unit usaha tidak ditemuka']);
		}
		$file = $r->file('foto');
		if (!$file->isValid()) {
			return $this->routeBackWithError('store')->withErrors(['Foto unit usaha tidak bisa diterima']);
		}
		if(!($file->getSize()/100) >= 1280){
			return $this->routeBackWithError('store')->withErrors(['File foto melewati batas 1 MB']);	
		}
		if(! starts_with($file->getMimeType(),'image/') ){
			return $this->routeBackWithError('store')->withErrors(['File bukan berupa foto']);		
		}
		$filename = $m->foto;
		if($file->move($this->path,$filename)){
			$unitUsahaData['foto'] = $filename;
		}else{
			return $this->routeBackWithError($method)->withErrors(['Foto gagal diupload']);		
		}
		if($unitUsaha = $m->fill($unitUsahaData)->save()){
			$personal = $m->personal();
			$temppersonalData = $r->except(['nama','telp','keterangan','alamat','kordinat','foto','email','desa_id','kecamatan_id','kabupaten_id']);
			foreach ($temppersonalData as $key => $value) {
				$personalData[str_replace('personal_', '', $key)] = $value;
			}
			if ($personal->update($personalData)) {
				return $this->routeAndSuccess('store');
			}else{
				$unitUsaha->destroy();
			}
		}
		return $this->routeBackWithError('store');	
	}
	public function destroy(UnitUsaha $m)
	{
		if($m->delete()){
			return $this->routeAndSuccess('destroy');
		}
		return $this->routeBackWithError('destroy');	
	}
}
