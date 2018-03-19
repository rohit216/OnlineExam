<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Untitled 2</title>
    <script lang="text/javascript">
    var myvar = setInterval(function(){
        myTimer()
    },3000);
    var d=0;
    function myTimer(){
        document.getElementById("demo").innerHTML=d++;
    }
    </script>
</head>

<body>
<p> Timer </p>
<p id="demo"></p>



</body>
</html>