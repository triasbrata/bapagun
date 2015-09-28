<div class="col-md-12">
	<h3 class="text-primary">Kategori MataPelajaran</h3>
</div>
<div class="col-md-6 col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label','required=required'])!!}
		{!!Form::label('label','Nama Kategori')!!}
	</div>
</div>
<div class="col-md-6 col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('huruf',null,['class'=>'form-control', 'id'=>'huruf'])!!}
		{!!Form::label('huruf','Huruf')!!}
	</div>
</div>