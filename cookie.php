<?PHP
	$cname="testpg1";
	$cvalue="sem1";
	setcookie($cname,$cvalue,time()+(86400*1),"/");
		if(isset($_COOKIE['testpg1']))
		{
			echo $_COOKIE['testpg1'];
		}
		else
		{
			echo"not set!";
		}
?>