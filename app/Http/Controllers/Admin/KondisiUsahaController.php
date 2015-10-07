<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KondisiUsaha;
class KondisiUsahaController extends Controller
{
	function __construct() {
		$prefix = 'admin.kondisiusaha';
		$model = new KondisiUsaha();
		$moduleName = "Kondisi Usaha";
		parent::__construct($prefix,$model,$moduleName);
	}
    public function FunctionName($value='')
    {
    	# code...
    }
}
