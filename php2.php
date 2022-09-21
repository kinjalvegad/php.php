//1,2,3,5,8...//</br><hr>
<?php
     if(isset($_POST['txtno']))
	 { 
        $no=$_POST['txtno'];
		
		 $a=0;
		 $b=1;	 
		for($i=1;$i<=$no;$i++)
		{
			$c=$a+$b;
			$a=$b;
			$b=$c;
			echo"$c\t";
		}
	 }
?>	
<form action="php2.php"method="post">
	<input type="text"name="txtno"placeholder="enter no"required></br>
	<input type="submit"value="display">
</form>	
		