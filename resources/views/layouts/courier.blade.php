<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X	-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Mypharma</title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
	<link type="text/css" rel="stylesheet" href=" {{ asset('assets/plugins/materialize/css/materialize.min.css') }}"/>

	@yield('styles')
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link href="{{ asset('css/main.css') }} " rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" href="{{ asset('dist/css/map-icons.css') }}">

	<style>
		.map-icon-label .map-icon {
			font-size: 24px;
			color: #FFFFFF;
			line-height: 48px;
			text-align: center;
			white-space: nowrap;
		}
	</style>

	<!--Scripts for the map to work.-->
	<script src="{{ asset('js/scripts.js') }}"></script>

	<script src="{{ asset('dist/js/gmaps.js') }}"></script>

	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>


	@yield('scripts')

</head>
<body>

	<div id="app">

		@include('partials.nav_courier') 


		<router-view></router-view>

	</div>

	<script src="{{ asset('build/js/app.js') }}"></script>

	<script src="{{ asset('dist/js/map-icons.js') }}"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZWTTkguiQpNFtckZZ5lpJLvVvMc0hsmI&libraries=places"></script> 
	@yield('js')
</body>
</html>
