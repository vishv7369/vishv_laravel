@extends('patient.Layout.main_layout') 	
@section('main_container')
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">2245 matches found for : Dentist In Bangalore</h2>
						</div>
						<div class="col-md-4 col-12 d-md-block d-none">
							<div class="sort-by">
								<span class="sort-title">Sort by</span>
								<span class="sortby-fliter">
									<select class="select">
										<option>Select</option>
										<option class="sorting">Rating</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Latest</option>
										<option class="sorting">Free</option>
									</select>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<div class="cal-icon">
										<input type="text" class="form-control datetimepicker" placeholder="Select Date">
									</div>			
								</div>
								<div class="filter-widget">
									<h4>Gender</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Male Doctor
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Female Doctor
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Select Specialist</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Urology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Neurology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Dentist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Orthopedic
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>	
								</div>
							</div>
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="{{url('/doctor-profile')}}">
													<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-01.jpg')}}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="{{url('/doctor-profile')}}">Dr. Ruby Perrin</a></h4>
												<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
												<h5 class="doc-department"><img src="{{url('Frontend/assets/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">Dentist</h5>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(17)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
													<ul class="clinic-gallery">
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-01.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
																<img  src="{{url('Frontend/assets/img/features/feature-02.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-03.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-04.jpg')}}" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 98%</li>
													<li><i class="far fa-comment"></i> 17 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('/doctor-profile')}}">View Profile</a>
												<a class="apt-btn" href="{{url('/booking')}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="{{url('/doctor-profile')}}">
													<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-02.jpg')}}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="{{url('/doctor-profile')}}">Dr. Darren Elder</a></h4>
												<p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
												<h5 class="doc-department"><img src="{{url('Frontend/assets/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">Dentist</h5>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(35)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
													<ul class="clinic-gallery">
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-01.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
																<img  src="{{url('Frontend/assets/img/features/feature-02.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-03.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-04.jpg')}}" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 100%</li>
													<li><i class="far fa-comment"></i> 35 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $50 - $300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('/doctor-profile')}}">View Profile</a>
												<a class="apt-btn" href="{{url('/booking')}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="{{url('/doctor-profile')}}">
													<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-03.jpg')}}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="{{url('/doctor-profile')}}">Dr. Deborah Angel</a></h4>
												<p class="doc-speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
												<p class="doc-department"><img src="{{url('Frontend/assets/img/specialities/specialities-04.png')}}" class="img-fluid" alt="Speciality">Cardiology</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(27)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
													<ul class="clinic-gallery">
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-01.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
																<img  src="{{url('Frontend/assets/img/features/feature-02.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-03.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-04.jpg')}}" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 99%</li>
													<li><i class="far fa-comment"></i> 35 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $100 - $400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('/doctor-profile')}}">View Profile</a>
												<a class="apt-btn" href="{{url('/booking')}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="{{url('/doctor-profile')}}">
													<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-04.jpg')}}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="{{url('/doctor-profile')}}">Dr. Sofia Brient</a></h4>
												<p class="doc-speciality">MBBS, MS - General Surgery, MCh - Urology</p>
												<p class="doc-department"><img src="{{url('Frontend/assets/img/specialities/specialities-01.png')}}" class="img-fluid" alt="Speciality">Urology</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(4)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Louisiana, USA</p>
													<ul class="clinic-gallery">
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-01.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
																<img  src="{{url('Frontend/assets/img/features/feature-02.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-03.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-04.jpg')}}" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 97%</li>
													<li><i class="far fa-comment"></i> 4 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $150 - $250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('/doctor-profile')}}">View Profile</a>
												<a class="apt-btn" href="{{url('/booking')}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="{{url('/doctor-profile')}}">
													<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-06.jpg')}}" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="{{url('/doctor-profile')}}">Dr. Katharine Berthold</a></h4>
												<p class="doc-speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
												<p class="doc-department"><img src="{{url('Frontend/assets/img/specialities/specialities-03.png')}}" class="img-fluid" alt="Speciality">Orthopaedics</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(52)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Texas, USA</p>
													<ul class="clinic-gallery">
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-01.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-01.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-02.jpg')}}" data-fancybox="gallery">
																<img  src="{{url('Frontend/assets/img/features/feature-02.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-03.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-03.jpg')}}" alt="Feature">
															</a>
														</li>
														<li>
															<a href="{{url('Frontend/assets/img/features/feature-04.jpg')}}" data-fancybox="gallery">
																<img src="{{url('Frontend/assets/img/features/feature-04.jpg')}}" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 100%</li>
													<li><i class="far fa-comment"></i> 52 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $100 - $500 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{url('/doctor-profile')}}">View Profile</a>
												<a class="apt-btn" href="{{url('/booking')}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->

							<div class="load-more text-center">
								<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>	
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
		
		<!-- Select2 JS -->
		<script src="{{  url('Frontend/assets/plugins/select2/js/select2.min.js') }}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{  url('Frontend/assets/js/moment.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
		
		<!-- Fancybox JS -->
		<script src="{{  url('Frontend/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

</html>
