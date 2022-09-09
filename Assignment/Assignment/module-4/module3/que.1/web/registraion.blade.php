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
      <label for="inputusername">Uname</label>
      <input type="text" class="form-control" name="uname" placeholder="uname">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" placeholder="address">
  </div>
  <div class="form-group">
    <label for="inputphone">Phone No</label>
    <input type="text" class="form-control" name="phone" placeholder="Phone">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputgender">Gender</label><br>
      Male<input type="radio" class="form-control" name="gender" value="male">
      Female<input type="radio" class="form-control" name="gender" value="female">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">location</label>
      <select name="city" class="form-control">
        <option selected>choose...</option>
        <option>...</option>
      	

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">file</label>
      <input type="file" class="form-control" name="file">
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
  <button type="submit" name="save" value="submit" class="btn btn-primary">Sign in</button>


</form>


</div>
</body>
</html>