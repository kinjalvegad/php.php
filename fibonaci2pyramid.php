//1Az,2By//<br></hr>
<?php 
   if(isset($_POST['txtno']))
   {
	   $k=1;
	   $a=65;
	   $b=122;
	   $no=$_POST['txtno'];
	   for($i=1;$i<=$no;$i++)
	   { 
         for($j=1;$j<=$i;$j++)
		 {
			echo $k.chr($a).chr($b)."&nbsp";
			 $a++;
			 $b--;
			 $k++;
	   }	 
		echo"</br>";
       }
   }
 ?>
		<form action="fibonaci2pyramid.php"method="post">
			<input type="text"name="txtno"><br><br>
			<input type="submit"value="display">
	</form>		
		