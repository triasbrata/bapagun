<?php 
namespace App;
/**
*  service menu fetcher
*/
use Route;
class MenuFetcher
{
	function __construct()
	{

	}
	public function lists($level)
	{
		$menu = [
			'kabupaten'=>[
					[ 'route'=>'kabupaten.instansi.index', 'name'=>'Data  Instansi ', 'icon'=> 'fa fa-building-o'],
					[ 'route'=>'kabupaten.bantuan.index', 'name'=>'Data Bantuan  ', 'icon'=> 'fa fa-cubes'],
					[ 'route'=>'kabupaten.kriteria.index', 'name'=>'Data Kriteria  ', 'icon'=> 'fa fa-tag'],
					[ 'route'=>'kabupaten.indikator.index', 'name'=>'Data Indikator  ', 'icon'=> 'fa fa-star'],
					[ 'route'=>'kabupaten.region.', 'name'=>'Data Region  ', 'icon'=> 'fa fa-globe',
						'inGroup'=>[
							[ 'route'=>'provinsi.index', 'name'=>'Data Provinsi  ', 'icon'=> 'fa fa-map-marker'],
							[ 'route'=>'kabupaten.index', 'name'=>'Data Kabupaten  ', 'icon'=> 'fa fa-map-marker'],
							[ 'route'=>'kecamatan.index', 'name'=>'Data Kecamatan  ', 'icon'=> 'fa fa-map-marker'],
							[ 'route'=>'desa.index', 'name'=>'Data Desa  ', 'icon'=> 'fa fa-map-marker'],
						]
					],
			],
			'kecamatan'=>[
					[ 'route'=>'kecamatan.penduduk.index', 'name'=>'Data Penduduk ', 'icon'=> 'fa fa-users'],
					[ 'route'=>'kecamatan.penerima.index', 'name'=>'Data Calon Penerima Bantuan  ', 'icon'=> 'fa fa-cube'],
					[ 'route'=>'kecamatan.generate.index', 'name'=>'Generate Data Penerima', 'icon'=> 'fa fa-cube'],
			]
		];
		return $menu[$level];
	}
	public function make($menu,$role = null,$prefix = null,$child = false)
	{
		$o = "";
		$lists = is_object($menu) ? $menu->lists($role) : $menu;
		foreach ($lists as $list) {
			if(is_array($list)){
				if(isset($list['inGroup'])){
					$inGroup = $list['inGroup'];
					unset($list['inGroup']);
					$active  = in_array( $list['route'],explode( '.',Route::currentRouteName() ) ) ? 'active expand':'';
					$icon = isset($list['icon']) ? "<i class='{$list['icon']}'></i> " : ""; 
					$o.="<li class = 'treeview $active'>";
						$o.="<a href='#'>$icon<span class='title'>{$list['name']}</span></a>";
						$o.="<ul class='treeview-menu'>";
						$oldPrefix = $prefix;
						$prefix = (!is_null($prefix)) ? $prefix.'.'.$list['route'] : $list['route'];
						$o.=$this->make($inGroup,$role,$prefix,true);
						$prefix = $oldPrefix;
						$o.="</ul>";
					$o.="</li>";
				}else{
					$routeName = $role;
					$routeName.= !is_null($prefix) ? ".$prefix":".";
					$routeName.= "{$list['route']}";
					$link = route($routeName);
					if($child){
						$o.="<li style='padding-left:5px;'><a href='$link' >";
					}else{
						$o.="<li><a href='$link' >";
					}
						$ic= isset($list['icon']) ? "<i class='{$list['icon']}'></i>" : ""; 
						$o.="$ic <span class='title'> {$list['name']}</span>";
					$o.="</a></li>";
				}
			}
		}
		return $o;

	}
}