

<?php
	$con=mysqli_connect("localhost","root","","kinjal");
	if(isset($_FILES['fileupload']))
	{
		$filename=$_FILES['fileupload'];
		if(!file_exists("images"))
		{
			mkdir("images");
		}
		$target_dir="images/";
		$target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
		$temp=explode(".",$_FILES['fileupload']['name']);
		$newfilename=rand(35000,350000).'.'.end($temp);
		move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_dir.$newfilename);
		$sql="INSERT INTO `image`(`image`) VALUES ('$newfilename')";
		$res=mysqli_query($con,$sql);
	}
?>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap-grid.min.css">

    <div id="container-fluid mt-2">
        <form method="POST" action="image.php" enctype="multipart/form-data">
           <input class="form-control" type="file" name="fileupload">
           <input class="btn btn-primary w-50" type="submit" value="save">
         </form>
		 </div>

  <table class="table table-sm table-border text-center">
	<tr>
		<th>image
<?php 
 
	  $sql="select * from `image`";
	  $res=mysqli_query($con,$sql);
	  while($row=mysqli_fetch_assoc($res))
	  {
?>
	<tr>
	<td><img src="<?php echo "images/".$row['image'];?>"height="100"width="100">
	<?php
	  }
	  ?>
	  </table>
  
   