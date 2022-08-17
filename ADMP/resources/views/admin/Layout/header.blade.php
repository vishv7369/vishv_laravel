<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('/Backend/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/feathericon.min.css')}}">
		
		<link rel="stylesheet" href="{{url('Backend/assets/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/style.css')}}">
		
		
<!--
1 Include jquery File  
-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!--
2 Include these two files 
-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

<!--
3 Call this single function 
-->
<script>
	$(document).ready(function() 
	{
		$('#table').DataTable();
	} );
</script>



		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{url('Backend/assets/css/select2.min.css')}}">
		
		
		<!--[if lt IE 9]>
			<script src="{{url('Backend/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{url('Backend/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{url('/admin')}}" class="logo">
						<img src="{{url('/Backend/assets/img/logo.png')}}" alt="Logo">
					</a>
					<a href="{{url('/admin')}}" class="logo logo-small">
						<img src="{{url('/Backend/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('/Backend/assets/img/doctors/doctor-thumb-01.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('/Backend/assets/img/patients/patient1.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('/Backend/assets/img/patients/patient2.jpg')}}">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('/Backend/assets/img/patients/patient3.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="{{url('/Backend/assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{url('/Backend/assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="{{url('/admin-profile')}}">My Profile</a>
							<a class="dropdown-item" href="{{url('/admin-settings')}}">Settings</a>
							<a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{url('/admin')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-users"></i> <span> Specialities </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/admin-add-specialities')}}"><i class="fe fe-user"></i> Add Specialities </a></li>
									<li><a href="{{url('/admin-specialities')}}"><i class="fe fe-user"></i> Manage Specialities </a></li>
								</ul>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-user"></i> <span>Patient</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
											<a href="{{url('/admin-patient')}}"><i class="fe fe-user"></i> <span>Manage Patients</span></a>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i class="fe fe-calendar"></i> <span>Appointment</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{url('/admin-patient-appointment')}}"><span>Approve</span></a></li>
											
											<li><a href="{{url('/admin-patient-cancel-appointment')}}"> <span>Cancel</span></a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-user"></i> <span>Doctor</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
											<a href="{{url('/admin-doctor')}}"><i class="fe fe-user"></i> <span>Manage Doctors</span></a>
									</li>
									<li>
											<a href="{{url('/admin-add-doctor')}}"><i class="fe fe-user-plus"></i> <span>Add Doctors</span></a>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i class="fe fe-calendar"></i> <span>Appointment</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{url('/admin-doctor-appointment')}}"><span>Approve</span></a></li>
											
											<li><a href="{{url('/admin-doctor-cancel-appointment')}}"> <span>Cancel</span></a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-user"></i> <span>Company</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
											<a href="{{url('/admin-company')}}"><i class="fe fe-user"></i> <span>Manage Company</span></a>
									</li>
									<li>
											<a href="{{url('/admin-add-company')}}"><i class="fe fe-user-plus"></i> <span>Add Company</span></a>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i class="fe fe-calendar"></i> <span>Appointment</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{url('/admin-company-appointment')}}"><span>Approve</span></a></li>
											
											<li><a href="{{url('/admin-company-cancel-appointment')}}"> <span>Cancel</span></a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-user"></i> <span>Health Manager</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
											<a href="{{url('/admin-manager')}}"><i class="fe fe-user"></i> <span>Manage Manager</span></a>
									</li>
									<li>
											<a href="{{url('/admin-add-manager')}}"><i class="fe fe-user-plus"></i> <span>Add Manager</span></a>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i class="fe fe-calendar"></i> <span>Appointment</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{url('/admin-manager-appointment')}}"><span>Approve</span></a></li>
											
											<li><a href="{{url('/admin-manager-cancel-appointment')}}"> <span>Cancel</span></a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-user"></i> <span>MR</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
											<a href="{{url('/admin-mr')}}"><i class="fe fe-user"></i> <span>Manage MR</span></a>
									</li>
									<li>
											<a href="{{url('/admin-add-mr')}}"><i class="fe fe-user-plus"></i> <span>Add MR</span></a>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i class="fe fe-calendar"></i> <span>Appointment</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{url('/admin-mr-appointment')}}"><span>Approve</span></a></li>
											
											<li><a href="{{url('/admin-mr-cancel-appointment')}}"> <span>Cancel</span></a></li>
										</ul>
									</li>
									
								</ul>
							</li>
									
							<li> 
								<a href="{{url('/admin-stockiest')}}"><i class="fe fe-activity"></i> <span>Stockiest</span></a>
							</li>
							<li> 
								<a href="{{url('/admin-product')}}"><i class="fe fe-cart"></i> <span>Product</span></a>
							</li>
							
							<li> 
								<a href="{{url('/admin-settings')}}"><i class="fe fe-vector"></i> <span>Settings</span></a>
							</li>
							<li> 
								<a href="{{url('/admin-reviews')}}"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
							</li>
							<li> 
								<a href="{{url('/admin-transactions-list')}}"><i class="fe fe-activity"></i> <span>Transactions</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/admin-invoice-report')}}">Invoice Reports</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="{{url('/admin-profile')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/admin-login')}}"> Login </a></li>
									
									<li><a href="{{url('/admin-forgot-password')}}"> Forgot Password </a></li>
									<li><a href="{{url('/admin-lock-screen')}}"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/admin-error-404')}}">404 Error </a></li>
									<li><a href="{{url('/admin-error-500')}}">500 Error </a></li>
								</ul>
							</li>
							<li> 
								<a href="{{url('/admin-blank-page')}}"><i class="fe fe-file"></i> <span>Blank Page</span></a>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="{{url('/admin-components')}}"><i class="fe fe-vector"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/admin-form-basic-inputs')}}">Basic Inputs </a></li>
									<li><a href="{{url('/admin-form-input-groups')}}">Input Groups </a></li>
									<li><a href="{{url('/admin-form-horizontal')}}">Horizontal Form </a></li>
									<li><a href="{{url('/admin-form-vertical')}}"> Vertical Form </a></li>
									<li><a href="{{url('/admin-form-mask')}}"> Form Mask </a></li>
									<li><a href="{{url('/admin-form-validation')}}"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/admin-tables-basic')}}">Basic Tables </a></li>
									<li><a href="{{url('/admin-data-tables')}}">Data Table </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->