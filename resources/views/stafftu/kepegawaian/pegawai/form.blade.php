

<div class="row">
	
	<div class="col-md-6">
		<div class="col-md-12">
			<h3 class="text-primary">Data User</h3>
		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username'])!!}
				{!!Form::label('username','Username')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::password('password',['class'=>'form-control', 'id'=>'password'])!!}
				{!!Form::label('password','Password')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::password('password_confirmation',['class'=>'form-control', 'id'=>'password_confirmation'])!!}
				{!!Form::label('password_confirmation','Password Confirmation')!!}
			</div>
		</div>
		<div class="col-md-12">
			<h3 class="text-primary">Data Pegawai</h3>
		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
				{!!Form::label('nama','Nama')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('gender',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender'],'L')!!}
				{!!Form::label('gender','Gender')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nip',null,['class'=>'form-control', 'id'=>'nip', 'data-inputmask'=>"'mask': '99999999 999999  9 999 '"])!!}
				{!!Form::label('nis','NIP')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
				{!!Form::label('tempat_lahir','Tempat Lahir')!!}
			</div>
		</div>
		
		
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_lahir',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir'])!!}
				{!!Form::label('tanggal_lahir','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('status_kepegawaian',['Pegawai Negeri'=>'Pegawai Negeri','Honorer'=>'Honorer'],null,['class'=>'form-control', 'id'=>'status_kepegawaian'],'Honorer')!!}
				{!!Form::label('status_kepegawaian','Status Kepegawaian')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('jenis_ptk',null,['class'=>'form-control', 'id'=>'jenis_ptk'])!!}
				{!!Form::label('jenis_ptk','Jenis Ptk')!!}
			</div>
		</div>
		<div class="col-md-6">

			<div class="form-group floating-label">
				{!!Form::text('pengawas_bidang_studi',null,['class'=>'form-control', 'id'=>'pengawas_bidang_studi'])!!}
				{!!Form::label('pengawas_bidang_studi','Pengawas Bidang Studi')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('agama',['islam'=>'Islam','kristen'=>'Kristen','hindu'=>'Hindu','budha'=>'Budha','konghucu'=>'Konghucu'],null,['class'=>'form-control', 'id'=>'agama'])!!}
				{!!Form::label('agama','Agama')!!}
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nama_ibu_kandung',null,['class'=>'form-control', 'id'=>'nama_ibu_kandung','maxlength'=>'10'])!!}
				{!!Form::label('nama_ibu_kandung','Nama Ibu Kandung')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nama_ayah_kandung',null,['class'=>'form-control', 'id'=>'nama_ayah_kandung','maxlength'=>'10'])!!}
				{!!Form::label('nama_ayah_kandung','Nama Ayah Kandung')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('status_perkawinan',['kawin'=>'kawin','belum kawin'=>'belum kawin'],null,['class'=>'form-control', 'id'=>'status_perkawinan'])!!}
				{!!Form::label('status_perkawinan','Status Perkawinan')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_nikah',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_nikah'])!!}
				{!!Form::label('tanggal_nikah','Tanggal Nikah')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('pekerjaan',null,['class'=>'form-control', 'id'=>'pekerjaan','maxlength'=>'25'])!!}
				{!!Form::label('pekerjaan','Pekerjaan Istri/Suami')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('gaji',null,['class'=>'form-control', 'id'=>'gaji','maxlength'=>'25'])!!}
				{!!Form::label('gaji','Gaji Istri/Suami')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nip',null,['class'=>'form-control', 'id'=>'nip', 'data-inputmask'=>"'mask': '99999999 999999  9 999 '"])!!}
				{!!Form::label('nis','NIP Istri/Suami')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('npwp',null,['class'=>'form-control', 'id'=>'npwp','maxlength'=>'25'])!!}
				{!!Form::label('NPWP','NPWP')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('kewarganegaraan',['WNI'=>'WNI','WNA'=>'WNA'],null,['class'=>'form-control', 'id'=>'kewarganegaraan','maxlength'=>'25'])!!}
				{!!Form::label('kewarganegaraan','Kewarganegaraan')!!}
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-12">
			<h3 class="text-primary">Data Anak 1</h3>

		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('nama_anak_pertama',null,['class'=>'form-control', 'id'=>'nama_anak_pertama'])!!}
				{!!Form::label('nama_anak_pertama','Nama Anak ')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tmp_lahir',null,['class'=>'form-control', 'id'=>'tmp_lahir'])!!}
				{!!Form::label('tmp_lahir','Tempat Lahir')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tgl_lahir_anak1',null,['class'=>'form-control txt-datepicker', 'id'=>'tgl_lahir_anak1'])!!}
				{!!Form::label('tgl_lahir_anak1','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::select('gender_anak1',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender_anak1'],'L')!!}
				{!!Form::label('gender_anak1','Jenis Kelamin')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('sekolah_anak_1',null,['class'=>'form-control', 'id'=>'sekolah_anak_1'])!!}
				{!!Form::label('sekolah_anak_1','Sekolah')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tunjangan_anak_1',null,['class'=>'form-control', 'id'=>'tunjangan_anak_1'])!!}
				{!!Form::label('tunjangan_anak_1','Tunjangan')!!}
			</div>
		</div>

		<div class="col-md-12">
			<h3 class="text-primary">Data Anak 2</h3>

		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('nama_anak_pertama',null,['class'=>'form-control', 'id'=>'nama_anak_pertama'])!!}
				{!!Form::label('nama_anak_pertama','Nama Anak ')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tmp_lahir',null,['class'=>'form-control', 'id'=>'tmp_lahir'])!!}
				{!!Form::label('tmp_lahir','Tempat Lahir')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tgl_lahir_anak1',null,['class'=>'form-control txt-datepicker', 'id'=>'tgl_lahir_anak1'])!!}
				{!!Form::label('tgl_lahir_anak1','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::select('gender_anak1',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender_anak1'],'L')!!}
				{!!Form::label('gender_anak1','Jenis Kelamin')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('sekolah_anak_1',null,['class'=>'form-control', 'id'=>'sekolah_anak_1'])!!}
				{!!Form::label('sekolah_anak_1','Sekolah')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tunjangan_anak_1',null,['class'=>'form-control', 'id'=>'tunjangan_anak_1'])!!}
				{!!Form::label('tunjangan_anak_1','Tunjangan')!!}
			</div>
		</div>

		<div class="col-md-12">
			<h3 class="text-primary">Data Anak 3</h3>

		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('nama_anak_pertama',null,['class'=>'form-control', 'id'=>'nama_anak_pertama'])!!}
				{!!Form::label('nama_anak_pertama','Nama Anak ')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tmp_lahir',null,['class'=>'form-control', 'id'=>'tmp_lahir'])!!}
				{!!Form::label('tmp_lahir','Tempat Lahir')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tgl_lahir_anak1',null,['class'=>'form-control txt-datepicker', 'id'=>'tgl_lahir_anak1'])!!}
				{!!Form::label('tgl_lahir_anak1','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::select('gender_anak1',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender_anak1'],'L')!!}
				{!!Form::label('gender_anak1','Jenis Kelamin')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('sekolah_anak_1',null,['class'=>'form-control', 'id'=>'sekolah_anak_1'])!!}
				{!!Form::label('sekolah_anak_1','Sekolah')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tunjangan_anak_1',null,['class'=>'form-control', 'id'=>'tunjangan_anak_1'])!!}
				{!!Form::label('tunjangan_anak_1','Tunjangan')!!}
			</div>
			</div>
			
		
		
		@include($form.'_alamat')


	</div>
</div>


</div>