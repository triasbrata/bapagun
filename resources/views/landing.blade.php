@extends('base')
@section('base-content')
	@include('incl.header')
	<div id="base">
		<div id="content">
			<section class="full-bleed">
				<div class="section-body style-default-dark force-padding text-shadow">
					<div style="background-image: url('/imgs/bg-login.jpg')" class="img-backdrop"></div>
					<div class="overlay overlay-shade-top stick-top-left height-3"></div>
					<div class="row">
						<div class="col-md-12 text-right">
							<h2>Wellcome, Trias Bratayudhana<br><small>triasbrata@gmail.com</small></h2>

						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="section-body">
					@yield('content')
				</div>
			</section>
		</div>
		@include('incl.menu', array('some' => 'data'))
	</div>
@stop