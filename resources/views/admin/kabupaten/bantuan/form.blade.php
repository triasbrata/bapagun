@inject('instansi','\App\Instansi')
<div class="row">
	<div class="col-xs-12">
			<div class="form-group">
				{!!Form::label('instansi_id','Nama Instansi')!!}
				{!!Form::select('instansi_id',$instansi->lists('title','id'),null,['class'=>'form-control', 'id'=>'instansi_id'])!!}
			</div>
	</div>
	<div class="col-xs-12">
			<div class="form-group">
				{!!Form::label('title','Nama Bantuan')!!}
				{!!Form::text('title',null,['class'=>'form-control', 'id'=>'title'])!!}
			</div>
	</div>
	<div class="col-xs-12">
			<div class="form-group">
				{!!Form::label('keterangan','Keterangan Bantuan')!!}
				{!!Form::textarea('keterangan',null,['class'=>'form-control', 'id'=>'keterangan'])!!}
			</div>
	</div>
</div>
