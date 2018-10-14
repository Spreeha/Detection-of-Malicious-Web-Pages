
<html>

<body>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style1.css" type="text/css">
<div class="body-content">
  <div class="module">
    <!--<h1 id="demo1"></h1>-->
    <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
      
      <input id="demo" type="text" placeholder="Enter URL" name="username" required />
      
	  <input type="button" placeholder="SEARCH" value="Check" name="register" class="btn btn-block btn-primary" onclick="searc()" />
	  <br>
	  <center><h1 id="demo1"></h1></center>
    </form>
  </div>
</div>
<script>
function searc()
{
var i;var n=0; var p;
var url=document.getElementById('demo');
url=url.value;
//var arr=["abc","def","ghi","oneclickdownload 1clickdownload"];
var arr=["oneclickdownload", "1clickdownload", "4share", "4shared", "getfaster", "4shared", "activshop", "activshopper","adgazele", "adgazelle", "smabo", "adialer", "dealcabby", "adpeak", "adswo", "adwo","gaobot", "agobot", "airad", "airinstaller", "airadinstaller", "airinstaller", "airinstall", "airinstaller", "rahack", "allaple", "starman", "allaple", "almanahe", "alman kanav alyak adfltnet amonetize easydl amonetize filesearch amonetize imonetize amonetize armour androidarmour climap androrat arcparlor arcadeparlor badday badda bearshare bandoo ilivid"];
var l=arr.length;
for(i=0;i<arr.length;i++)
{
 n = url.search(arr[i]);
 if(n>=0)
 {
 	p=1;
 	break;
 }
 //document.writeln(url+" "+n);
}
if(p==1)
 document.getElementById("demo1").innerHTML = "Not Safe";
else
	window.location=url;
 //document.getElementById("demo1").innerHTML = "Safe";
}
</script>
</body>
</html>