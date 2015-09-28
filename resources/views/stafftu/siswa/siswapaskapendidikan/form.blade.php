@inject('siswa',\Akademik\Siswa)
@inject('kebutuhan',\Akademik\KebutuhanKhusus)
<div class="row">
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
			{!!Form::label('siswa_id','Nama Siswa ')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('pendidikan',null,['class'=>'form-control', 'id'=>'pendidikan'])!!}
			{!!Form::label('pendidikan','Pendidikan')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('nama_tempat_kerja',null,['class'=>'form-control', 'id'=>'nama_tempat_kerja'])!!}
			{!!Form::label('nama_tempat_kerja','Tempat Kerja')!!}
		</div>
		
	</div>
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!! Form::text('tanggal_kerja',null,['class'=>'form-control txt-datepicker','id'=>'tanggal_kerja'])!!}
			{!! Form::label('tanggal_kerja','Tanggal Kerja')!!}

		</div>
		<div class="form-group floating-label">
			{!! Form::text('penghasilan',null,['class'=>'form-control','id'=>'penghasilan'])!!}
			{!! Form::label('penghasilan','Penghasilan ')!!}
			
		</div>
		
	</div>
	
</div>