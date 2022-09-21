<?php
	$age=array("niv"=>10,"khushi"=>15,"kinjal"=>20);
	echo json_encode($age);
	$enc='{"niv":10,"khushi":15,"kinjal":20}';
	var_dump(json_decode($enc));
?>	