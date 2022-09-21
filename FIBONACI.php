//1A,2B,3C,4D//<br></hr>
<?php 
   if(isset($_POST['txtno']))
   {
	   $a=65;
	   $no=$_POST['txtno'];
	   for($i=1;$i<=$no;$i++)
	   { 
         echo $i.chr($a)."&nbsp";
		 $a++;
	   }
   }
 ?>
		<form action="FIBONACI.php"method="post">
			<input type="text"name="txtno"><br><br>
			<input type="submit"value="display">
	</form>		
		
