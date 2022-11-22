<?php 
	$con=mysqli_connect("localhost","root","","cd");
	if(isset($_POST['submit']))
	{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$sql="INSERT into `crud`('name','email','password')value('$name','$email','$password')";
			$res=mysqli_query($con,$sql);
	}
	
?>

<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="SELECT * from `crud` WHERE ('name"
	}
?>


<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-grid.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
	</head>
<body>

	<div class="container mt-5">
<form action="first.php" method="post">
	
  <label for="name">name:</label><br>
  <input type="text" id="name" name="name" placeholder="Enter name"required><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" placeholder="Enter email"required><br>
  <label for="password">password:</label></br>
  <input type="text" id="password" name="password" placeholder="Enter password"required><br>
  <button type="submit" class="btn btn-primary">Submit</button>
 </form> 
  </div>
</body>
</html>
