<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->
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
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                <p>
                    @if(Session('success'))
						<i class="alert alert-success">{{session('success')}}</i>
					@endif
                </p>
                    <form action="{{url('/register')}}" method="post" enctype="multipart/form-data" class="form-signin">
                        @csrf
						<div class="account-logo">
                            <a href="index-2.html"><img src="{{url('Backend/Admin/assets/img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" name="submit" value="Send" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.html">Login</a>
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


<!-- register24:03-->
</html>