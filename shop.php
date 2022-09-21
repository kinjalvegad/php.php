<?php
	$con = mysqli_connect("localhost","root","","shop_details");
	if(isset($_POST['txtsnm']))
	{
		$snm=$_POST['txtsnm'];
		$rno=$_POST['txtrno'];
		$sno=$_POST['txtsno'];
		$sql="INSERT INTO `shop_table`( `shop_name`, `route`, `shop_no`) VALUES ('$snm','$rno','$sno')";
		$res=mysqli_query($con,$sql);
	}
?>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
		<body>
		<div class="container mt-3">
		<form action="shop.php" method="post">
		 <input type="text" name="txtsnm" class="form-control"placeholder="enter shop name" required></br>
		 <input type="text" name="txtrno" class="form-control"placeholder="enter route" required></br>
		<input type="text" name="txtsno" class="form-control"placeholder="enter shop no" required></br>
		<input type="submit"class="btn btn-primary w-50" value="save">
		</div>
		</form>
		<table class="table table-bordered text-center">
				<tr>
				    <th>id
					<th>shop name
					<th>route
					<th>shop no
					<th>action
					
						<?php
					$sql = "SELECT * FROM `shop_details`";
					$res = mysqli_query($con,$sql);
					$i=1;
					while($row=mysqli_fetch_assoc($res))
					{
				?>
				<tr>
					<td><?php echo $i; ?>
					<td><?php echo $row['shop_name']; ?>
					<td><?php echo $row['route']; ?>
					<td><?php echo $row['shop_no']; ?>
					<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-nm="<?php echo $row['shop_name']; ?>" data-bs-rno="<?php echo $row['route']; ?>" data-bs-no="<?php echo $row['shop_no'];?>" data-bs-id="<?php echo $row['id']; ?>">Update</button>
				<?php
					$i++;
					}
				?>
			
		</table>	
	</form><div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">	
  <div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Update Record</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form action="shop.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">shop_name:</label>
            <input type="text" name="txtnm" class="form-control" id="shop name">
            <input type="text" name="txtid" class="form-control" id="id" hidden>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">route:</label>
            <input type="text" name="txtrno" class="form-control" id="route">
          </div>
        
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary w-100">Update</button>
		  </div>
		</div>
	 </div>
		</div>			
<?php	
	if(isset($_POST['txtsnm']))
	{
		$snm=$_POST['txtsnm'];
		$rno=$_POST['txtrno'];
		$sno=$_POST['txtsno'];
		$sql="UPDATE `shop_table` SET  `shop_name`='$snm',`route`='$rno',`shop_no`='sno' WHERE `id`='$id'";
		$res=mysqli_query($con,$sql);
		
	}
	?>
				