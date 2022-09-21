<?php
	$con=mysqli_connect("localhost","root","","college");
	if($con == TRUE)
	{
		//echo "Connected.";
	}
		$rno=$_POST['texrno'];
		$nm=$_POST['textnm'];
		$sql="INSERT INTO `college_mangement`(`roll_no`,`name`)VALUES('$rno','$nm')";
		print_r($sql);
		die;
		$res = mysqli_query($con,$sql);
		if($res == TRUE)
		{
			print "INSERTED.";
		}
		else
		{
			print "NOT.";
		}
		
?>