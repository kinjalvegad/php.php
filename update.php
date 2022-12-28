<?php
    require "config.php";
	if(isset($_GET['emp_code']))
	{	
		$id=$_GET['emp_code'];
		$sql = "SELECT * FROM `emp` WHERE `emp_code`='$id'";
		$res = mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($res);
	}
?>	
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<body>
<form class="form-control" action="" method="post">

<input type="number" class="form-control" name="emp_code" placeholder="enter employee code" value="<?php echo $row['emp_code']; ?>"><br>
<input type="text" class="form-control" name="f_name" placeholder="enter first name" value="<?php echo $row['f_name']; ?>" required><br>
<input type="text" class="form-control" name="l_name" placeholder="enter last name" value="<?php echo $row['l_name']; ?>" required><br>
<input type="text" class="form-control" name="email" placeholder="enter email" value="<?php echo $row['email']; ?>" required><br>
<input type="number" class="form-control" name="contact" placeholder="enter contact" value="<?php echo $row['contact']; ?>" required><br>
<input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $row['address']; ?>" required><br>
<input type="text" class="form-control" name="dob" placeholder="enter date of birth" value="<?php echo $row['dob']; ?>" required><br>
<input type="text" class="form-control" name="city" placeholder="enter city" value="<?php echo $row['city']; ?>" required><br>
<input type="text" class="form-control" name="state" placeholder="enter state" value="<?php echo $row['state']; ?>" required><br>
<input type="text" class="form-control" name="country" placeholder="enter country" value="<?php echo $row['country']; ?>" required><br>
<div class="container mt-2">
<input type="submit" class="btn btn-primary form-control mt-3" value="submit">

</div>


</form>
</body>
</html>

<?php
	
	if(isset($_POST['emp_code']))
	{
		$ec=$_POST['emp_code'];
		$fm=$_POST['f_name'];
		$ln=$_POST['l_name'];
		$email=$_POST['email'];
		$cont=$_POST['contact'];
		$add=$_POST['address'];
		$dob=$_POST['dob'];
		$city=$_POST['city'];
		$sta=$_POST['state'];
		$coun=$_POST['country'];	
		$sql="UPDATE `emp` SET `emp_code`='$ec',`f_name`='$fm',`l_name`='$ln',`email`='$email',`contact`='$cont',`address`='$add',`dob`='$dob',`city`='$city',`state`='$sta',`country`='$coun' WHERE  `emp_code`='$ec'";
		mysqli_query($con,$sql);
		header("location:2.php");
	}
?>