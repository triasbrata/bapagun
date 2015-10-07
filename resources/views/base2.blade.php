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
	<link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<script src="{{ asset('js/all.js') }}"></script>
	
</head>
<body>
	@include('incl/message')
	@yield('base-content')
	<!-- BEGIN JAVASCRIPT -->
	{{-- <script src="{{ asset('js/all.js') }}"></script> --}}
	@yield('javascript')
</body>
</html>