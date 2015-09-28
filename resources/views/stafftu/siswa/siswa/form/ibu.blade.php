<div class="col-xs-12">
	<h3 class="text-primary">Data Ibu Kandung</h3>
</div>
<div class="col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('nama_ibu',null,['class'=>'form-control', 'id'=>'nama_ibu'])!!}
		{!!Form::label('nama_ibu','Nama Lengkap')!!}
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group floating-label">
		{!!Form::text('tanggal_lahir_ibu',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir_ibu'])!!}
		{!!Form::label('tanggal_lahir_ibu','Tanggal Lahir')!!}
	</div>
</div>
<div class="col-xs-9">
	<div class="form-group floating-label">
		{!!Form::select('pendidikan_terakhir_ibu',$pendidikan->lists(),null,['class'=>'form-control', 'id'=>'pendidikan_terakhir_ibu'])!!}
		{!!Form::label('pendidikan_terakhir_ibu','Pendidikan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('pekerjaan_ibu',$pekerjaan->lists(),null,['class'=>'form-control', 'id'=>'pekerjaan_ibu'])!!}
		{!!Form::label('pekerjaan_ibu','Pekerjaan')!!}
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
		{!!Form::select('penghasilan',$penghasilan->lists(),null,['class'=>'form-control', 'id'=>'penghasilan'])!!}
		{!!Form::label('penghasilan','Penghasilan ')!!}
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