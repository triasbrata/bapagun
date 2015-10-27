<?php
include 'routes.default.php';
include 'routes.model.php';
include 'routes.public.php';
Route::group(['prefix'=>'admin/kabupaten','middleware'=>'UAC:kabupaten','namespace'=>'Admin\Kabupaten'],function ()
{
	Route::get('/',['as'=>'admin.kabupaten.landing','uses'=>function ()
	{
		return view('admin_template');
	}]);
	Route::resources([
			'instansi'=>'InstansiController',
			'bantuan'=>'BantuanController',
			'kriteria'=>'KriteriaController',
			'indikator'=>'IndikatorController',
		]);
	Route::group(['prefix'=>'region','namespace'=>'Region'],function ()
	{
		Route::get('/',function ()
		{
			return redirect()->url('admin/kabupaten');
		});
		Route::resources([
			'provinsi'=>'ProvinsiController',
			'kabupaten'=>'KabupatenController',
			'kecamatan'=>'KecamatanController',
			'desa'=>'DesaController',
		]);
		Route::get('get/{region}/{id}',['as'=>'getRegion','uses'=>function ($r,$id)
				{
					$data = [];
					if($r == 'kabupaten'){
			    		foreach ( \App\Kabupaten::where('provinsi_id',$id)->get() as $list){
			    			$data =array_merge_recursive($data,[['id'=>$list->id,'text'=>$list->label]]);
			    		}
			    	}
			    	if($r == 'kecamatan'){
			    		foreach ( \App\Kecamatan::where('kabupaten_id',$id)->get() as $list){
			    			$data =array_merge_recursive($data,[['id'=>$list->id,'text'=>$list->label]]);
			    		}
			    	}
			    	if($r == 'desa'){
			    		foreach ( \App\Desa::where('kecamatan_id',$id)->get() as $list){
			    			$data =array_merge_recursive($data,[['id'=>$list->id,'text'=>$list->label]]);
			    		}
			    	}
			    	return $data;
				}]);
	});
});
Route::group(['prefix'=>'admin/kecamatan','middleware'=>'UAC:kecamatan','namespace'=>'Admin\Kecamatan'],function ()
{
	Route::get('/',['as'=>'admin.kecamatan.landing','uses'=>function ()
	{
		return view('admin_template');
	}]);
	Route::get('get_bantuan',['as'=>'getBantuan','uses'=>'PenerimaBantuanController@getBantuan']);
	Route::get('get_kriteria',['as'=>'getKI','uses'=>'PenerimaBantuanController@getKI']);
	Route::resources([
		'penduduk'=>'PendudukController',
		'penerima'=>'PenerimaBantuanController',
		'generate'=>'GeneratorController',
		]);
});
