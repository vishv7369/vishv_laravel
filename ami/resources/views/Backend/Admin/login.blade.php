
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('Backend/Admin/assets/img/favicon.ico')}}">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{url('Backend/Admin/assets/js/html5shiv.min.js')}}')}}')}}')}}')}}')}}')}}')}}')}}')}}"></script>
		<script src="{{url('Backend/Admin/assets/js/respond.min.js')}}')}}')}}')}}')}}')}}')}}')}}')}}')}}"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
            <p>
                                @if(Session::has('fail'))
									<i class="alert alert-success">{{session('fail')}}</i>
								@endif
                            </p>
				<div class="account-box">
                    <form action="{{url('/userlogin')}}" method="post" enctype="multipart/form-data" class="form-signin">
                        @csrf
						<div class="account-logo">
                            <a href="index-2.html"><img src="{{url('Backend/Admin/assets/img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>username </label>
                            <input type="text" name="username" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit" value="Send" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="register">Register Now</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="{{url('Backend/Admin/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('Backend/Admin/assets/js/popper.min.js')}}"></script>
    <script src="{{url('Backend/Admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('Backend/Admin/assets/js/app.js')}}"></script>
</body>


<!-- login23:12-->
</html>