
<html>
<head>
<style>
.module .body-content {
    height: 200px;
    width: 400px;
    background: black;

    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;
}
a
{
    color: #ffffff;
}
</style>
	</head>

<body>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style1.css" type="text/css">
<div class="body-content">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><h3><b>Enter URL below to check whether it is safe to proceed</b></h3></center>
  <div class="module">
    <!--<h1 id="demo1"></h1>-->

    <form class="form" method="post" enctype="multipart/form-data" autocomplete="on">
      
      <input id="demo" type="text" placeholder="Enter URL" name="username" required/>
      <br>
	  <input type="button" placeholder="SEARCH" value="Check" name="register" class="btn btn-block btn-primary" onclick="searc()" />
	  <br>
	  <center><h1 id="demo1"></h1></center>
	  <br>
	  <br>
	  <center><a href="exit.php" color:"#ffffff">Click to exit</a></center>
    </form>
  </div>
</div>
<script>



function searc()
{
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
var url=document.getElementById('demo');
url=url.value;
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
 //document.writeln(url+" "+n);
}
if(c==1)
 document.getElementById("demo1").innerHTML = "Not Safe";
else
	window.location=url;
}
xhttp.open("GET", "data.txt", true);
  xhttp.send();
 //document.getElementById("demo1").innerHTML = "Safe";
}

</script>
</body>
</html>