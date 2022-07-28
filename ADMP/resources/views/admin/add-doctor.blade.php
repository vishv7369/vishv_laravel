@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Add Doctor</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Horizontal Form</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								
								<div class="card-body">
									<h4 class="card-title">Personal Information</h4><br>
									<form action="#">
										<div class="row">
											<div class="col-xl-6">
											    <div class="row">
													<label class="col-lg-3 col-form-label">Name</label>
													<div class="col-lg-9">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="First Name" class="form-control" name="first_name">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" placeholder="Last Name" class="form-control" name="last_name">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">DOB</label>
													<div class="col-lg-9">
														<input type="date" class="form-control" name="dob">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Gender</label>
													<div class="col-lg-9">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
															<label class="form-check-label" for="gender_male">
															Male
															</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
															<label class="form-check-label" for="gender_female">
															Female
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Specialist ID</label>
													<div class="col-lg-9">
														<select class="select">
															<option>Select</option>
															<option value="1">A+</option>
															<option value="2">O+</option>
															<option value="3">B+</option>
															<option value="4">AB+</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Liacence No</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="liacence_no">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Experience</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="experience">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Dr. Mobile</label>
													<div class="col-lg-9">
														<input type="tel" class="form-control" name="dr_mobile">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">About</label>
													<div class="col-lg-9">
														<textarea name="about" rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Short Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="short_tittle">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Email</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="email">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Password</label>
													<div class="col-lg-9">
														<input type="password" class="form-control" name="password">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Profile Img</label>
													<div class="col-lg-9">
														<input type="file" class="form-control" name="profile_img">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Education</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="education">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Visiting Card</label>
													<div class="col-lg-9">
														<input type="file" class="form-control" name="visit_card">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Office no</label>
													<div class="col-lg-9">
														<input type="tel" class="form-control" name="office_no">
													</div>
												</div>
											</div>
											
										</div>

										<h4 class="card-title">Hospital Details</h4><br>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hospital Name</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hospital_name">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hospital timing</label>
													<div class="col-lg-9">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group ">
																	To:
																	<input type="time" name="hospital_time" class="form-control">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	From:
																	<input type="time" name="hospital_time" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Days</label>
													<div class="col-lg-9">
														Monday <input type="checkbox" name="">&nbsp;&nbsp;
														Tuesday <input type="checkbox" name="">&nbsp;&nbsp;&nbsp;&nbsp;
														Wednesday <input type="checkbox" name="">&nbsp;&nbsp;
														Thursday <input type="checkbox" name="">
														Friday <input type="checkbox" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														Saturday <input type="checkbox" name="">&nbsp;&nbsp;&nbsp;&nbsp;
														Sunday <input type="checkbox" name=""> 
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Notification</label>
													<div class="col-lg-9">
														<textarea name="" class="form-control" name="notification"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hospital Img</label>
													<div class="col-lg-9">
														<input type="file" class="form-control" name="hospital_img">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Consulting </label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="consulting_fees">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Followup Fees</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="followup_fees">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State </label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City </label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<textarea name="address" rows="4" class="form-control"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="area">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Postal Code</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="pincode">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Google Map URL</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="google_map">
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary" name="submit" value="send
											">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>



					
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{url('Backend/assets/js/select2.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-form-horizontal')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:55 GMT -->
</html>
@endsection