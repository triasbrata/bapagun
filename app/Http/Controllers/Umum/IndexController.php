<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UnitUsaha;

class IndexController extends Controller
{
    public function awal()
    {
    	$data = UnitUsaha::all()
    	foreach (UnitUsaha::all() as $usha) {
    		$kondisi = $usaha->kondisi()
    		$kondisi->lastReport()->toArray();
    		print_t($kondisi);
    	}
    
    	// return $this->view('public.awal',compact('data'));
    }
}
