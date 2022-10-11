<?php
	if(isset($_POST['txtrow']))
	{
		$row=$_POST['txtrow'];
		$col=$_POST['txtcol'];
		$k=1;
		echo "<table border='1'width='100'>";
		for($i=1;$i<=$row;$i++)
		{
			echo "<tr>";
			for($j=1;$j<=$col;$j++)
			{
				echo "<td>".$k;
				$k++;
			}
		}
		echo "</table>";
	}
?>
<form action="table1.php"method="post">
	<input type ="text" name="txtrow"placeholder="enter row">
	<input type ="text" name="txtcol"placeholder="enter col">
	<input type="submit" value="design table">
</form>	