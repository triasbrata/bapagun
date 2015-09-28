@extends('landing')
@section('content')
	<div class="row">
		<div class="col-md-3 col-xs-6">
			<div class="card">
				<div class="card-body no-padding">
					<div class="col-xs-8 col-md-9">
							<b class="text-xl">376</b>
							<div class="opacity-60">Employers</div>
					</div>
					<div class="col-xs-4 col-md-3 material-color red text-center">	
						<i class="md md-account-box xl-icon"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="card">
				<div class="card-body no-padding">
					<div class="col-xs-8 col-md-9">
							<b class="text-xl">376</b>
							<div class="opacity-60">Students</div>
					</div>
					<div class="col-xs-4 col-md-3 material-color blue text-center">	
						<i class="md md-accessibility xl-icon"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="card">
				<div class="card-body no-padding">
					<div class="col-xs-8 col-md-9">
							<b class="text-xl">376</b>
							<div class="opacity-60">Class</div>
					</div>
					<div class="col-xs-4 col-md-3 material-color pink text-center">	
						<i class="md md-view-module xl-icon"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="card">
				<div class="card-body no-padding">
					<div class="col-xs-8 col-md-9">
							<b class="text-xl">376</b>
							<div class="opacity-60">discipline</div>
					</div>
					<div class="col-xs-4 col-md-3 material-color teal text-center">	
						<i class="md md-book xl-icon"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card card-underline">
				<div class="card-head">
					<header>
						Graph
					</header>
				</div>
				<div class="card-body">
					<div id="GraphInOneMounth" data-colors="#9C27B0,#0aa89e"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1 class="text-primary">
				Quick Access
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-head">
					<header>
						Quick Access
					</header>
				</div>
				<div class="card-body">
					
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-head">
					<header>
						Quick Access
					</header>
				</div>
				<div class="card-body">
					
				</div>
			</div>
		</div>
	</div>
	
@stop
@section('javascript')
	<script type="text/javascript" charset="utf-8" async defer>
	$(document).ready(function  () {
		Morris.Bar({
			element: 'GraphInOneMounth',
			data: [
				{x: '2011 Q1', y: 3, z: 2, a: 3},
				{x: '2011 Q2', y: 2, z: null, a: 1},
				{x: '2011 Q3', y: 0, z: 2, a: 4},
				{x: '2011 Q4', y: 2, z: 4, a: 3}
			],
			xkey: 'x',
			ykeys: ['y', 'z', 'a'],
			labels: ['Y', 'Z', 'A'],
			barColors: $('#GraphInOneMounth').data('colors').split(',')
		});
	})
	</script>
@stop