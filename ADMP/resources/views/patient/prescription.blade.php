@extends('patient.Layout.main_layout') 	
@section('main_container')
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoices</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Invoices</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="{{url('/patient-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{url('/favourites')}}">
													<i class="fas fa-bookmark"></i>
													<span>My Doctor</span>
												</a>
											</li>
											<li>
												<a href="{{url('/chat')}}">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="{{url('/profile-settings')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="{{url('/change-password')}}">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="{{url('/index')}}">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card card-table">
								<div class="card-body">
								
									<!-- Invoice Table -->
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Invoice No</th>
													<th>Patient</th>
													<th>Amount</th>
													<th>Paid On</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0010</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Richard Wilson <span>#PT0016</span></a>
														</h2>
													</td>
													<td>$450</td>
													<td>14 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0009</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient1.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Charlene Reed <span>#PT0001</span></a>
														</h2>
													</td>
													<td>$200</td>
													<td>13 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0008</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient2.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Travis Trimble <span>#PT0002</span></a>
														</h2>
													</td>
													<td>$100</td>
													<td>12 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0007</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient3.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Carl Kelly <span>#PT0003</span></a>
														</h2>
													</td>
													<td>$350</td>
													<td>11 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0006</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient4.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Michelle Fairfax <span>#PT0004</span></a>
														</h2>
													</td>
													<td>$275</td>
													<td>10 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0005</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient5.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Gina Moore <span>#PT0005</span></a>
														</h2>
													</td>
													<td>$600</td>
													<td>9 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0004</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient6.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Elsie Gilley <span>#PT0006</span></a>
														</h2>
													</td>
													<td>$50</td>
													<td>8 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0003</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient7.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Joan Gardner <span>#PT0007</span></a>
														</h2>
													</td>
													<td>$400</td>
													<td>7 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0002</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient8.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Daniel Griffing <span>#PT0008</span></a>
														</h2>
													</td>
													<td>$550</td>
													<td>6 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">#INV-0001</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{url('Frontend/assets/img/patients/patient9.jpg')}}" alt="User Image">
															</a>
															<a href="{{url('/patient-profile')}}">Walter Roberson <span>#PT0009</span></a>
														</h2>
													</td>
													<td>$100</td>
													<td>5 Nov 2019</td>
													<td class="text-right">
														<div class="table-action">
															<a href="{{url('/invoice-view')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> View
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																<i class="fas fa-print"></i> Print
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /Invoice Table -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			
			@endsection	
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{  url('Frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/invoices')}}  30 Nov 2019 04:12:14 GMT -->
</html>
