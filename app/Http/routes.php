<?php
Route::model('ruangan',Akademik\Ruangan::class);
Route::model('mapelkategori',Akademik\KategoriMataPelajaran::class);
Route::model('matapelajaran',Akademik\MataPelajaran::class);
Route::model('jurusan',Akademik\Jurusan::class);
Route::model('kelas',Akademik\Kelas::class);
Route::model('tahunajaran',Akademik\TahunAjaran::class);
Route::model('kebutuhankhusus',Akademik\KebutuhanKhusus::class);
Route::model('pegawai',Akademik\Pegawai::class);
Route::model('tugas',Akademik\PegawaiTugas::class);
Route::model('guru',Akademik\Guru::class);
Route::model('hobi',Akademik\Hobi::class);
Route::model('ekskul',Akademik\Ekskul::class);
Route::model('ijazah',Akademik\Ijazah::class);
Route::model('akta',Akademik\Akta::class);
Route::model('golongan',Akademik\GolonganPegawai::class);
Route::model('pangkat',Akademik\PangkatPegawai::class);
Route::model('pendidikan',Akademik\PegawaiPendidikan::class);
Route::model('diklat',Akademik\PegawaiDiklat::class);
Route::model('data',Akademik\MataPelajaran::class);
Route::model('guru_mapel',Akademik\GuruMataPelajaran::class);
Route::model('masakerja',Akademik\PegawaiMasaKerja::class);
Route::model('pegawaimengajar',Akademik\PegawaiMengajar::class);
Route::model('pangkat',Akademik\PangkatPegawai::class);
Route::model('jabatan',Akademik\Jabatan::class);
Route::model('pekerjaan',Akademik\PegawaiPekerjaan::class);
Route::model('siswaperkembangan',Akademik\SiswaPerkembangan::class);
Route::model('tahunajaran',Akademik\TahunAjaran::class);
Route::model('rombel',Akademik\RombonganBelajar::class);
Route::model('kategori',Akademik\KategoriMataPelajaran::class);
Route::model('siswahobi',Akademik\SiswaHobi::class);
Route::model('siswa',Akademik\Siswa::class);
Route::model('siswakesehatan',Akademik\SiswaKesehatan::class);
Route::model('siswaeskul',Akademik\SiswaEkskul::class);
Route::model('siswapaskapendidikan',Akademik\SiswaPaskaPendidikan::class);
Route::model('siswapendidikan',Akademik\SiswaPendidikan::class);



Route::get('/', function () {
	return redirect()->route('sesi.login.form');
});
/**
 *  bagian login system
 */
Route::group(['prefix'=>'sesi','namespace'=>'sesi','as'=>'sesi.','middleware'=>'UserAccessControll:guest'],function ()
{
	Route::get('/',function ()
	{
		return redirect()->route('sesi.login.form');
	});
	Route::get('login',['as'=>'login.form','uses'=>'SesiController@form']);
	Route::post('login',['as'=>'login.send','uses'=>'SesiController@login']);
	Route::get('logout',['as'=>'logout','uses'=>'SesiController@logout']);
});
Route::get("do",['as'=>'pegawai.do',"middleware"=>"UserAccessControll:pegawai",'uses'=>'sesi\SesiController@pegawaiRole']);
Route::post("do",['as'=>'pegawai.do.go',"middleware"=>"UserAccessControll:pegawai",'uses'=>'sesi\SesiController@pegawaiRoleSelect']);
Route::post('ajax_rombel_request',['as'=>'ajax.rombel.request','uses'=>'Pegawai\StaffTu\Siswa\SiswaRombelController@ajaxRequest']);
/**
 * bagian routing unutk pegawai
 */
