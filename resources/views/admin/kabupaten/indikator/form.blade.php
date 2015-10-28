@inject('kriteria','\App\Kriteria')
<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('kriteria_id','Kriteria')!!}
				{!!Form::select('kriteria_id',$kriteria->listNew(),null,['class'=>'form-control', 'id'=>'kriteria_id'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('title','Indikator')!!}
				{!!Form::text('title',null,['class'=>'form-control', 'id'=>'title'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('bobot','Bobot Nilai')!!}
				{!!Form::text('bobot',null,['class'=>'form-control', 'id'=>'bobot'])!!}
			</div>
	</div>
</div>
