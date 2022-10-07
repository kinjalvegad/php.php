<?php
	
	$con=mysqli_connect("localhost","root","","shop_details");
	
	if(isset($_POST['txtemail']))
	{
		$email = $_POST['txtemail'];
		$password=$_POST['pswd'];
		
		$sql="SELECT * FROM `reg` WHERE email='$email' AND password='$password'";
		
		$res=mysqli_query($con,$sql);
		$count = mysqli_affected_rows($con);
		if($count == 1)
		{
			
			session_start();
			$_SESSION['reg']= $email ;
			header("location:home.php");
		}
		
		
	}
?>

<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
	<b>login:</b><br><br>
	<form action="login3.php" method="post">
		<label><b>mail:</b></label>
		<input type="text"name="txtemail"class="form-control"placeholder="enter email"required ></br>
		<label><b>password:</b></label>
		<input type="password"name="pswd"class="form-control"placeholder="enter password"required ></br>
		
		<input type="submit"value="login" name="btnlogin" class="btn btn-primary w-30 ">
		
	</form>
	</div>
