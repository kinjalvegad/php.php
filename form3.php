<?php
	$con = mysqli_connect("localhost","root","","college_mgt");
	if(isset($_POST['txtrno']))
	{
			$rno = $_POST['txtrno'];
			$nm = $_POST['txtnm'];
			$sql = "INSERT INTO `stud`(`roll_no`, `stud_name`) VALUES ('$rno','$nm')";
			mysqli_query($con,$sql);
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid mt-2">
			<form action="index2.php" method="POST">
				<input type="text" name="txtrno" class="form-control" placeholder="Enter Roll Number" required></br>
				<input type="text" name="txtnm" class="form-control" placeholder="Enter Name" required></br>
				<input type="submit" class="btn btn-primary w-100" value="Save">
			</form>
			<table class="table table-bordered text-center">
				<tr>
					<th>SR.
					<th>Roll No
					<th>Name
					<th>Actions
				<?php
					$sql = "SELECT * FROM `stud`";
					$res = mysqli_query($con,$sql);
					$i=1;
					while($row=mysqli_fetch_assoc($res))
					{
				?>
				<tr>
					<td><?php echo $i; ?>
					<td><?php echo $row['roll_no']; ?>
					<td><?php echo $row['stud_name']; ?>
					<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
				<?php
					$i++;
					}
				?>
			</table>
		</div>	
	</body>
</html>
