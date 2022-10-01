<?php
	$con = mysqli_connect("localhost","root","","shop_details");
	$id = $_GET['id'];
	$sql = "DELETE FROM `file_heading` WHERE id='$id'";
	$res = mysqli_query($con,$sql);
	header("location:file.php");
?>

