@inject('pegawai',\Akademik\Pegawai)

<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Diklat</h3>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control', 'id'=>'pegawai_id'])!!}
					{!!Form::label('pegawai_id','Nama Pegawai')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
					{!!Form::label('nama','Nama Diklat')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('penyelenggara',null,['class'=>'form-control', 'id'=>'penyelenggara'])!!}
					{!!Form::label('penyelenggara','Penyelenggara')!!}
				</div>
			</div>	
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tempat',null,['class'=>'form-control', 'id'=>'tempat'])!!}
				{!!Form::label('tempat','Tempat')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tahun',null,['class'=>'form-control', 'id'=>'tahun'])!!}
				{!!Form::label('tahun','Tahun')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('lama',null,['class'=>'form-control', 'id'=>'lama'])!!}
				{!!Form::label('lama','Lama')!!}
			</div>
		</div>
		
		
	</div>
	
</div>


</div>