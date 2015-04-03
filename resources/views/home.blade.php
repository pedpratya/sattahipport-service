<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <title>SATTAHIP E-PORT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
	<meta name="author" content="" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}" type="text/css" />		
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" type="text/css" />	
	<link rel="stylesheet" href="{!! asset('js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css') !!}" type="text/css" />		

	<link rel="stylesheet" href="{!! asset('css/App.css') !!}" type="text/css" />
        <link rel="stylesheet" href="{!! asset('css/Login.css') !!}" type="text/css" />

	<link rel="stylesheet" href="{!! asset('css/custom.css') !!}" type="text/css" />
</head>
<body>
    <div id="login-container">

            <div id="logo">
                    <a href="./login.html">
                            <img src="./img/logos/logo-login.png" alt="Logo" />
                    </a>
            </div>

            <div id="login">

                    <h3>SATTAHIP E-PORT</h3>

                    <h5>Please sign in to get access.</h5>

                     {!! Form::open(['route' => 'sign-in', 'id' => "login-form", 'class' => 'form']) !!}

                            <div class="form-group">
                                    <label for="login-username">Username</label>
                                    <input type="text" class="form-control" id="login-username" name="username" placeholder="Username">
                            </div>

                            <div class="form-group">
                                    <label for="login-password">Password</label>
                                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-block">Signin &nbsp; <i class="fa fa-play-circle"></i></button>

                            </div>
                    {!! Form::close() !!}
                    
                        @if ($error)
                            <div class="alert alert-danger">
                                <strong>!</strong> ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!<br><br>
                                    <ul>
                                            @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                            @endforeach
                                    </ul>
                            </div>
                        @endif

                    <a href="javascript:;" class="btn btn-default">Forgot Password?</a>

            </div> <!-- /#login -->


    </div> <!-- /#login-container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Log in -->
    <script src="{{ asset('js/App-tamplate.js') }}"></script>
    <script src="{{ asset('js/Login.js') }}"></script>
</body>

</html>