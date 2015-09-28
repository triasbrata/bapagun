@inject('kebutuhanKhusus',\Akademik\KebutuhanKhusus)
@inject('agama',\Akademik\Agama)
<div class="row">
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
			{!!Form::label('nama','Nama Siswa ')!!}
		</div>
		<div class="form-group">
			{!!Form::select('gender',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender'])!!}
			{!!Form::label('gender','Jenis Kelamin')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('nis',null,['class'=>'form-control', 'id'=>'nis', 'data-inputmask'=>"'mask': '9999'"])!!}
			{!!Form::label('nis','NIS')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('nisn',null,['class'=>'form-control', 'id'=>'nisn', 'data-inputmask'=>"'mask': '99-9999-9999'"])!!}
			{!!Form::label('nisn','NISN')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
			{!!Form::label('tempat_lahir','Tempat Lahir')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('tanggal_lahir',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir'])!!}
			{!!Form::label('tanggal_lahir','Tanggal Lahir')!!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!!Form::text('nik',null,['class'=>'form-control txt-input-mask', 'id'=>'nik', 'data-inputmask'=>"'mask': '9999-9999-9999-9999'"])!!}
			{!!Form::label('nik','NIK')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::select('agama',$agama->lists(),null,['class'=>'form-control', 'id'=>'agama'])!!}
			{!!Form::label('agama','Agama')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::select('kebutuhan_khusus',$kebutuhanKhusus->lists('label','id'),null,['class'=>'form-control', 'id'=>'kebutuhan_khusus'])!!}
			{!!Form::label('kebutuhan_khusus','Kebutuhan Khusus')!!}
		</div>
		
		<div class="form-group floating-label">
			{!!Form::text('no_kps',null,['class'=>'form-control', 'id'=>'no_kps'])!!}
			{!!Form::label('no_kps','Nomor KPS')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('no_skhun',null,['class'=>'form-control', 'id'=>'no_skhun','data-inputmask'=>"'mask': '9-99-99-99-999-999-9'"])!!}
			{!!Form::label('no_skhun','Nomor SKHUN')!!}
		</div>
	</div>
</div>