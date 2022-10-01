<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<form action="file.php" method="POST" enctype="multipart/form-data">
	<input type="text"name="txtroll"placeholder="enter roll no"></br>
	<input type="text"name="txtnm"placeholder="enter name"></br>
	<input type="file" name="fileupload1"  id="imgInp" accept="png.jpg.jpeg"></br>
	<img src=" " id="blah" alt="select image" height="150"width="150"></br>
	<input type="submit"value="save">
</form>

<?php 
    $con=mysqli_connect("localhost","root","","shop_details");
	if(isset($_POST['txtroll']))
	{
			
				if($con)
				{
					$roll=$_POST['txtroll'];
					$nm=$_POST['txtnm'];
					$target_dir="image/";
					$name=rand(150,480000);
					$extension=pathinfo($_FILES["fileupload1"]["name"],PATHINFO_EXTENSION);
					$fnm=$name.".".$extension;
					move_uploaded_FILE($_FILES["fileupload1"]["tmp_name"],$target_dir.$name.".".$extension);
					$sql="INSERT INTO `file_heading`(`roll`, `name`,`pro_file`) VALUES ('$roll','$nm','$fnm')";
					mysqli_query($con,$sql);
				}
	}
					
?>	
<script>
	imgInp.onchange = evt =>
		{
			const [file] = imgInp.files
				if (file)
			{
				blah.src = URL.createObjectURL(file)
			}
		}
</script>
<table class="table table-bordered text-center">
				<tr>
				    <th>id
					<th> roll
					<th>name
					<th>pro_file 
					<th>action
	<?php
						
						 
		$sql = "SELECT * FROM `file_heading`";
	    $res = mysqli_query($con,$sql);
	    $i=1;
	   while($row=mysqli_fetch_assoc($res))
		{
 ?>
<tr>
		<td><?php echo $i; ?>
		<td><?php echo $row['roll']; ?>
		<td><?php echo $row['name']; ?>
		<td><img  width="50" height="50"src="<?php echo "image/".$row['pro_file'];?>">
		<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
<?php
		  $i++;
		}
?>
				
					  
					  
	
			
	
					
</table>					