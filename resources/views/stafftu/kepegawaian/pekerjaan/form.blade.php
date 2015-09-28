@inject('pangkat',\Akademik\PangkatPegawai)
@inject('golongan',\Akademik\GolonganPegawai)
@inject('jabatan',\Akademik\Jabatan)
@inject('pegawai',\Akademik\Pegawai)


<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Pekerjaan</h3>
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
					{!!Form::select('status',['status1'=>'status 1','status2'=>'status2'],null,['class'=>'form-control', 'id'=>'status'])!!}
					{!!Form::label('status','Status')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('pangkat_pegawais_id',$pangkat->lists('label','id'),null,['class'=>'form-control', 'id'=>'pangkat_pegawais_id'])!!}
					{!!Form::label('pangkat_pegawais_id','Pangkat')!!}
				</div>
			</div>

			

			
		</div>
		
		
		
		<div class="col-md-6">
			

			<!-- <div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('golongan',null,['class'=>'form-control', 'id'=>'golongan'])!!}
					{!!Form::label('golongan','Golongan')!!}
				</div>
			</div> -->
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('golongan_id',$golongan->lists('label','id'),null,['class'=>'form-control', 'id'=>'golongan_id'])!!}
					{!!Form::label('golongan_id','Golongan')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('jabatan_id',$jabatan->lists('label','id'),null,['class'=>'form-control', 'id'=>'jabatan_id'])!!}
					{!!Form::label('jabatan_id','Jabatan')!!}
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::text('tmt_awal',null,['class'=>'form-control txt-datepicker', 'id'=>'tmt_awal'])!!}
					{!!Form::label('tmt_awal','Tmt Awal')!!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::text('tmt_akhir',null,['class'=>'form-control txt-datepicker', 'id'=>'tmt_akhir'])!!}
					{!!Form::label('tmt_akhir','Tmt Akhir')!!}
				</div>
			</div>
			
			
		</div>
		
		
		
	</div>
	
</div>


</div>