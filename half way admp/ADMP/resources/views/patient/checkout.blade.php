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
						<li class="breadcrumb-item active" aria-current="page">Checkout</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">Checkout</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
	<div class="container">

		<div class="row">
			<div class="col-md-7 col-lg-8">
				<div class="card">
					<div class="card-body">

						<!-- Checkout Form -->
						<form action="https://dreamguys.co.in/demo/doccure/{{url('/booking-success')}}">

							<!-- Personal Information -->
							<div class="info-widget">
								<h4 class="card-title">Personal Information</h4>
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group card-label">
											<label>First Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group card-label">
											<label>Last Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group card-label">
											<label>Email</label>
											<input class="form-control" type="email">
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group card-label">
											<label>Phone</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="exist-customer">Existing Customer? <a href="#">Click here to login</a></div>
							</div>
							<!-- /Personal Information -->


						</form>
						<!-- /Checkout Form -->

					</div>
				</div>

			</div>

			<div class="col-md-5 col-lg-4 theiaStickySidebar">

				<!-- Booking Summary -->
				<div class="card booking-card">
					<div class="card-header">
						<h4 class="card-title">Booking Summary</h4>
					</div>
					<div class="card-body">

						<!-- Booking Doctor Info -->
						<div class="booking-doc-info">
							<a href="{{url('/doctor-profile')}}" class="booking-doc-img">
								<img src="{{url('Frontend/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
							</a>
							<div class="booking-info">
								<h4><a href="{{url('/doctor-profile')}}">Dr. Darren Elder</a></h4>
								<div class="clinic-details">
									<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
								</div>
							</div>
						</div>
						<!-- Booking Doctor Info -->

						<div class="booking-summary">
							<div class="booking-item-wrap">
								<ul class="booking-date">
									<li>Date <span>16 Nov 2019</span></li>
									<li>Time <span>10:00 AM</span></li>
								</ul>
								<!-- Submit Section -->
								<div class="submit-section mt-4">
									<button type="submit" class="btn btn-primary submit-btn">Book Slot</button>
								</div>
								<!-- /Submit Section -->
							</div>
						</div>
					</div>
				</div>
				<!-- /Booking Summary -->

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

<!-- doccure/{{url('/checkout')}}  30 Nov 2019 04:12:16 GMT -->

</html>