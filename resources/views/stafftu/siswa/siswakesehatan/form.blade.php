@inject('siswa',\Akademik\Siswa)
@inject('kebutuhan',\Akademik\KebutuhanKhusus)
<div class="row">
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
			{!!Form::label('siswa_id','Nama Siswa ')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::select('kebutuhan_khusus_id',$kebutuhan->lists('label','id'),null,['class'=>'form-control', 'id'=>'kebutuhan_khusus_id'])!!}
			{!!Form::label('kebutuhan_khusus_id','Kebutuhan Khusus')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('golongan_darah',null,['class'=>'form-control', 'id'=>'golongan_darah'])!!}
			{!!Form::label('golongan_darah','Golongan Darah')!!}
		</div>
		
	</div>
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!! Form::text('penyakit',null,['class'=>'form-control','id'=>'penyakit'])!!}
			{!! Form::label('penyakit','Penyakit')!!}

		</div>
		<div class="form-group floating-label">
			{!! Form::text('berat',null,['class'=>'form-control','id'=>'berat'])!!}
			{!! Form::label('berat','Berat Badan ')!!}
			
		</div>
		<div class="form-group floating-label">
			{!! Form::text('tinggi',null,['class'=>'form-control','id'=>'tinggi'])!!}
			{!! Form::label('tinggi','Tinggi Badan ')!!}
			
		</div>
	</div>
	
</div>