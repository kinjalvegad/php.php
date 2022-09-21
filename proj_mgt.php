<?php
	include('config.php'); 
	include('header.php'); 
	if(isset($_POST['txtpname']))
	{
		$pname = $_POST['txtpname'];
		$cname = $_POST['txtcname'];
		$cno = $_POST['txtcno'];
		$pamt = $_POST['txtpamount'];
		$psdate = $_POST['txtrdate'];
		$pddate = $_POST['txtddate'];
		$status = "P";
		$sql = "INSERT INTO `project`(`proj_name`, `client_name`, `client_number`, `proj_amount`, `prdate`, `pddate`, `status`) VALUES ('$pname','$cname','$cno','$pamt','$psdate','$pddate','$status')";
		if(mysqli_query($con,$sql))
		{
			echo "<script>toastr.success('Project Added!');</script>";
		}
	}
	$sql = "select * from `project`";
	$res = mysqli_query($con,$sql);
	$p = 0;
	$c = 0;
	$o = 0;
	while($row = mysqli_fetch_assoc($res))
	{
		if($row['status'] == "P")
		{
			$p = $p+1;
		}
		else if($row['status'] == "C")
		{
			$c = $c+1;
		}
		else if($row['status'] == "O")
		{
			$o = $o+1;
		}
	}
	
?>
	<body>
		<form action="index.php" method="POST">
			<div class="container-fluid mt-2 mb-2">
				<div class="row">
					<div class="col">
						<div class="card bg-primary text-center text-white bg-gradient">
							<div class="card-header">
								<h5>Ongoing Projects</h5>
							</div>
							<div class="card-body">
								<h1><?php echo $o; ?></h1>
							</div>
							<div class="card-footer">
								<h5><a class="text-white text-decoration-none" href="project_list.php?status=O">Click to view</a></h5>
							</div>
						</div>						
					</div>
					<div class="col">
						<div class="card bg-primary text-center text-white bg-gradient">
							<div class="card-header">
								<h5>Pending Projects</h5>
							</div>
							<div class="card-body">
								<h1><?php echo $p; ?></h1>
							</div>
							<div class="card-footer">
								<h5><a class="text-white text-decoration-none" href="project_list.php?status=P">Click to view</a></h5>
							</div>
						</div>						
					</div>
					<div class="col">
						<div class="card bg-primary text-center text-white bg-gradient">
							<div class="card-header">
								<h5>Completed Projects</h5>
							</div>
							<div class="card-body">
								<h1><?php echo $c; ?></h1>
							</div>
							<div class="card-footer">
								<h5><a class="text-white text-decoration-none" href="project_list.php?status=C">Click to view</a></h5>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<a href="#" class="float bg-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-plus fa-3x my-float"></i></a>
		</form>
		<div class="modal fade  text-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-titl" id="staticBackdropLabel">Add Project</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<form action="index.php" method="POST">
					<input type="text" name="txtpname" class="form-control" placeholder="Enter Project Name" required></br>
					<input type="text" name="txtcname" class="form-control" placeholder="Enter Client Name" required></br>
					<input type="text" name="txtcno" class="form-control" placeholder="Enter Client Number" required></br>
					<input type="text" name="txtpamount" class="form-control" placeholder="Enter Project Amount" required></br>
					<input type="date" name="txtrdate" class="form-control" required></br>
					<input type="date" name="txtddate" class="form-control" required>
			  </div>
			  <div class="modal-footer">
				<input type="submit" class="btn btn-primary w-100" value="Save Project">
				</form>
			  </div>
			</div>
		  </div>
		</div>
	</body>
</html>