@extends('main')
@section('content')
	  {!! Form::model($data,['route'=>[$update,$data->id], 'method'=>'PATCH','class'=>'form']) !!}
		<div class="card card-underline">
			<div class="card-head">
				<header>{!! $namaForm !!}</header>
				<div class="tools">
					<div class="btn-group">
						<a href="{{ route($index) }}" class="btn btn-icon-toggle"><i class="md md-undo"></i></a>
					</div>
				</div>
			</div>
			<div class="card-body">
				  	@include($form.'.siswa')
			</div>
			<div class="card-actionbar">
				<div class="card-actionbar-row">
					{!! Form::button('Reset',['class'=>'btn btn-flat btn-accent ink-reaction','type'=>'reset']) !!}
					{!! Form::button('Submit',['class'=>'btn btn-flat btn-primary ink-reaction','type'=>'submit']) !!}
				</div>
			</div>
		</div>
	  {!! Form::close() !!}
@stop