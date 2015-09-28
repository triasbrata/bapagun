@extends('login')
@section('form')
	  {!! Form::open(['route'=>'sesi.login.form', 'method'=>'POST','class'=>'form']) !!}
		<div class="form-group floating-label">
			{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username',])!!}
			{!!Form::label('username','Username')!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::password('password',['class'=>'form-control','id'=>'password',])!!}
			{!!Form::label('password','Password')!!}
		</div>
		<br/>
		<div class="row">
			<div class="col-xs-12 text-right">
				{!! Form::button('Login', ['type'=>'submit','class'=>'btn btn-primary btn-raised']) !!}
			</div>
		</div>
	{!! Form::close() !!}
@stop