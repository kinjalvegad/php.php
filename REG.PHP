<?php 
	$con=mysqli_connect("localhost","root","","shop_details");
	if(isset($_POST['txtnm']))
	{
		$name=$_POST['txtnm'];
		$email=$_POST['txtemail'];
		$password=$_POST['pswd'];
		$mob=$_POST['mob'];
		$sql="insert into `reg`(`name`,`email`,`password`,`mob`)values('$name','$email','$password','$mob')";
		$res=mysqli_query($con,$sql);
		header("location:login3.php");
	}
?>	


<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
	<b>Register:</b></br></br>
	<form action="REG.php" method="post">
		<label><b>name:</b></label><br>
		<input type="text"name="txtnm"class="form-control"placeholder="enter name"required ></br>
		<label><b>email:</b></label>
		<input type="text"name="txtemail"class="form-control"placeholder="enter email"required ></br>
		<label><b>password:</b></label><br>
		<input type="password"name="txtpswd"class="form-control"placeholder="enter password"required ></br>
		<label><b>mobile:</b></label><br>
		<input type="mob"name="mob"class="form-control"placeholder="enter mobile"required ></br>
		<input type="submit"value="register"class="btn btn-primary w-30 ">
		
		</form>
	</div>
