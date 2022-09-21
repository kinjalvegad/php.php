<?php
	$con=mysqli_connect("localhost","root","","college");
	if($con==true)
	{
			echo"yes";
	}		
?>

<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
	<body>
	<div class="continer mt-5">
	   <form method="post" action="form.php">
		<input type="text"name="txtnm"class="form-control"placeholder="enter name"required ></br>
		<input type="text"name="usrnm"class="form-control"placeholder="enter user  name"required ></br>
		<input type="password"name="pswd"class="form-control"placeholder="enter password"required ></br>
		<input type="submit"value="display"class="btn btn-primary w-50">
		</form>
	</div>
    </body>
</html>
<?php
		if(isset($_request['txtnm']))
		{
			$nm=$_request['txtnm'];
			echo$nm;
		}
?>		