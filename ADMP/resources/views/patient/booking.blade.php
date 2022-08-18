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
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
							<div class="card">
								<div class="card-body">
									<div class="booking-doc-info">
										<a href="{{url('/doctor-profile')}}" class="booking-doc-img">
											<img src="{{asset('upload/doctor/' . $data->profile_img)}}" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="{{url('/doctor-profile')}}">Dr. <?php echo $data->first_name?> <?php echo $data->last_name?></a></h4>
											<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $data->city?>, <?php echo $data->state?></p>
										</div>
									</div>
									
								</div>
							</div>
							
							<!-- Schedule Widget -->
							<div class="card booking-schedule schedule-widget">
							<form action="{{url('/booking/'.$data->id)}}" method="post" enctype="multipart/form-data">
							<div class="input-group mb-3 p-3">
							   	
								@csrf
								<input type="date" value="{{$value}}" class="form-control" name="searchbydate" placeholder="Search" min="<?php echo (new DateTime())->format('Y-m-d'); ?>">
								<button class="btn btn-success" name="submit" value="send" type="submit">Search ...</button> 
								</form>
							</div>
							@foreach($slotbydate as $d)
							<div class="doc-slot-list">
								{{$d->slot_timing}} 
								
							</div>
							@endforeach

							
								<!-- Schedule Header-->
								<div class="schedule-header">
															
															<!-- Schedule Nav -->
															<div class="schedule-nav">
																<ul class="nav nav-tabs nav-justified">
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#slot_sunday">Sunday</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link active" data-toggle="tab" href="#slot_monday">Monday</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#slot_tuesday">Tuesday</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#slot_wednesday">Wednesday</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#slot_thursday">Thursday</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#slot_friday">Friday</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#slot_saturday">Saturday</a>
																	</li>
																</ul>
															</div>
															<!-- /Schedule Nav -->
															
														</div>
														<!-- /Schedule Header -->
														
														<!-- Schedule Content -->
														<div class="tab-content schedule-cont">
															
															<!-- Sunday Slot -->
															
															<div id="slot_sunday" class="tab-pane fade">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																</h4>
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningSunday->isEmpty())
																		@foreach($morningSunday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$afternoonSunday->isEmpty())
																		@foreach($afternoonSunday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$eveningSunday->isEmpty())
																		@foreach($eveningSunday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
															</div>
															<!-- /Sunday Slot -->

															<!-- Monday Slot -->
															<div id="slot_monday" class="tab-pane fade show active">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
																</h4>
																
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningMonday->isEmpty())
																		@foreach($morningMonday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:6px">
																	@if(!$afternoonMonday->isEmpty())
																		@foreach($afternoonMonday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:20px">
																	@if(!$eveningMonday->isEmpty())
																		@foreach($eveningMonday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
																
															</div>
															<!-- /Monday Slot -->

															<!-- Tuesday Slot -->
															<div id="slot_tuesday" class="tab-pane fade">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																</h4>
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningTuesday->isEmpty())
																		@foreach($morningTuesday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$afternoonTuesday->isEmpty())
																		@foreach($afternoonTuesday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$eveningTuesday->isEmpty())
																		@foreach($eveningTuesday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
															</div>
															<!-- /Tuesday Slot -->

															<!-- Wednesday Slot -->
															<div id="slot_wednesday" class="tab-pane fade">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																</h4>
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningWednesday->isEmpty())
																		@foreach($morningWednesday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$afternoonWednesday->isEmpty())
																		@foreach($afternoonWednesday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$eveningWednesday->isEmpty())
																		@foreach($eveningWednesday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
															</div>
															<!-- /Wednesday Slot -->

															<!-- Thursday Slot -->
															<div id="slot_thursday" class="tab-pane fade">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																</h4>
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningThursday->isEmpty())
																		@foreach($morningThursday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$afternoonThursday->isEmpty())
																		@foreach($afternoonThursday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$eveningThursday->isEmpty())
																		@foreach($eveningThursday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
															</div>
															<!-- /Thursday Slot -->

															<!-- Friday Slot -->
															<div id="slot_friday" class="tab-pane fade">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																</h4>
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningFriday->isEmpty())
																		@foreach($morningFriday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$afternoonFriday->isEmpty())
																		@foreach($afternoonFriday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$eveningFriday->isEmpty())
																		@foreach($eveningFriday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
															</div>
															<!-- /Friday Slot -->

															<!-- Saturday Slot -->
															<div id="slot_saturday" class="tab-pane fade">
																<h4 class="card-title d-flex justify-content-between">
																	<span>Time Slots</span> 
																	<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
																</h4>
																<!-- Slot List -->
																<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Morning :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$morningSaturday->isEmpty())
																		@foreach($morningSaturday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Afternoon :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$afternoonSaturday->isEmpty())
																		@foreach($afternoonSaturday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
															<div class="row m-2">
																<div class="form-group" style="margin-top:8px">
																	Evening :
																</div>
																<div class="col-xl-10 doc-times" style="margin-left:18px">
																	@if(!$eveningSaturday->isEmpty())
																		@foreach($eveningSaturday as $d)
																		<div class="doc-slot-list">
																			{{$d->slot_timing}} 
																			
																		</div>
																		@endforeach
																	@else
																		<p class="text-danger mt-2">No Slots Available</p>
																	@endif
																	
																</div>
															</div>
																<!-- /Slot List -->
															</div>
															<!-- /Saturday Slot -->

														</div>
														<!-- /Schedule Content -->
								
							</div>
							<!-- /Schedule Widget -->
							
							<!-- Submit Section -->
							<div class="submit-section proceed-btn text-right">
								<a href="{{url('/checkout')}}" class="btn btn-primary submit-btn">Proceed to Pay</a>
							</div>
							<!-- /Submit Section -->
							
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
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

</html>
