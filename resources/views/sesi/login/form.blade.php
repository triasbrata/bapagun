@extends('login')
@section('form')
	  {!! Form::open(['route'=>'sesi.login.form', 'method'=>'POST','class'=>'form']) !!}
		<div class="form-group floating-label">
			{!!Form::label('username','Username')!!}
			{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username',])!!}
		</div>
		<div class="form-group floating-label">
			{!!Form::label('password','Password')!!}
			{!!Form::password('password',['class'=>'form-control','id'=>'password',])!!}
		</div>
		<br/>
		<div class="form-group">
			<div class="col-xs-12 text-right">
				{!! Form::button('Login', ['type'=>'submit','class'=>'btn btn-primary btn-raised full-divided']) !!}
			</div>
		</div>
	{!! Form::close() !!}
@stop