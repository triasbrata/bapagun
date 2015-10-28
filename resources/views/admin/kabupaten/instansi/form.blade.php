<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('title','Nama Instansi')!!}
				{!!Form::text('title',null,['class'=>'form-control', 'id'=>'title'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('keterangan','Keterangan Instansi')!!}
				{!!Form::textarea('keterangan',null,['class'=>'form-control', 'id'=>'keterangan'])!!}
			</div>
	</div>
</div>
