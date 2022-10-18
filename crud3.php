<?php
   $con=mysqli_connect("localhost","root","","kinjal");
   if(isset($_POST['studname']))  
   {
	   $studname=$_POST['studname'];
	   $course=$_POST['course'];
	   $contact=$_POST['contact'];
	   $sql="INSERT INTO `crud3`(`studname`, `course`, `contact`) VALUES ('$studname','$course','$contact')";
	   $res=mysqli_query($con,$sql);
   }
?>
		<title>curd oparation:<title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.rtl.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
		
	<body>
	<form action="crud.php"method="post">
		<input type="text"name="studname"class="form-control"placeholder="Enter name"required>
		<input type="text"name="course"class="form-control"placeholder="Enter course"required>
		<input type="number"name="contact"class="form-control"placeholder="Enter contact"required>
    </form>
	</body>