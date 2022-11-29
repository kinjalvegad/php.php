<?php
	$con = mysqli_connect("localhost","root","","nilesh");
	if(isset($_POST['rollno']))
	{
		$roll=$_POST['rollno'];
		$name=$_POST['name'];
		$sql="INSERT into `sam_table`(`rollno.`,`name`)VALUES('$roll','$name')";
		mysqli_query($con,$sql);
	}
?>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
	<div class="container fuild mt-2">
		<form action="index.php" method="POST">
			<input type="text" name="rollno" class="form-control" placeholder="enter a rollno"required></br>
			<input type="text" name="name" class="form-control" placeholder="enter a name"required></br>
			<input type="submit" class="btn btn-primary" value="save">
		<form>
	</div>
	<table class="table table-border text-center">
		<tr>
			<th style="width:20%">sr no.
			<th style="width:20%">roll no
			<th style="width:50%">name
			<th style="width:10%">action
		
			<?php
				$sql="SElECT * FROM `sam_table`";
				$res=mysqli_query($con,$sql);
				$i=1;
			
				while($row=mysqli_fetch_assoc($res))
				{
			?>
		<tr>
			<td><?php echo $i;?>
			<td><?php echo $row['rollno.'];?>
			<td><?php echo $row['name'];?>
			<td><a class="btn btn-denger" href="delete.php"?id=<?php echo $row['id']; ?>">DELETE</a> >
			<?php
				$i++;
				}
			?>
			</table>
</html>