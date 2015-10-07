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
			'admin'=>[
					[ 'route'=>'landing', 'name'=>'Dashboard Admin', 'icon'=> 'fa fa-home'],
					[ 'route'=>'unitkegiatan.index', 'name'=>'Unit Kegiatan', 'icon'=> 'fa fa-database'],
					[ 'route'=>'landing', 'name'=>'Dashboard Admin', 'icon'=> 'fa fa-home'],
					[ 'route'=>'landing', 'name'=>'Dashboard Admin', 'icon'=> 'fa fa-home'],
			]
		];
		return $menu[$level];
	}
	public function make($menu,$role = null,$prefix = null)
	{
		$o = "";
		$lists = is_object($menu) ? $menu->lists($role) : $menu;
		foreach ($lists as $list) {
			if(is_array($list)){
				if(isset($list['inGroup'])){
					$inGroup = $list['inGroup'];
					unset($list['inGroup']);
					$active  = in_array( $list['route'],explode( '.',Route::currentRouteName() ) ) ? 'active expand':'';
					$icon = isset($list['icon']) ? "<div class='gui-icon'><i class='{$list['icon']}'></i></div>" : ""; 
					$o.="<li class = 'gui-folder $active'>";
						$o.="<a>$icon<span class='title'>{$list['name']}</span></a>";
						$o.="<ul>";
						$oldPrefix = $prefix;
						$prefix = (!is_null($prefix)) ? $prefix.'.'.$list['route'] : $list['route'];
						$this->make($inGroup,$role,$prefix);
						$prefix = $oldPrefix;
						$o.="</ul>";
					$o.="</li>";
				}else{
					$routeName = $role;
					$routeName.= !is_null($prefix) ? ".$prefix":".";
					$routeName.= "{$list['route']}";
					$link = route($routeName);
					$o.="<li><a href='$link' >";
					$o.= isset($list['icon']) ? "<div class='gui-icon'><i class='{$list['icon']}'></i></div>" : ""; 
					$o.="<span class='title'>{$list['name']}</span>";
					$o.="</a></li>";
				}
			}else{
				$routeName = $role;
				$routeName.= !is_null($prefix) ? ".$prefix":".";
				$routeName.= "{$list['route']}";
				$link = route($routeName);
				$o.="<li><a href='$link' >";
				$o.= isset($list['icon']) ? "<div class='gui-icon'><i class='{$list['icon']}'></i></div>" : ""; 
				$o.="<span class='title'>{$list['name']}</span>";
				$o.="</a></li>";
				continue;
			}
		}
		return $o;

	}
}