<?php
	$con=mysqli_connect("localhost","root","","project_mangement");
	if(!$con)
	{
		echo "no connection";
	}	
?>


<html>
	<head>
		<title>project mangement</title>
		<link rel="stylesheet" href="kinjal/css/bootstrap.css">
		<link rel="stylesheet"href="kinjal/bootstrap.js">
		<script src="kinjal/js/bootstrap.js"></script>
		<style>
			.float
			{
				position:fixed;
				width:60px;
				height:60px;
				bottom:40px;
				right:40px;
				color:#FFF;
				border-radius:50px;
				text-align:center;
				box-shadow: 2px 2px 3px #999;
			}
			.my-float
			{
				margin-top:8px;
			}
	</style>
	</head>
		<body>
			<form action="index.php"method="post">
				<div class="row">
					<div class="col">
					<div class="card bg-danger text-center text-white bg-gardient">
					
					<div  class=" card -header">
					<h5>pending project</h5>
					</div>
					<div class=" card -body">
					<h2>10</h2>
					</div>
						<div class="card-footer">
						<h5>click to view</h5>
						</div>
					</div>
				</div>
				</div>
				
		</body>
</html>		