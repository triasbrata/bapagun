@inject('jurusan',\Akademik\Jurusan)
@inject('ajaran',\Akademik\TahunAjaran)
@inject('kelas',\Akademik\Kelas)
@inject('ruangan',\Akademik\Ruangan)
<div class="row">
	
	<div class="col-md-12">
		<h3 class="text-primary">Rombongan Belajar</h3>
	</div>
	
	<div class="col-md-6">
		<div class="col-md-12">
			
			<div class="form-group floating-label">
				{!!Form::select('jurusan_id',$jurusan->lists('label','id'),null,['class'=>'form-control', 'id'=>'jurusan_id'])!!}
				{!!Form::label('jurusan_id','Jurusan')!!}
			</div>
		</div>
		<div class="col-md-12">
			
			<div class="form-group floating-label">
				{!!Form::select('tahun_ajaran_id',$ajaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'tahun_ajaran_id'])!!}
				{!!Form::label('tahun_ajaran_id','Tahun Jaran')!!}
			</div>
		</div>
		<div class="col-md-12">
			
			<div class="form-group floating-label">
				{!!Form::select('semester',['genap'=>'genap','ganjil'=>'ganjil'],null,['class'=>'form-control', 'id'=>'semester'])!!}
				{!!Form::label('semester','Semester')!!}
			</div>
		</div>

	</div>
	<div class="col-md-6">
		<div class="col-md-12">
			
			<div class="form-group floating-label">
				{!!Form::select('kelas_id',$kelas->lists('label','id'),null,['class'=>'form-control', 'id'=>'kelas_id'])!!}
				{!!Form::label('kelas_id','Kelas')!!}
			</div>
		</div>
		<div class="col-md-12">
			
			<div class="form-group floating-label">
				{!!Form::select('ruangan_id',$ruangan->lists('label','id'),null,['class'=>'form-control', 'id'=>'ruangan_id'])!!}
				{!!Form::label('ruangan_id','Ruangan')!!}
			</div>
		</div>
	</div>

	
</div>