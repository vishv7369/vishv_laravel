<!DOCTYPE html>
<head>
<style>
body{
	margin: 0px;
	padding:0px;
}
.btn1{
  display: inline-block;
  padding: 9px 19px;
  font-size:12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color:white;
  background-color:black;
  border: none;
  border-radius: 9px;
  box-shadow: 0 7px #777;
  position: absolute;
  top: 10px;
  left :7px;
}
.btn2{
	
  display: inline-block;
  padding: 9px 19px;
  font-size:12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color:white;
  background-color:black;
  border: none;
  border-radius: 9px;
  box-shadow: 0 7px #777;
  position: absolute;
  top: 70px;
  left:5px;
}
li
{
	display:inline-block;
}
img{
width:100px;		
}






</style>
</head>
<body>

	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			
				<a class="navbar-braneadd" href="index">
                    <img src="images/hillside.png "alt=""/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
					
					</div>
				<?php 
				if(isset($_SESSION['uname']))
				{
				?>	
				 <div class="nav-link">
				   <p><span class="nav-link"></span></p>
                </div>
                  <li class=""><a class="nav-link" href="{{url('myaccount')}}">my account </a></li>
                  <li class="nav-item "><a class="nav-link" href="{{url('Wishlist')}}">Wishlist</a></li>
                  <li class="nav-item "><a class="nav-link" href="{{url('My Cart')}}">My Cart</a></li>
                  <li class="nav-item "><a class="nav-link" href="{{url('Checkout')}}">Checkout</a></li>
                  <li class="nav-item "><a class="nav-link" href="{{url('logout')}}">logout</a></li>
				  <?php
				  }
				  else
				  { 
				  ?>
				  <li><a href="{{url('login')}}" ></a></li>
				  <a href= "log"><button class="btn1">login</button>
		<a href= "rag"><button class="btn2">signup</button>
				  <?php
				  }
				  ?>
						<li class="nav-item "><a class="nav-link" href="{{url('hotel')}}">hotel</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('special-event')}}">special-event</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{url('offer')}}" id="dropdown-a" data-toggle="dropdown">offer</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('weeding-event')}}">weeding-event</a>
								<a class="dropdown-item" href="{{url('bithday-celebration')}}">bithday-celebration</a>
								<a class="dropdown-item" href="{{url('meeting-event')}}">meeting-event</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{url('room')}}" id="dropdown-a" data-toggle="dropdown">room</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="room">room</a>
								<a class="dropdown-item" href="room-categories">room-categories</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{url('Contact')}}">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	</body>
	</html>