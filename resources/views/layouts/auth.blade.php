<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.codnauts.com/themes/jetpack/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jan 2018 02:44:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Mypharma</title>
	<meta content="IE=edge" http-equiv="x-ua-compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">


	<!-- Icons -->
	<link href="{{ asset('dist/css/ionicons.min.css') }}" media="all" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="{{ asset('dist/css/courier.css') }}">

	<link href=" {{ asset('css/fonts.css') }} " rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="{{ asset('assets/img/favicons/android-chrome-192x192.png') }} ">



	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-74264063-1', 'auto');
		ga('send', 'pageview');
	</script>

	
</head>

<body>
	
	<div id="main">

		@yield('content')
		

	</div>


	<script src="{{ asset('dist/js/courier.js') }}"></script>

	<script src="{{ asset('dist/js/auth_functions.js') }}"></script>


	@yield('js')



</body>

<!-- Mirrored from www.codnauts.com/themes/jetpack/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jan 2018 02:44:06 GMT -->

</html>