@inject('pegawai',\Akademik\Pegawai)
@inject('mata_pelajaran',\Akademik\MataPelajaran)

<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Kehalian Mengajar</h3>
		</div>
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group floating-label">
					{!!Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control', 'id'=>'pegawai_id'])!!}
					{!!Form::label('pegawai_id','Nama Pegawai')!!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group floating-label">
					{!!Form::select('mata_pelajaran_id',$mata_pelajaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'mata_pelajaran_id'])!!}
					{!!Form::label('mata_pelajaran_id','Mata Pelajaran')!!}
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group floating-label">
					{!!Form::text('jumlah_jam',null,['class'=>'form-control', 'id'=>'jumlah_jam'])!!}
					{!!Form::label('jumlah_jam','Jumlah Jam')!!}
				</div>
			</div>

			
		</div>
		
		
		

		
		
	</div>
	
</div>


</div>