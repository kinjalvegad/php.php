<?php
  require "config.php";
	  if(isset($_POST['submit']))
	  {
		  $emp_code=$_POST['emp_code'];
		  $f_name=$_POST['f_name'];
		  $l_name=$_POST['l_name'];
		  $email=$_POST['email'];
		  $contact=$_POST['contact'];
		  $address=$_POST['address'];
		  $dob=$_POST['dob'];
		  $city=$_POST['city'];
		  $state=$_POST['state'];
		  $country=$_POST['country'];
		  $sql="INSERT INTO `emp`(`emp_code`, `f_name`, `l_name`, `email`, `contact`, `address`, `dob`, `city`, `state`, `country`) VALUES ('$emp_code','$f_name','$l_name','$email','$contact','$address','$dob','$city','$state','$country')";
		  $res=mysqli_query($con,$sql);
		  header("location:2.php");
	  }
?>

<html>
	<head>
	<title>1.php</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
	</head>
	<body>
	<form action ="1	.php" method="POST">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
          
			<div class="form-outline mb-4">
				<label class="form-label" for="form3Example1q">emp code</label><br>
				<input type="text" name="emp_code"class="form-control" />
              </div>

              <div class="form-outline mb-4">
									  <label class="form-label" for="form3Example1q"> first Name</label><br>
									  <input type="text" name="f_name" class="form-control" />
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">last name</label><br>
					<input type="text" class="form-control"name="l_name"  />
                  </div>

                </div>
                
              </div><div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">email</label><br>
					<input type="text" class="form-control"name="email"  />
                  </div>

                </div>
                
              </div><div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">contact</label><br>
					<input type="text" class="form-control"name="contact" />
                  </div>

                </div>
                
              </div><div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">address</label><br>
					<input type="text" class="form-control"name="address"  />
                  </div>

                </div>
                
              </div><div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">date of birth</label><br>
					<input type="text" class="form-control"name="dob"  />
                  </div>

                </div>
                
              </div>
			  <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">city</label><br>
					<input type="text" class="form-control"name="city"  />
                  </div>

                </div>
                
              </div>
			  <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">state</label><br>
					<input type="text" class="form-control"name="state"  />
                  </div>

                </div>
                
              </div><div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <label for="exampleDatepicker1" class="form-label">country</label><br>
					<input type="text" class="form-control"name="country" />
                  </div>

                </div>
                
              </div>

             

              <button type ="submit" name="submit"class="btn btn-success btn-lg mb-1 w-100">Submit</button>
              <button type="clear" name="clear"class="btn btn-success btn-lg mb-1 w-100">clear</button>

           
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
