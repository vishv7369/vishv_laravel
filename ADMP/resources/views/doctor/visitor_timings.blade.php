@extends('doctor.Layout.main_layout') 	
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
								
								@include('doctor/Layout/doctor-widget');
								
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
													<th>Day</th>
													<th>visitor Slot 1</th>
													<th>visitor Slot 2</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Monday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>

												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Tuesday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Wednesday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Thrusday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Friday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Saturday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>
												<tr>
													<td>
														<a href="{{url('/invoice-view')}}">Sunday</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-success"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
                                                    <td>
														<h2 class="table-avatar">
															<a href="{{url('/patient-profile')}}" class="badge bg-primary"> To Time show here <span>slots show here</span></a>
														</h2>
													</td>
													
												</tr>
                                                <div>
                                                <td class="text-center">
														<div class="table-action">
															<a href="{{url('/doctor-visitor_slots')}}" class="btn btn-sm bg-info-light">
																<i class="far fa-edit"></i> Edit Timings
															</a>
														</div>
												</td>
                                                </div>
												
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
