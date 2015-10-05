@extends('base')
@section('title', 'Masuk Sistem')
@section('base-content')
	<section class="container login">
	<div class="row">
		<div class="card no-padding col offset-m4 m4 s12 ">
			<div class="card-image">
			<img src="{{ asset('imgs/bg-login.jpg') }}" width="100%" alt="">
			<span class="card-title">Portal K-UKMK</span>
			</div>
			<span class="card-title">Login System</span>
			<div class="card-content">
				@yield('form')
			</div>
		</div>
	</div>
	</section>
@stop