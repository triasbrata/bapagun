@inject('bantuan','\App\Bantuan')
<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('bantuan_id','Nama Bantuan')!!}
				{!!Form::select('bantuan_id',$bantuan->listNew(),null,['class'=>'form-control', 'id'=>'instansi_id'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('title','Nama Kriteria')!!}
				{!!Form::text('title',null,['class'=>'form-control', 'id'=>'title'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('keterangan','Keterangan Kriteria')!!}
				{!!Form::textarea('keterangan',null,['class'=>'form-control', 'id'=>'keterangan'])!!}
			</div>
	</div>
</div>
