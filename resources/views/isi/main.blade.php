<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Travel</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('TourNest-master/assets/logo/favicon.png')}}"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/font-awesome.min.css') }}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/animate.css') }}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/hover-min.css') }}">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{ asset('TourNest-master/assets/css/datepicker.css') }}" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/owl.theme.default.min.css') }}"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/jquery-ui.min.css') }}" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/bootstrap.min.css') }}" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/bootsnav.css') }}"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/style.css') }}" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{ asset('TourNest-master/assets/css/responsive.css') }}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
<body>

    @yield('content')

    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script  src="{{ asset('TourNest-master/assets/js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('TourNest-master/assets/js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset('TourNest-master/assets/js/jquery.filterizr.min.js') }}"></script>

    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="{{ asset('TourNest-master/assets/js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('TourNest-master/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('TourNest-master/assets/js/waypoints.min.js') }}"></script>

    <!--owl.carousel.js-->
    <script  src="{{ asset('TourNest-master/assets/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('TourNest-master/assets/js/jquery.sticky.js') }}"></script>

    <!--datepicker.js-->
    <script  src="{{ asset('TourNest-master/assets/js/datepicker.js') }}"></script>

    <!--Custom JS-->
    <script src="{{ asset('TourNest-master/assets/js/custom.js') }}"></script>


</body>

</html>
