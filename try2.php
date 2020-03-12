<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
var arr[]; var k=0;
$(document).ready(function(){
    $("a").click(function(){
    	arr[k]=document.getElementByTagName('a');
    	arr[k]=arr[k].value;
        alert(arr[0]);
    });
});
</script>
</head>
<body>

<p>Click on this paragraph.</p>

</body>
</html>
