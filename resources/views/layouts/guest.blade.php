<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="{{asset('images/fav.png')}}">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/red.css')}}" id="style_theme">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<!-- morris charts -->
	<link rel="stylesheet" href="{{asset('charts/css/morris.css')}}">

	<!-- jvectormap -->
	<link rel="stylesheet" href="{{asset('css/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/dataTables.bootstrap4.min.css')}}">
	<script src="{{asset('js/modernizr.min.js')}}"></script>
</head>
<body>
    <!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red theme-active" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div>
	<!-- /Color Changer -->
    <div class="wrapper">
        @include('userinterface.sidebar')
        <div id="content">
             @include('userinterface.header')
{{ $slot }}
 </div>
		<!-- /Page Content -->
</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
    <!-- Jquery Library-->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<!-- Popper Library-->
	<script src="{{asset('js/popper.min.js')}}"></script>
	<!-- Bootstrap Library-->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- morris charts -->
	<script src="{{asset('charts/js/raphael-min.js')}}"></script>
	<script src="{{asset('charts/js/morris.min.js')}}"></script>
	<script src="{{asset('js/custom-morris.js')}}"></script>


    <!-- Custom Script-->
	<script src="{{asset('js/custom.js')}}"></script>
	<script src="{{asset('js/custom-datatables.js')}}"></script>


     <!-- Datatable  -->
	<script src="{{asset('datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('datatable/dataTables.bootstrap4.min.js')}}"></script>
</body>
</html>
