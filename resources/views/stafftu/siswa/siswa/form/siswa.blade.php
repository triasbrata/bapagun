@inject('kebutuhanKhusus',\Akademik\KebutuhanKhusus)
@inject('agama',\Akademik\Agama)
@inject('pendidikan',\Akademik\Pendidikan)
@inject('penghasilan',\Akademik\Penghasilan)
@inject('pekerjaan',\Akademik\Pekerjaan)
<div class="row">
	<div class="col-md-6">
		<div class="col-xs-12">
			<h3 class="text-primary">Data Siswa</h3>
		</div>
		<div class="col-xs-12">
			<div class="form-group floating-label">
				{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username'])!!}
				{!!Form::label('username','Username ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::password('password',['class'=>'form-control', 'id'=>'password'])!!}
				{!!Form::label('password','Password ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::password('password_confirmation',['class'=>'form-control', 'id'=>'password_confirmation'])!!}
				{!!Form::label('password_confirmation','Ulangi Password ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
				{!!Form::label('nama','Nama Siswa ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group">
				{!!Form::select('gender',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender'])!!}
				{!!Form::label('gender','Jenis Kelamin')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
				{!!Form::label('tempat_lahir','Tempat Lahir')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_lahir',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir'])!!}
				{!!Form::label('tanggal_lahir','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::text('nis',null,['class'=>'form-control', 'id'=>'nis', 'data-inputmask'=>"'mask': '9999'"])!!}
				{!!Form::label('nis','NIS')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::text('nisn',null,['class'=>'form-control', 'id'=>'nisn', 'data-inputmask'=>"'mask': '99-9999-9999'"])!!}
				{!!Form::label('nisn','NISN')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::text('nik',null,['class'=>'form-control txt-input-mask', 'id'=>'nik', 'data-inputmask'=>"'mask': '9999-9999-9999-9999'"])!!}
				{!!Form::label('nik','NIK')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::select('status',['orang tua masih lengkap'=>'orang tua masih lengkap','yatim'=>'yatim','piatu'=>'piatu','yatim piatu'=>'yatim piatu'],null,['class'=>'form-control', 'id'=>'status'])!!}
				{!!Form::label('status','Status')!!}
			</div>
		</div>
		
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::select('agama',$agama->lists(),null,['class'=>'form-control', 'id'=>'agama'])!!}
				{!!Form::label('agama','Agama')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::select('kewarganegaraan',['WNI'=>'WNI','WNA'=>'WNA'],null,['class'=>'form-control', 'id'=>'kewarganegaraan'])!!}
				{!!Form::label('kewarganegaraan','Kewarganegaraan')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('urutan_saudara',null,['class'=>'form-control', 'id'=>'urutan_saudara'])!!}
				{!!Form::label('urutan_saudara','Anak Ke')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('jumlah_saudara_kandung',null,['class'=>'form-control', 'id'=>'jumlah_saudara_kandung'])!!}
				{!!Form::label('jumlah_saudara_kandung','Jumlah Saudara Kandung')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('jumlah_saudara_tiri',null,['class'=>'form-control', 'id'=>'jumlah_saudara_tiri'])!!}
				{!!Form::label('jumlah_saudara_tiri','Jumlah Saudara Tiri')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('jumlah_saudara_angkat',null,['class'=>'form-control', 'id'=>'jumlah_saudara_angkat'])!!}
				{!!Form::label('jumlah_saudara_angkat','Jumlah Saudara Angkat')!!}
			</div>
		</div>
		<div class="col-xs-12">
			<div class="form-group floating-label">
				{!!Form::text('bahasa_dirumah',null,['class'=>'form-control', 'id'=>'bahasa_dirumah'])!!}
				{!!Form::label('bahasa_dirumah','Bahasa Dirumah')!!}
			</div>
		</div>


		
		
		
		@include($form.'.alamat')
	</div>
	<div class="col-md-6">
		@include($form.'.ayah')
		@include($form.'.ibu')
		@include($form.'.wali')
	</div>
</div>