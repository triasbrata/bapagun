@extends('base')
@section('base-content')
	<section class="section-account">
		<div class="img-backdrop" style="background-image: url('/images/landscape.jpg')"></div>
		<div class="spacer"></div>
		<div class="card contain-sm style-transparent">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-6">
						<br/>
						<span class="text-lg text-bold text-primary">Academy Information System</span>
						<br/>
						<br/>						
						@yield('form')
					</div><!--end .col -->
					<div class="col-sm-5 col-sm-offset-1 text-center">
						<br>
						<br>
						<img src="{{ asset('images/logo.png') }}" alt="" class="col-lg-12">
					</div><!--end .col -->
				</div><!--end .row -->
			</div><!--end .card-body -->
		</div><!--end .card -->
	</section>
@stop