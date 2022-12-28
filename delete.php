<?php
	require "config.php";
	    $emp_code=$_GET['id'];
		$sql="DELETE from `emp` WHERE `emp_code`='$emp_code'";
		$res=mysqli_query($con,$sql);
		header("location:2.php");
	

	?>
	