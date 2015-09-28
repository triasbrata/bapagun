@inject('mapel','\Akademik\MataPelajaran')
@inject('guru','\Akademik\Guru')
<div class="col-md-6 col-xs-12">
	<div class="form-group floating-label">
		{!!Form::select('mata_pelajaran_id',$mapel->listAllAttribute(),null,['class'=>'form-control', 'id'=>'mata_pelajaran_id'])!!}
		{!!Form::label('mata_pelajaran_id','Mata Pelajaran')!!}
	</div>
</div>
<div class="col-md-6 col-xs-12">
	<div class="form-group floating-label">
		{!!Form::select('guru_id',$guru->listWithPegawaiName(),null,['class'=>'form-control', 'id'=>'guru_id'])!!}
		{!!Form::label('guru_id','Guru Pengajar')!!}
	</div>
</div>
