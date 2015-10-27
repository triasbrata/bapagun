@extends('login')
@section('form')
	  {!! Form::open(['route'=>'sesi.login.form', 'method'=>'POST','class'=>'form']) !!}
		<div class="form-group has-feedback">
			{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username','placeholder'=>'Username',])!!}
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			{!!Form::password('password',['class'=>'form-control', 'id'=>'password','placeholder'=>'Password'])!!}
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<br/>
		<div class="form-group">
				{!! Form::button('Login', ['type'=>'submit','class'=>'btn btn-danger full-divided']) !!}
		</div>
	{!! Form::close() !!}
@stop