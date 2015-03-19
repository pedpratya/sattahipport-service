<!-- Stored in app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sattahip Port</title>
		
		<!-- Bootstrap -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">

		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	    <script src="{{ asset('js/angular.min.js') }}"></script>
	    <script src="{{ asset('js/angular-route.min.js') }}"></script>
	    <script src="{{ asset('js/angular-resource.min.js') }}"></script>
	    <script src="{{ asset('js/app.js') }}"></script>
	    <script src="{{ asset('js/controllers.js') }}"></script>
	    <script src="{{ asset('js/services.js') }}"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body> <!-- แบ่ง 3 ส่วน -->
		<div class="container"><!-- container -->
		<!-- ส่วนที่ 1 -->
		 @include('inc.topbar')
		 <!-- Bread crumb -->
	      <div id="breadcrumb">
	      	<div class="row container-breadcrumb">
				<div class="col-xs-4 col-sm-4 col-md-2 text-center">Admin System</div>
				<div class="col-xs-8 col-md-10">
					@yield('breadcrumbs')	
				</div>
			</div>
	      </div><!-- End Bread crumb -->

		<!-- ส่วนที่ 2 -->
	      <!-- sidebar -->
		  <div class="row container"><!-- container Content-->
		    @include('inc.sidebar')

		  <!-- ส่วนที่ 3 -->
		    <!-- container -->
		      @yield('content')
		  </div>
		</div>
    </body>
</html>