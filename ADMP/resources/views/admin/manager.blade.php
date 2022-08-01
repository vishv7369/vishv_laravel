@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Health Manager</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Manager</a></li>
									<li class="breadcrumb-item active">Manage Manager</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Manager ID</th>
													<th>Company ID</th>
													<th>Profile Img</th>
													<th>Manager Name</th>
													<th>Email</th>
													<th>Visiting Card</th>
													<th class="text-right">Actions</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>

													<td>2</td>

													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="User Image"></a>
														</h2>
													</td>

													<td>Ruby Perrin</td>
													
													<td>ruby@gmail.com</td>
													
													<td>
														<h2 class="table-avatar">
															<a href="{{url('/admin-profile')}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/Backend/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image"></a>
														</h2>
													</td>

													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light"  href="">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a  href="" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
												    </td>
													
													
												</tr>	
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{url('Backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('Backend/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-doctor-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
@endsection