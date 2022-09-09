<?php 

if (isset($_SESSION['uname']))
{
  echo "<script>
  
    alert('Already Login');
    window.location='index';
  </script>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/{{url('web/css/bootstrap.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper{{('web/js/1.16.0/umd/popper.min.js')}}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>

</head>
<body>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
	
  <div class="form-row">


    <div class="form-group col-md-6">
      <label for="inputEmail4">User Name</label>
      <input type="text" class="form-control" name="uname" placeholder="Enter User name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="login" value="Login" class="btn btn-primary">Log In</button>


</form>


</div>
</body>
</html>