Route::group(['namespace'=>'Pegawai'],function()
{
	/**
	 * bagian routing untuk Stuff tu
	 */
	Route::group(['prefix'=>'stafftu','namespace'=>'StaffTu','middleware'=>'UserAccessControll:pegawai,stafftu'],function (){
		Route::get('/',['as'=>'stafftu.landing','uses'=>'Landing@page']);
		Route::group(['namespace'=>'Akademik','prefix'=>'akademik'],function ()
		{
			Route::get('/',['as'=>'stafftu.akademik.index','uses'=>function ()
			{
				return redirect()->route('stafftu.akademik.ruangan.index');
			}]);
			Route::resources([
				'ruangan'=>'RuanganController',
				'jurusan'=>'JurusanController',
				'kelas'=>'KelasController',
				'tahunajaran'=>'TahunAjaranController',
				'ekskul'=>'EkskulController',
				'rombel'=>'RombelController',
				]);
			Route::group(['namespace'=>'MataPelajaran','prefix'=>'mapel'],function ()
			{
				Route::resources([
					'data'=>'DataController',
					'kategori'=>'KategoriController',
					'guru_mapel'=>'GuruController',
					]);
			});
		});
		Route::group(['namespace'=>'Kepegawaian','prefix'=>'kepegawaian'],function ()
		{
			Route::get('/',['as'=>'stafftu.kepegawaian.index','uses'=>function ()
			{
				return redirect()->route('stafftu.kepegawaian.pegawai.index');
			}]);
			Route::resources([
				'pegawai'=>'PegawaiController',
				'tugas'=>'TugasController',
				'guru'=>'GuruController',
				'diklat'=>'DiklatController',
				'pendidikan'=>'PendidikanController',
				'pekerjaan'=>'PekerjaanController',
				'masakerja'=>'MasaKerjaController',
				'pegawaimengajar'=>'PegawaiMengajarController',
				]);

		});
		Route::group(['namespace'=>'Siswa','prefix'=>'siswa'],function ()
		{
			Route::get('/',['as'=>'stafftu.siswa.index','uses'=>function ()
			{
				return redirect()->route('stafftu.siswa.siswa.index');
			}]);
			Route::resource('siswa','StudentController');
			Route::resource('siswahobi','SiswaHobiController');
			Route::resource('siswaperkembangan','PerkembanganSiswaController');
			Route::resource('siswarombel','SiswaRombelController');
			Route::resource('siswakesehatan','SiswaKesehatanController');
			Route::resource('siswaeskul','SiswaEkskulController');
			Route::resource('siswapaskapendidikan','SiswaPaskaPendidikanController');
			Route::resource('siswapendidikan','SiswaPendidikanController');
		});
		Route::group(['namespace'=>'Pengaturan','prefix'=>'pengaturan'],function(){
			Route::get('/',['as'=>'stafftu.pengaturan.index','uses'=>function(){
				return redirect()->route('stafftu.pengaturan.hobi.index');

			}]);
			Route::resources([
				'hobi'=>'HobiController',
				'kebutuhankhusus'=>'KebutuhanKhususController',
				'ijazah'=>'IjazahController',
				'akta'=>'AktaController',
				'golongan'=>'GolonganController',
				'pangkat'=>'PangkatController',
				'jabatan'=>'JabatanController',
				]);
		});
	});
	/**
	 * routing untuk bagian guru
	 */
	Route::group(['prefix'=>'guru','namespace'=>'Guru','as'=>'guru.','middleware'=>'UserAccessControll:pegawai,guru'],function ()
	{
		Route::get('/',['as'=>'landing']);
	});
	/**
	 * routing untuk bagian walikelas
	 */
	Route::group(['prefix'=>'walikelas','namespace'=>'WaliKelas','as'=>'walikelas.','middleware'=>'UserAccessControll:pegawai,walikelas'],function ()
	{
		Route::get('/',['as'=>'landing']);
	});
	/**
	 * routing untuk bagian kepala sekolah
	 */
	Route::group(['prefix'=>'kepalasekolah','namespace'=>'KepalaSekolah','as'=>'kepalasekolah.','middleware'=>'UserAccessControll:pegawai,kepalasekolah'],function ()
	{
		Route::get('/',['as'=>'landing']);
	});
	/**
	 * routing untuk bagian administratif
	 */
	Route::group(['prefix'=>'administratif','namespace'=>'Administratif','as'=>'administratif.','middleware'=>'UserAccessControll:pegawai,administratif'],function ()
	{
		Route::get('/',['as'=>'landing']);
	});
});
/**
 * 	routing untuk siswa
 */
Route::group(['namespace'=>'Siswa'],function ()
{
	
});