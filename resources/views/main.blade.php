@extends('base')
@section('base-content')
	@include('incl.header')

	<!-- BEGIN BASE-->
	<div id="base">

		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">
			<section>
				<div class="section-body">
					@yield('content')
				</div>

			</section>	
		</div><!--end #content-->
		<!-- END CONTENT -->
		
		@include('incl.menu', array('some' => 'data'))

		<!-- BEGIN OFFCANVAS RIGHT -->
		{{-- @include('incl.offcanvas', array('some' => 'data')) --}}
		<!-- END OFFCANVAS RIGHT -->

	</div><!--end #base-->
@stop