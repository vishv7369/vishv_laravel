@extends('patient.Layout.main_layout') 	
@section('main_container')
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{url('Frontend/assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Patient Register <a href="{{url('/doctor-register')}}">Are you a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="{{url('/register')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" value="{{old('name')}}" name="name">
												<label class="focus-label">Name</label>
												@if ($errors->has('name'))
            										<span class="text-danger">{{ $errors->first('name') }}</span>
       											@endif
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" value="{{old('email')}}" name="email">
												<label class="focus-label">Email</label>
												@if ($errors->has('email'))
            										<span class="text-danger">{{ $errors->first('email') }}</span>
       											@endif
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" value="{{old('password')}}" name="password">
												<label class="focus-label">Create Password</label>
												@if ($errors->has('password'))
            										<span class="text-danger">{{ $errors->first('password') }}</span>
       											@endif
											</div>
											<div class="text-right">
												<a class="forgot-link" href="{{url('/login')}}">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit" value="send">Signup</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			@endsection	
		   
		</div>
		<!-- /Main Wrapper -->
	 
	  
		<!-- jQuery -->
		<script src="{{url('Frontend/assets/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{url('Frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{url('Frontend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{url('Frontend/assets/js/script.js')}}"></script>
		
		
	</body>

<!-- doccure/{{url('/login')}}  30 Nov 2019 04:12:20 GMT -->
</html>
