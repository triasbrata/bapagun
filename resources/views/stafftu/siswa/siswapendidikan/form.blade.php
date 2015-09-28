@inject('siswa',\Akademik\Siswa)
@inject('jurusan',\Akademik\Jurusan)
@inject('kelas',\Akademik\Kelas)
<div class="row">
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
			{!!Form::label('siswa_id','Nama Siswa ')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('lulusan_dari',null,['class'=>'form-control', 'id'=>'lulusan_dari'])!!}
			{!!Form::label('lulusan_dari','Lulusan Dari')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('tanggal_sttb',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_sttb'])!!}
			{!!Form::label('tanggal_sttb','Tanggal Sttb')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::text('no_sttb',null,['class'=>'form-control ', 'id'=>'no_sttb'])!!}
			{!!Form::label('no_sttb','Nomor Sttb')!!}
		</div>

		
		<div class="form-group floating-label">
			{!! Form::text('lama_belajar',null,['class'=>'form-control ','id'=>'lama_belajar'])!!}
			{!! Form::label('lama_belajar','Lama Belajar')!!}

		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group floating-label">
			{!! Form::text('pindahan_dari',null,['class'=>'form-control','id'=>'pindahan_dari'])!!}
			{!! Form::label('pindahan_dari','Pindahan Dari ')!!}
			
		</div>
		<div class="form-group floating-label">
			{!! Form::select('jurusan_id',$jurusan->lists('label','id'),null,['class'=>'form-control','id'=>'jurusan_id'])!!}
			{!! Form::label('jurusan_id','Jurusan ')!!}
			
		</div>
		<div class="form-group floating-label">
			{!! Form::select('kelas_id',$kelas->lists('label','id'),null,['class'=>'form-control','id'=>'kelas_id'])!!}
			{!! Form::label('kelas_id','Kelas')!!}
			
		</div>
		<div class="form-group floating-label">
			{!! Form::text('tanggal_masuk',null,['class'=>'form-control txt-datepicker','id'=>'tanggal_masuk'])!!}
			{!! Form::label('tanggal_masuk','Tanggal Masuk')!!}
			
		</div>
		
	</div>
	
</div>