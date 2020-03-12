<?php 

            error_reporting(E_ERROR); 
            $con=new mysqli('localhost','root','mypass123','storeofurl');

            $results = mysqli_query($con,"SELECT * FROM url");
            while($row = mysqli_fetch_assoc($results))
            {
            	$str = $row['URL'];
            	$l = strlen($str);
            	if($l>=90 && $l<110)
            		$ls=1;
            	if($l>=110 && $l<=120)
            		$ls=2;
            	if($l>120)
            		$ls=3;
            	$result1 = mysqli_query($con,"UPDATE checkurl set ls=$ls where URL='$str'");
            }



            $result = mysqli_query($con,"SELECT * FROM frequency");
            while($row = mysqli_fetch_assoc($result))
            {
            	$k = 0;
            	$str = $row['url'];
            	

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($row['a']>6)
            		$k=$k+1;

            	if($k==2)
            		$ls=2;
            	if($k==3)
            		$ls=3;
            	if($k>3)
            		$ls=4;

            $result2 = mysqli_query($con,"UPDATE checkurl set cs=$ls where URL='$str'");	
        }


        $file = fopen("data.txt", "r");
		$i = 0;
		while (!feof($file)) 
		{

			$line_of_text = fgets($file);
			$members = explode(' ', $line_of_text);
			$len = sizeof($members);

                  $result3 = mysqli_query($con,"SELECT * FROM checkurl");
            while($row = mysqli_fetch_assoc($result3))
            {
                  $str = $row['url']; $c=0;
			for($i=0;$i<$len;$i++)
			{
				/*if (strpos($members[$i], $str) !== false)
                              $c=0;
                        else
                        {
                              $c=1;
                              break;
                        }*/
                        //echo $members[$i];
                        //$t = strpos("abcde","ghi");
                        //echo $t." ";
                        echo $str." ".$members[$i]."<br>";
                        if(strpos($str,$members[$i])>=0)
                        {
                              $c=1;
                              break;
                        }
			}
                  if($c==1)
                    $result4 = mysqli_query($con,"UPDATE checkurl set ds=3 where URL='$str'");    
        }
			//if (strpos($the_string, $the_substring) !== false)
		//}
			fclose($file);


            ?>


<!--<html>
<body>
	<script>

            function searc()
{
	<?php
		/*error_reporting(E_ERROR); 
            $con=new mysqli('localhost','root','mypass123','storeofurl');

            $results = mysqli_query($con,"SELECT * FROM url");
            while($row = mysqli_fetch_assoc($results))
            {*/
	?>
	 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("demo").innerHTML =
      //this.responseText;
      var p=this.responseText;
      p=p.toString();
      var arr=p.split(" ");
      //document.getElementById("demo").innerHTML = arr[100];
    }
var i;var n=0; var c=0;var j;var len;var k=0;var sub;
//var url=document.getElementById('demo');
//url=url.value;
var url=<?php //echo $row['url'] ?>
//var arr=["abc","def","ghi","oneclickdownload 1clickdownload"];

var l=arr.length;
for(i=0;i<arr.length;i++)
{
	n=0;
 n = url.search(arr[i]);
 leng=(arr[i]).length;
 len=url.length;
 k=0;
 /*for(j=0;j<(len-leng);i++)
 {
   sub=url.substring(i,(i+leng));
   if((sub.test(arr[i]))==true)
   	k++;
 }
 */
 if(n>=0)
 {
 	c=1;
 	break;
 }
 document.writeln(c);
}
if(c==1)
	<?php //echo "Success!"; ?>
 //document.getElementById("demo1").innerHTML = "Not Safe";
else
	<?php //echo "Failure!"; ?>
	//window.location=url;
}
xhttp.open("GET", "data.txt", true);
  xhttp.send();
 //document.getElementById("demo1").innerHTML = "Safe";
 <?php } ?>
}

</script>
</body>
</html>-->