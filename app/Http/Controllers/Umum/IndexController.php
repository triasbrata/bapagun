<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UnitUsaha;

class IndexController extends Controller
{
    public function awal(UnitUsaha $m )
    {
    	$data = [];
    	foreach ($m->LastReport() as $l ) {
    		$l['kondisi']= $l['kondisi'][0];
    		$l = array_dot($l);
    		$data = array_merge_recursive($data,[$l]);
    	}
    	return $this->view('umum.awal',compact('data'));
    }
    public function profil($id)
    {
        $unitUsaha = UnitUsaha::find($id);
        return $this->view('umum.profil',compact('unitUsaha'));
    }
}
