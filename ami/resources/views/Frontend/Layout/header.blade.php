<!DOCTYPE html>
<html lang="en">

<!-- Acto/service-3  13 Nov 2019 13:05:19 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Ami Enterprise</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Stylesheets -->
<link href="{{url('Frontend/css/style.css')}}" rel="stylesheet">
<link href="{{url('Frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="icon" href="{{url('Frontend/images/logo/LOGO.png')}}" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    


    <!-- search-box-layout -->
    <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Search</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="get" action="#">
                            <div class="form-row">
                                <input type="search" placeholder="Type to search..." value="" name="s" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->


    <!-- main header -->
    <header class="main-header style-four style-six style-nine">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="inner-container clearfix">
                    <ul class="header-info pull-left">
                    <div class="top-bar">
                        <div class="logo">
                            <a href="index">
                                <h1>Ami<span>Enterprise</span></h1>
                            </a>
                        </div>
                    </div>
                    </ul>
                    <ul class="header-nav pull-right">
                        <li>Time : Monday-Friday 09am-6pm</li>
                        <li class="phone"><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:(+91)9313403430">(+91) 9313403430</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- header-top end -->

      
        <!-- header-bottom -->
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="outer-container">
                    <div class="nav-outer clearfix">
                        <div class="menu-area pull-left clearfix">
                            
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix" style="margin-left:185px">
                                    <ul class="navigation clearfix">
                                        <li><a href="index">Home</a></li>
                                        <li><a href="shop">shop</a></li>
                                        <li><a href="about">About</a></li>
                                        <li><a href="contact">Contact</a></li>
                                        
										@if(Session('customer_id'))
										   <li><a href="flogout">Logout</a></li>
										 									   
                                        @else											 
                                           <li><a href="flogin">Login</a></li>
										@endif
										
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="info-box pull-right clearfix" style="margin-right:100px">
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-indiamart-in"></i></a></li>
                            </ul>
                            
							@if(Session('customer_id'))
										   
										   <div class="user" ><a href="myaccount"><i class="fa fa-user"></i></a>								   
                                        @else											 
                                         
										@endif
                            
							

							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom end -->

        
    </header>
    <!-- main-header end -->