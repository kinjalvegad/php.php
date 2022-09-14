//1Az,2By//<br></hr>
<?php 
   if(isset($_POST['txtno']))
   {
	   $a=65;
	   $b=122;
	   $no=$_POST['txtno'];
	   for($i=1;$i<=$no;$i++)
	   { 
         echo $i.chr($a).chr($b)."&nbsp";
		 $a++;
		 $b--;
	   }
   }
 ?>
		<form action="fibonaci2.php"method="post">
			<input type="text"name="txtno"><br><br>
			<input type="submit"value="display">
	</form>		
		