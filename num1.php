
	   
	   
	   
	   
<?php
if(isset($_POST['txtno']))
{
			$no=$_POST['txtno'];
        $count=1;
		$count1=0;
		$a=0;
		$b=2;
		$c=1;
		$d=1;
		$e=2;
		$f=0;
		$l=65;
		for ($i=$no;$i>=1;$i--)
		{
			for($j=1;$j<=$i;$j++)
			{	
			 if($count==1)
                {
                    echo chr($l).$a;
                    $l++; 					
			        $count++;
	            }
			 else if($count==2)
			    {
                    echo chr($l).$b;
                    $l++; 					
			        $count++;
	            }
			 else if($count==3)
			    {
                    echo chr($l).$c;
                    $l++; 					
			        $count=0;
					$count1=1;
	            }	
   		     else if($count1==1)
			    {
				    echo chr($l).$d;
					$l++;
					$count1=2;
				}	
		      else if($count1==2)
			    {
				    echo chr($l).$e;
					$l++;
					$count1=3;
				}	
		
		     else if($count1==3)
			    {
				    echo chr($l).$f;
					$l++;
					$count1=0;
					$count=1;
				}	
		    }
			
			    echo "<br>";
				
		}
}
?>	


		<form action="num1.php"method="post">
			<input type="text"name="txtno"><br><br>
			<input type="submit"value="display">
	</form>		
			
		
		
		  
 

	  
	  
	  	   