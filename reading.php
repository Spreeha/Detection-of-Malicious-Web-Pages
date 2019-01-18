<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("demo").innerHTML =
      //this.responseText;
      var p=this.responseText;
      p=p.toString();
      var arr=p.split(" ");
      document.getElementById("demo").innerHTML =
      arr[100];
    }
  };
  xhttp.open("GET", "dataset.txt", true);
  xhttp.send();
  //var p=document.getElementById("demo");
  //p=p.value;
  //p=p.split(" ");
  //document.writeln(arr[0]+" "+arr[1]);
}
</script>

</body>
</html>
