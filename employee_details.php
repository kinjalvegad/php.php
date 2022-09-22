<?php
   $con=mysqli_connect("localhost","root","","employee_details");
   
	   if(isset($_POST['btnsubmit']))
	   {	   
	   $id=$_POST['emp_id'];
	   $nm=$_POST['emp_name'];
	   $contact=$_POST['emp_contact'];
	   $sql="INSERT INTO `emp_table`(`emp_id`,`emp_name`,`emp_contact`)VALUES('$id','$nm','$contact')";
       $res=mysqli_query($con,$sql);

	   }
?>   
<body>
<div class="container mt-4">
<form action="<?php $_SERVER['PHP_SELF']; ?>"method="post">

   <input type="text"name="emp_id"class="form-control"placeholder="Enter id"required></br>
   <input type="text"name="emp_name"class="form-control"placeholder="Enter name"required></br>
   <input type="text"name="emp_contact"class="form-control"placeholder="Enter contact"required></br>
   <input type="submit"value="save" name="btnsubmit">
   </form>
   </div>  
  </body>
  </html>