<html lang="en">
<head>
	<title>@yield('title') | Portal K-UKMK</title>
	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Information,System,Society">
	<meta name="description" content="Society unit">
	<!-- BEGIN STYLESHEETS -->
	{{--  <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}
	<link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<script src="{{ asset('js/all.js') }}"></script>
	<style>
	.select-overflow{
		overflow-y:scroll"
	}
	</style>
</head>
<body>
	@include('incl/message')
	@yield('base-content')
	<!-- BEGIN JAVASCRIPT -->
	{{-- <script src="{{ asset('js/all.js') }}"></script> --}}
	@yield('javascript')
</body>
</html>