<?php
	$con=mysqli_connect("localhost","root"," ","college_table");
	if (!$connect)
	{
		echo"connection"
	}
?>	



<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
		<body>
		<div class="container mt-3">
		<form action="index.php" method="post">
		 <input type="text" name="txtrno" class="form-control"placeholder="enter roll number" required></br>
		<input type="text" name="txtnm" class="form-control"placeholder="enter name" required></br>
		<input type="submit"class="btn btn-primary w-100" value="save">
		</div>
		</form>
		<table class="table table-bordered text-center">
				<tr>
					<th>SR.
					<th>Roll No
					<th>Name
					<th>Actions
		</table>			
		</body>
</html>		
		
		