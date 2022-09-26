<form action="select.php"method="post">
		 <select name="s1">
		<option value="1">1</option>
	<option value="2">2</option>
		</select>
	<?php
		if(isset($_POST['s1']))
		{
			$s1=$_POST['s1'];
			if($s1==2)
			{
				?>
				<select>
				<option value="3">3</option>
	             <option value="4">4</option>
				 </select>
				 <?php
			}
		}
		?>
		<input type="submit"value="submit">
		</form>