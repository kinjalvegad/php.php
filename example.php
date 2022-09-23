<?php
	$con=mysqli_connect("localhost","root","","sample");
	if(isset($_POST['btnsubmit']))
	{
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$sql="INSERT into `sample_data`(`name`,`contact`,`email`) values('$name','$contact','$email')";
		$res=mysqli_query($con,$sql);
	}
		
	
?>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>  


<body>
<div class="container mt-4">
<form action="<?php $_SERVER['PHP_SELF']; ?>"method="post">

   <input type="text"name="name"class="form-control text-center"placeholder="Enter name"required></br>
   <input type="text"name="contact"class="form-control text-center"placeholder="Enter contact"required></br>
   <input type="text"name="email"class="form-control text-center"placeholder="Enter email"required></br>
   <input type="submit"value="save"  class="btn btn-success"name="btnsubmit">
   </form>
   </div>  
  </body>
 
<table class="table table-bordered text-center">
				<tr>
				    <th>id
					<th>name
					<th>contact
					<th>email
					
					 <?php
                         $sql="SELECT * FROM `sample_data`";
	                      $res=mysqli_query($con,$sql);
	                      while($row=mysqli_fetch_assoc($res))
						  {
?>	
					
				
				<tr>
					
					<td><?php echo $row['id']; ?>
					<td><?php echo $row['name']; ?>
					<td><?php echo $row['contact']; ?>
					<td><?php echo $row['email']; ?>
					
						
						
				
						
						
				<?php
					
						  }
				?>
				
		</table>	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	 