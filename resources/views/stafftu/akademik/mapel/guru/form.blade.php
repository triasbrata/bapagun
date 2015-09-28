@inject(guru,\Akademik\Guru)
@inject(jurusan,\Akademik\Jurusan)
@inject(kelas,\Akademik\Kelas)
<div class="col-md-12">
	<div class="col-xs-12 col-md-4">
		<div class="form-group floating-label">
			{!!Form::select('guru_id',$guru->listing(),null,['class'=>'form-control', 'id'=>'guru_id'])!!}
			{!!Form::label('guru_id','Nama Guru')!!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4 ">
		<div class="form-group floating-label">
			{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label'])!!}
			{!!Form::label('label','Nama Mata Pelajaran')!!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group floating-label">
			{!!Form::text('singkatan',null,['class'=>'form-control', 'id'=>'singkatan'])!!}
			{!!Form::label('singkatan','singkatan')!!}
		</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group floating-label">
			{!!Form::select('jurusan_id',$jurusan->lists('label','id'),null,['class'=>'form-control', 'id'=>'jurusan_id'])!!}
			{!!Form::label('jurusan_id','jurusan')!!}
		</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group floating-label">
			{!!Form::select('kelas_id',$kelas->lists('label','id'),null,['class'=>'form-control', 'id'=>'kelas_id'])!!}
			{!!Form::label('kelas_id','Kelas')!!}
		</div>	
	</div>
</div>
