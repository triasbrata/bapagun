<?php 
	namespace App;

	/**
	* Menghitung Jenis Usaha
	*/
	class HitungJenisUsaha 
	{

		public function hitung($omset, $aset)
		{
			if($aset <= 50000000  && $omset <= 300000000){
				return "Usaha Mikro";
			}
			elseif( $aset >= 50000000 && $aset <500000000 && $omset > 300000000 && $omset<=2500000000 )
			{
				return "Usaha Kecil";
			}
			elseif($aset >= 500000000 && $aset  < 10000000000 && $omset > 2500000000 && $omset <= 50000000000 )
			{
				return "Usaha Menengah";
			}
		}
	}

 ?>