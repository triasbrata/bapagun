@inject('siswa',\Akademik\Siswa)
@inject('rombel',\Akademik\RombonganBelajar)
<div class="row">
	<div class="col-md-6">

		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
				{!!Form::label('siswa_id','ID Siswa ')!!}
			</div>	
		</div>
		
		
	</div>
	<div class="col-md-6">
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::select('rombongan_belajar_id',$rombel->lists('label'),null,['class'=>'form-control', 'id'=>'rombongan_belajar_id'])!!}
				{!!Form::label('rombongan_belajar_id','Rombongan Belajar ')!!}
			</div>

		</div>
		
		
	</div>
	
</div>