<?php
		$con=mysqli_connect("localhost","root","","college");
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
		<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap-grid.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
	
	</head>
	<body>
		<div class="container mt-3">
		<form action="form2.php" method="post">
			<input type="text"name="txtrno"class="form-control"placeholder="enter roll no"required></br>
			<input type="text"name="txtnm"class="form-control"placeholder="enter name"required></br>
			<input type="submit"class="btn btn-primary w-100"value="save"></br>
		</form>
      </div>
		<table class="table table - bordered text center">
			<tr>
				<th>sr no.
				<th>roll no
				<th>name
				<th>action
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
	