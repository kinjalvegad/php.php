<?php
  $con=mysqli_connect('localhost','root',' ','crud');
  if (isset($_POST)
?>  



<html>
  <head>
     <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     </head>
  <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<form>
  <div class="mb-3">
  <input type="text" name="txtnm"class="form-control"placeholder="Enter name"required ></br>
    <input type="text" name="txtnum"class="form-control" placeholder="enter number"required></br>
    <input type="password" class="form-control" placeholder="Enter password"required></br>
	<button type="submit" class="btn btn-primary">Submit</button>
  </div>
 </form>
	</body>
</html>