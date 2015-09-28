@inject('pegawai','\Akademik\Pegawai')
@inject('role','\Akademik\ListRolePegawai')
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!!Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control', 'id'=>'pegawai_id'])!!}
			{!!Form::label('pegawai_id','ID Pegawai')!!}
		</div>
		<div class="form-group">
			{!!Form::select('role',$role->lists(),null,['class'=>'form-control', 'id'=>'role'])!!}
			{!!Form::label('role','Role')!!}
		</div>
		
	</div>
	
</div>