@inject('siswa',\Akademik\Siswa)
@inject('hobi',\Akademik\Hobi)
<div class="row">
	<div class="col-md-6">

		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::select('siswa_id',$siswa->lists('nama','id'),null,['class'=>'form-control', 'id'=>'siswa_id'])!!}
				{!!Form::label('siswa_id','ID Siswa ')!!}
			</div>	
		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('beasiswa',null,['class'=>'form-control', 'id'=>'beasiswa'])!!}
				{!!Form::label('beasiswa','Beasiswa ')!!}
			</div>

		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_pindah',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_pindah'])!!}
				{!!Form::label('tanggal_pindah','Tanggal Pindah')!!}
			</div>

		</div>
		
	</div>
	<div class="col-md-6">
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('alasan_pindah',null,['class'=>'form-control', 'id'=>'alasan_pindah'])!!}
				{!!Form::label('alasan_pindah','Alasan Pindah ')!!}
			</div>

		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_lulus',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lulus'])!!}
				{!!Form::label('tanggal_lulus','Tanggal Pindah ')!!}
			</div>

		</div>
		<div class="col-md-12">

			<div class="form-group floating-label">
				{!!Form::text('no_sttb',null,['class'=>'form-control', 'id'=>'no_sttb'])!!}
				{!!Form::label('no_sttb','No Sttb')!!}
			</div>
		</div>
		
	</div>
	
</div>