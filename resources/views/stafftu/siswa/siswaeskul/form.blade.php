@inject('siswa',\Akademik\Siswa)
@inject('eskul',\Akademik\Ekskul)
<div class="row">
	<div class="col-md-12">
		<div class="form-group floating-label">
			{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
			{!!Form::label('siswa_id','ID Siswa ')!!}
		</div>
		<div class="form-group">
			{!!Form::select('eskul_id',$eskul->lists('label','id'),null,['class'=>'form-control', 'id'=>'eskul_id'])!!}
			{!!Form::label('eskul_id','Ekstra KuriKuler')!!}
		</div>
		
	</div>
	
</div>