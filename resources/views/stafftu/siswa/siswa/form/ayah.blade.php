<div class="col-xs-12">
	<h3 class="text-primary">Data Ayah Kandung</h3>
</div>
<div class="col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('nama_ayah',null,['class'=>'form-control', 'id'=>'nama_ayah'])!!}
		{!!Form::label('nama_ayah','Nama Lengkap')!!}
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group floating-label">
		{!!Form::text('tanggal_lahir_ayah',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir_ayah'])!!}
		{!!Form::label('tanggal_lahir_ayah','Tanggal Lahir')!!}
	</div>
</div>
<div class="col-xs-9">
	<div class="form-group floating-label">
		{!!Form::select('pendidikan_terakhir_ayah',$pendidikan->lists(),null,['class'=>'form-control', 'id'=>'pendidikan_terakhir_ayah'])!!}
		{!!Form::label('pendidikan_terakhir_ayah','Pendidikan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('pekerjaan_ayah',$pekerjaan->lists(),null,['class'=>'form-control', 'id'=>'pekerjaan_ayah'])!!}
		{!!Form::label('pekerjaan_ayah','Pekerjaan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::text('tempat_lahir',null,['class'=>'form-control ', 'id'=>'tempat_lahir'])!!}
		{!!Form::label('tempat_lahir','Tempat Lahir')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('penghasilan_ayah',$penghasilan->lists(),null,['class'=>'form-control', 'id'=>'penghasilan_ayah'])!!}
		{!!Form::label('penghasilan_ayah','Penghasilan ')!!}
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