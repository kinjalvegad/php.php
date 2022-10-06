	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.min.css"/>
<?php
	session_start();
	if(!$_SESSION['reg'])
	{
		header("location:login3.php");
	}
	$con = mysqli_connect("localhost","root","","shop_details");
	if(!$con)
	{
		echo "Error DB!";
	}
	else
	{
		$oldmail = $_SESSION['reg'];
		$sql = "select * from `REG` where email='$oldmail'";
		$res = mysqli_query($con,$sql);
	}
?>
<div class="container-fluid mt-2 text-center">
	<?php
			$count  = mysqli_affected_rows($con);
			if($count == 1)
			{
				$row = mysqli_fetch_assoc($res);
			}
		?>
	<form action="home.php" method="POST" enctype="multipart/form-data">
		<?php
			if($row['profile_picture']!="")
			{
		?>
		<img class="img-circle" src="<?php echo "images/".$row['profile_picture']; ?>" alt="No Image" height="100" width="100" name="regimg" id="regimg"></br>
		<?php
			}
			if($row['profile_picture']=="")
			{
		?>
		<img class="img-circle" src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="No Image" height="100" width="100" name="usrimg" id="usrimg"></br>
		<input type="file" class="form-control" id="fileupload" name="fileupload" accept=".JPEG,.JPG,.PNG"></br>
		<?php
			}
		?>
		<input type="text" value="<?php echo $row['name']; ?>" name="txtnm" class="form-control" required></br>
		<input type="text" value="<?php echo $row['email']; ?>" name="email" class="form-control" disabled></br>
		<input type="password" value="<?php echo $row['password']; ?>" name="pswd" class="form-control" required></br>
		<input type="mob" value="<?php echo $row['mob']; ?>" name="mob" class="form-control" required></br>
		<input type="submit" value="Save Changes" class="btn btn-primary w-100">
		<a href="logout.php" class="btn btn-danger">logout</a>
	</form>
</div>
<?php
	if(isset($_POST['txtnm']))
	{
		$nm = $_POST['txtnm'];
		$pass = $_POST['pswd'];
		$mob = $_POST['mob'];
		$target_dir = "images/";
		$temp = explode(".", $_FILES["fileupload"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		echo $newfilename;
		if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_dir.$newfilename))
		{
			$sql = "update `reg` set name='$nm', password='$pass',mobile='$mob' profile_pic='$newfilename' where email='$oldmail'";
		}
		else
		{
			$sql = "update `reg` set name='$nm', password='$pass',mobile='$mob' where email='$oldmail'";
		}
		if(mysqli_query($con,$sql))
		{
			header("location:home.php");
		}
	}
?>
<script>
	fileupload.onchange = evt => {
  const [file] = fileupload.files
  if (file) {
    usrimg.src = URL.createObjectURL(file)
  }
}
</script>