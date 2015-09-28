@inject('siswa',\Akademik\Siswa)
@inject('hobi',\Akademik\Hobi)
<div class="row">
	<div class="col-md-12">
		<div class="form-group floating-label">
			{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
			{!!Form::label('siswa_id','ID Siswa ')!!}
		</div>
		<div class="form-group">
			{!!Form::select('hobi_id',$hobi->daftar_hobi(),null,['class'=>'form-control', 'id'=>'hobi_id'])!!}
			{!!Form::label('hobi_id','Ekstra KuriKuler')!!}
		</div>
		
	</div>
	
</div>