@inject('ijazah',\Akademik\Ijazah)
@inject('akta',\Akademik\Akta)
@inject('pegawai',\Akademik\Pegawai)
@inject('jurusan',\Akademik\Jurusan)
<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Pendidikan</h3>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control', 'id'=>'pegawai_id'])!!}
					{!!Form::label('pegawai_id','Ijazah')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('ijazah_id',$ijazah->lists('label','id'),null,['class'=>'form-control', 'id'=>'ijazah_id'])!!}
					{!!Form::label('ijazah_id','Ijazah')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('akta_id',$akta->lists('label','id'),null,['class'=>'form-control', 'id'=>'akta'])!!}
					{!!Form::label('akta','Akta')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('nomor_ijazah',null,['class'=>'form-control', 'id'=>'nomor_ijazah','data-inputmask'=>"'mask': '9 9 9 9 9 9 9'"])!!}
					{!!Form::label('nomor_ijazah','Nomor Ijazah')!!}
				</div>
			</div>

		</div>
		
		
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('tahun_lulus',null,['class'=>'form-control', 'id'=>'tahun_lulus'])!!}
					{!!Form::label('tahun_lulus','Tahun Lulus')!!}
				</div>
			</div>
			<div class="col-md-12">

				<div class="form-group floating-label">
					{!!Form::select('jurusan',$jurusan->lists('label','id'),null,['class'=>'form-control','id'=>'jurusan'])!!}
					{!!Form::label('jurusan','Jurusan')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('nama_instansi_pendidikan',null,['class'=>'form-control', 'id'=>'nama_instansi_pendidikan'])!!}
					{!!Form::label('nama_instansi_pendidikan','Nama Perguruan Tinggi')!!}
				</div>
			</div>
		</div>
		
		
		
	</div>
	
</div>


</div>