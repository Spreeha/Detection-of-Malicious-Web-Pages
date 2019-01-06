<?php 

            error_reporting(E_ERROR); 
            $con=new mysqli('localhost','root','mypass123','storeofurl');
            $k=1;
            if($k==0)
            {

            	function substr_count()
            	{
			$result = mysqli_query($con,"SELECT * FROM frequency");
            while($row = mysqli_fetch_assoc($result))
            {
            	$k = 0;
            	$str = $row['url'];
            	for($i='a';$i<='z';$i++)
            	{
            		for($j=0;$j<strlen($str);$j++)
            		{
            			if($str[j]==$i)
            				$k++;
            		}
            		if($k>1)
            			$result1 = mysqli_query($con,"UPDATE frequency set b=$t where URL='$str'");
            	}
            	
            	}
            }
            }

            $result = mysqli_query($con,"SELECT * FROM checkurl");
            while($row = mysqli_fetch_assoc($result))
            {
            	$str=$row['url'];
            	$sc=$row['cs']+$row['ds']+$row['ls'];
            	$result1 = mysqli_query($con,"UPDATE checkurl set score=$sc where URL='$str'");
            }

            ?>

