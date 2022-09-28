<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/js/bootstrap.min.js"></script>
<form action="select1.php"method="post">
	<select name="course" id="course">
		<option value="bca">bca</option>
		<option value="pgdca">pgdca</option>
			</select>
	<select id="semester">
    </select>
		<input type="submit" value="save">
</form>
  
<script>
		$("#course").change(function()
		{
			var course=document.getElementById('course').value;
				if (course=="pgdca")
				{
					alert(" ");
					$("#semester").getElementById('semester').value="adhoc";
				}
		});
			</script>
			
		
		
		
	