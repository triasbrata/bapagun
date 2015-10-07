@extends('base')
@section('title', 'Masuk Sistem')
@section('base-content')
	<section class="container login">
	<div class="row">
		<div class="card no-padding col-md-offset-4 col-md-4 ">
			<div class="card-head no-padding">
				<img src="{{ asset('imgs/bg-login.jpg') }}" width="100%" alt="">
				<span class="card-title">Portal K-UKMK</span>
			</div>
			<div class="card-body">
				@yield('form')
			</div>
		</div>
	</div>
	</section>
@stop