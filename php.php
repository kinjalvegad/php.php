<?php
  if(isset($_POST['txtnm']))
  {
    $nm=$_POST['txtnm'];
	$rnm=$_POST['txtrnm'];
	echo $nm."  ".$rnm;
  }	
?>
<form action="php.php"method="post">
	<input type="text"name="txtnm"placeholder="enter name"required></br>
	<input type="text"name="txtrnm"placeholder="enter roll no"></br>
	<input type="submit"value="save">
</form>	
	