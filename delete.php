<?php
	$con = mysqli_connect("localhost","root","","sam_table");
	$id = $_GET['id'];
	$sql = "DELETE from `sam_table` WHERE id="$id"";
	mysqli_query($con,$sql);
	header("location:index.php");
	?>