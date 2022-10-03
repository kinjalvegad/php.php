<?php
	$con=mysqli_connect("localhost","root","","shop_details");
	if(isset($_POST['txtnm']))
	{
		if($con)
		{
			$target_dir="image/";
					$name=rand(150,480000);
					$extension=pathinfo($_FILES["fileupload1"]["name"],PATHINFO_EXTENSION);
					$fnm=$name.".".$extension;
					move_uploaded_FILE($_FILES["fileupload1"]["tmp_name"],$target_dir.$name.".".$extension);
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
<div class="container-fluid">
<form action="home.php"method="POST" enctype="multipart/from-data">
	<input type="file" name="fileupload1"  id="imgInp" accept="png.jpg.jpeg"></br>
	<img src="	https://handsontek.net/images/SharePoint/ProfilePicture/hero.jpg" alt="image"width="200"height="200">
</form>
</div>	
	