<div class="col-xs-12">
	<h3 class="text-primary">Data Wali Siswa</h3>
</div>
<div class="col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('nama_wali',null,['class'=>'form-control', 'id'=>'nama_wali'])!!}
		{!!Form::label('nama_wali','Nama Lengkap')!!}
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group floating-label">
		{!!Form::text('tanggal_lahir',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir'])!!}
		{!!Form::label('tanggal_lahir','Tanggal Lahir')!!}
	</div>
</div>
<div class="col-xs-9">
	<div class="form-group floating-label">
		{!!Form::select('pendidikan_terakhir_wali',$pendidikan->lists(),null,['class'=>'form-control', 'id'=>'pendidikan_terakhir_wali'])!!}
		{!!Form::label('pendidikan_terakhir_wali','Pendidikan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('pekerjaan_wali',$pekerjaan->lists(),null,['class'=>'form-control', 'id'=>'pekerjaan_wali'])!!}
		{!!Form::label('pekerjaan_wali','Pekerjaan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
		{!!Form::label('tempat_lahir','Tempat Lahir')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('penghasilan_wali',$penghasilan->lists(),null,['class'=>'form-control', 'id'=>'penghasilan_wali'])!!}
		{!!Form::label('penghasilan_wali','Penghasilan ')!!}
	</div>
</div>
<div class="col-xs-6">
	<div class="form-group floating-label">
		{!!Form::text('no_telp',null,['class'=>'form-control ', 'id'=>'no_telp','data-inputmask'=>"'mask': '999-999-999-999'"])!!}
		{!!Form::label('no_telp','Nomor Telepon')!!}
	</div>
</div>
<div class="col-xs-6">
	<div class="form-group floating-label">
		{!!Form::text('alamat',null,['class'=>'form-control ', 'id'=>'alamat'])!!}
		{!!Form::label('alamat','Alamat')!!}
	</div>
</div>