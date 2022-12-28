<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
	<body>
	<form action="2.php"method="POST">
	    <input type="text"class="form-control" name="emp_code"placeholder="Enter emp code">
	     <button type="submit" name="search"class="btn btn-success btn-lg mb-1 w-50">search</button>
	     <button type="clear" name="clear"class="btn btn-info btn-lg mb-1 w-50">clear</button>
    </form>
	

		 
<table class="table table-bordered text-center w-100">
 
    <tr>
      <th>id</th>
      <th>emp_code</th>
      <th>f_name</th>
      <th>l_name</th>
      <th>email</th>
      <th>contact</th>
      <th>address</th>
      <th>dob</th>
      <th>city</th>
      <th>state</th>
      <th>country</th>
      <th>action</th>
 
 


<?php
    require "config.php";
        if(isset($_POST['search']))
		{
	      $emp_code=$_POST['emp_code'];
		  $sql="SELECT * FROM `emp` WHERE `emp_code`= '$emp_code'";
		 
		 
		  $res=mysqli_query($con,$sql);
		  $i=1;
		  while($row=mysqli_fetch_assoc($res))
		  {
		  
?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['emp_code'];?></td>
		<td><?php echo $row['f_name'];?></td>
		<td><?php echo $row['l_name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['contact'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['dob'];?></td>
		<td><?php echo $row['city'];?></td>
		<td><?php echo $row['state'];?></td>
		<td><?php echo $row['country'];?></td>
		<td><a class="btn btn-danger"href="delete.php?id=<?php echo $row['emp_code'];?>">delete</a>
		<a class="btn btn-primary"href="update.php?emp_code=<?php echo $row['emp_code'];?>">update</a>
    <?php  
		$i++;
		  }
		}	
?>
</table>	

		  