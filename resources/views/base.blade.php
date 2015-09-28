<html lang="en">
<head>
	<title>@yield('title', '{SI} Academy')</title>
	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Information,System,School">
	<meta name="description" content="School Information System">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<!-- BEGIN STYLESHEETS -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<script src="{{ asset('js/all.js') }}"></script>
	
</head>
<body class="menubar-hoverable header-fixed ">
	@include('incl/message')
	@yield('base-content')
	<!-- BEGIN JAVASCRIPT -->
	{{-- <script src="{{ asset('js/all.js') }}"></script> --}}
	@yield('javascript')
</body>
</html>