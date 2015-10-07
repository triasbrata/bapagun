<?php 

namespace App;
/**
* translate name tipe program
*/
class TipeProgramTranslate
{
	private $list;
	function __construct()
	{
		$this->list=[
			"mandiri" => "Mandiri/Personal",
			"ovop" => "Kelompok OVOP",
			"wub" => "Kelompok WUB",
		];
	}
	public function make($tipeProgram)
	{
		return $this->list[$tipeProgram];
	}
}