@inject('provinsi','App\Provinsi')
<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('provinsi_id','Nama Provinsi')!!}
				{!!Form::select('provinsi_id',$provinsi->lists('label','id'),null,['class'=>'form-control', 'id'=>'provinsi_id'])!!}
			</div>
	</div>
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('label','Nama Kabupaten/ Kota')!!}
				{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label'])!!}
			</div>
	</div>
</div>
