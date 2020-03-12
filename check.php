<?php 

            error_reporting(E_ERROR); 
            $con=new mysqli('localhost','root','mypass123','storeofurl');

            $results = mysqli_query($con,"SELECT * FROM url");
            while($row = mysqli_fetch_assoc($results))
            {
            	$str = $row['URL'];
            	$l = strlen($str);
            	$result1 = mysqli_query($con,"UPDATE url set length=$l where URL='$str'");
            
            	$t = substr_count($str,'a'); echo $t;
            	$result1 = mysqli_query($con,"UPDATE frequency set a=$t where url='$str'");
            	 
            	$t = substr_count($str,'b');
            	$result1 = mysqli_query($con,"UPDATE frequency set b=$t where URL='$str'");
            	$t = substr_count($str,'c');
            	$result1 = mysqli_query($con,"UPDATE frequency set c=$t where URL='$str'");
            	$t = substr_count($str,'d');
            	$result1 = mysqli_query($con,"UPDATE frequency set d=$t where URL='$str'");
            	$t = substr_count($str,'e');
            	$result1 = mysqli_query($con,"UPDATE frequency set e=$t where URL='$str'");
            	$t = substr_count($str,'f');
            	$result1 = mysqli_query($con,"UPDATE frequency set f=$t where URL='$str'");
            	$t = substr_count($str,'g');
            	$result1 = mysqli_query($con,"UPDATE frequency set g=$t where URL='$str'");
            	$t = substr_count($str,'h');
            	$result1 = mysqli_query($con,"UPDATE frequency set h=$t where URL='$str'");
            	$t = substr_count($str,'i');
            	$result1 = mysqli_query($con,"UPDATE frequency set i=$t where URL='$str'");
            	$t = substr_count($str,'j');
            	$result1 = mysqli_query($con,"UPDATE frequency set j=$t where URL='$str'");
            	$t = substr_count($str,'k');
            	$result1 = mysqli_query($con,"UPDATE frequency set k=$t where URL='$str'");
            	$t = substr_count($str,'l');
            	$result1 = mysqli_query($con,"UPDATE frequency set l=$t where URL='$str'");
            	$t = substr_count($str,'m');
            	$result1 = mysqli_query($con,"UPDATE frequency set m=$t where URL='$str'");
            	$t = substr_count($str,'n');
            	$result1 = mysqli_query($con,"UPDATE frequency set n=$t where URL='$str'");
            	$t = substr_count($str,'o');
            	$result1 = mysqli_query($con,"UPDATE frequency set o=$t where URL='$str'");
            	$t = substr_count($str,'p');
            	$result1 = mysqli_query($con,"UPDATE frequency set p=$t where URL='$str'");
            	$t = substr_count($str,'q');
            	$result1 = mysqli_query($con,"UPDATE frequency set q=$t where URL='$str'");
            	$t = substr_count($str,'r');
            	$result1 = mysqli_query($con,"UPDATE frequency set r=$t where URL='$str'");
            	$t = substr_count($str,'s');
            	$result1 = mysqli_query($con,"UPDATE frequency set s=$t where URL='$str'");
            	$t = substr_count($str,'t');
            	$result1 = mysqli_query($con,"UPDATE frequency set t=$t where URL='$str'");
            	$t = substr_count($str,'u');
            	$result1 = mysqli_query($con,"UPDATE frequency set u=$t where URL='$str'");
            	$t = substr_count($str,'v');
            	$result1 = mysqli_query($con,"UPDATE frequency set v=$t where URL='$str'");
            	$t = substr_count($str,'w');
            	$result1 = mysqli_query($con,"UPDATE frequency set w=$t where URL='$str'");
            	$t = substr_count($str,'x');
            	$result1 = mysqli_query($con,"UPDATE frequency set x=$t where URL='$str'");
            	$t = substr_count($str,'y');
            	$result1 = mysqli_query($con,"UPDATE frequency set y=$t where URL='$str'");
            	$t = substr_count($str,'z');
            	$result1 = mysqli_query($con,"UPDATE frequency set z=$t where URL='$str'");
            	echo "<br>";
            	if($result1)
            		echo "Success!";
            }

?>