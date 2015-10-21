<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UnitUsaha;
use App\Produk;
use File;
use App\Http\Requests\ProdukRequest;


class ProdukController extends Controller
{
	private $path;
	private $filename;
    function __construct() {
    	$prefix = "admin.produk";
    	$model = new UnitUsaha;
    	$moduleName= "Produk Usaha";
    	$this->path  = './imgs/produk/';
    	parent::__construct($prefix,$model, $moduleName);
    }
	public function store(Produk $m, ProdukRequest $r)
	{
		$file = $r->file('foto');
		if(! $r->hasFile('foto')){
			return response(['message'=>"Foto produk tidak ditermukan"],404);	
			
		}
		if (!$file->isValid()) {
			return response(['message'=>"Foto produk tidak bisa diterima"],404);	
		}
		if(!($file->getSize()/100) >= 1280){
			return response(['message'=>"Foto produk tidak melewati batas 1MB"],404);	
		}
		if(! starts_with($file->getMimeType(),'image/') ){
			return response(['message'=>"Jenis foto tidak dikenali"],404);	
		}
		$filename = md5(date('Y-mm-dd : h:i:s')).uniqid().".{$file->guessExtension()}";
		if($file->move($this->path,$filename)){
			$unitUsaha = UnitUsaha::find($r->input('unit_usaha_id'));
			$produk = new Produk(['foto'=>$filename,'unggulan'=>'false']);
			if($unitUsaha->produk()->save($produk)){
				return response(['message'=>"Foto {$unitUsaha->nama}, dengan nama {$file->getClientOriginalName()} berhasil di tambah silahkan perbarui info produk"],200);
			}else{
				if(File::delete($this->path.$filename)){
				return response(['message'=>"Foto {$unitUsaha->nama}, dengan nama {$file->getClientOriginalName()} gagal disimpan pada database"],404);	
				}
			}
		}else{
			return $this->routeBackWithError($method)->withErrors(['Foto gagal diupload']);		
		}
	}
	public function show($data)
    {
    	$d['nama_usaha'] = $data->nama;
    	$d['unit_usaha_id'] = $data->id;
    	$d['produk'] = $data->produk()->get()->toArray();
    	return response()->json($d);
    }
	public function update(UnitUsaha $m, ProdukRequest $r)
	{
		$produk = Produk::find($r->input('id'));
		if(! is_null($r->input('unggulan')) ){
			if($produk->fill( $r->only('unggulan') )->save()){
				return response()->json(['message'=>'Produk berhasil di atur sebagai produk unggulan']);
			}
			return response()->json(['message'=>'Produk gagal di atur sebagai produk unggulan']);
		}
		$dataProduk = $r->only(['nama','keterangan']);
		if($produk->fill($dataProduk)->save()){
			return response()->json(['message'=>'Produk berhasil diperbarui']);
		}
		return response()->json(['message'=>'Produk gagal diperbarui']);


	}
	public function destroy(UnitUsaha $m,Request $r)
	{	
		$produk = Produk::find($r->input('id'));
		if(File::delete($this->path.$produk->foto)){
			if($produk->delete()){
				return response(['message'=>'Produk berhasil dihapus'],200);
			}
			return response(['message'=>'Produk gagal dihapus'],404);
		}
		return response(['message'=>'Foto produk gagal dihapus'],404);
	}
}
