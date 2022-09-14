//1,0,1,0,1,0,1,0//<br><hr>
<?php
   if(isset($_POST['txtno']))
   {
	   $no=$_POST['txtno'];
       for($i=1;$i<=$no;$i++)
	   {
		   if($i%2==0)
		   {
			   echo "0"."&nbsp";
		   }
          else
		  {
             echo"1"."&nbsp";
		  }
	   }
	   }
?>
		<form action="101010.php"method="post">
			<input type="text"name="txtno"><br><br>
			<input type="submit"value="display">
	</form>		
		