<?php
	$con = mysqli_connect("localhost","root","","college_mgt");
	if(isset($_POST['txtrno']))
	{
			$rno = $_POST['txtrno'];
			$nm = $_POST['txtnm'];
			$sql = "INSERT INTO `stud`(`roll_no`, `stud_name`) VALUES ('$rno','$nm')";
			mysqli_query($con,$sql);
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid mt-2">
			<form action="index2.php" method="POST">
				<input type="text" name="txtrno" class="form-control" placeholder="Enter Roll Number" required></br>
				<input type="text" name="txtnm" class="form-control" placeholder="Enter Name" required></br>
				<input type="submit" class="btn btn-primary w-100" value="Save">
			</form>
			<table class="table table-bordered text-center">
				<tr>
					<th style="width:5%;">SR.
					<th style="width:10%;">Roll No
					<th style="width:60%;">Name
					<th style="width:25%;">Actions
				<?php
					$sql = "SELECT * FROM `stud`";
					$res = mysqli_query($con,$sql);
					$i=1;
					while($row=mysqli_fetch_assoc($res))
					{
				?>
				<tr>
					<td><?php echo $i; ?>
					<td><?php echo $row['roll_no']; ?>
					<td><?php echo $row['stud_name']; ?>
					<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-roll="<?php echo $row['roll_no']; ?>" data-bs-nm="<?php echo $row['stud_name']; ?>" data-bs-id="<?php echo $row['id']; ?>">Update</button>
				<?php
					$i++;
					}
				?>
			</table>
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Update Record</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form action="index2.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Roll No:</label>
            <input type="text" name="txtnroll" class="form-control" id="roll">
            <input type="text" name="txtid" class="form-control" id="id" hidden>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Student Name:</label>
            <input type="text" name="txtnname" class="form-control" id="sname">
          </div>
        
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary w-100">Update</button>
		  </div>
		  </form>
		</div>
	 </div>
		</div>	
	</body>
</html>
<script>
	const exampleModal = document.getElementById('staticBackdrop')
	exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const roll = button.getAttribute('data-bs-roll')
    const nm = button.getAttribute('data-bs-nm')
    const id = button.getAttribute('data-bs-id')
    const modalTitle = exampleModal.querySelector('.modal-title')
	modalTitle.textContent = `Update Record ID ${id}`
    document.getElementById('roll').value = roll;
	document.getElementById('sname').value = nm;
	document.getElementById('id').value = id;
})
</script>
<?php
	if(isset($_POST['txtid']))
	{
		$id = $_POST['txtid'];
		$rno = $_POST['txtnroll'];
		$nm = $_POST['txtnname'];
		$sql = "UPDATE `stud` SET `roll_no`='$rno',`stud_name`='$nm' WHERE `id`='$id'";
		mysqli_query($con,$sql);
		header("location:index2.php");
	}
?>

