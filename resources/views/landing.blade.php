@extends('base')
@section('base-content')
	@include('incl.header')
	<div id="base">
		<div id="content">
			<section class="full-bleed">
				<div class="section-body style-default-dark force-padding text-shadow">
					<div style="background-image: url('/images/landscape.jpg')" class="img-backdrop"></div>
					<div class="overlay overlay-shade-top stick-top-left height-3"></div>
					<div class="row">
						<div class="col-md-3 col-xs-5">
							<img alt="" src="{{ asset('images/path618.png') }}" style="width: 140px" class="img-circle border-white border-xl img-responsive auto-width">
							<h3>Daniel Johnson<br><small>Consultant at CodeCovers</small></h3>
						</div>
						<div class="col-md-9 col-xs-7 text-right">
							<h2>Wellcome, Trias Bratayudhana<br><small>As Staff Tu</small></h2>

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
		@include('incl.offcanvas', array('some' => 'data'))
	</div>
@stop