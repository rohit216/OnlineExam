<?php
if(!($_POST[roll]) || !($_POST[answer]))
{
	header("location: ge.php");
	session_destroy();
	exit;
}
print "<br><br><br><br><br><br><br><body background='back34.jpg'>";
$con = @mysql_connect("localhost","root","root") or die(mysql_error());
$databse="student";
$db=@mysql_select_db($databse,$con) or die(mysql_error());
$sql="SELECT password FROM login where rollnumber = '$_POST[roll]' AND secanswer = '$_POST[answer]'";
$result=@mysql_query($sql,$con);

if($row=@mysql_fetch_array($result))
{
	print "<center>";
    $answer=$row['password'];
	print "<table border='0'> <tr>";
    echo "<td><b><h2>Your Password :</b> </h2></td><td><b><h2> $answer</td></tr>";
	print "</table>";
	print "<p><b><a href='login.php'> <h3> Click here to login. </h3> </a></p>";
}
else
{
	print "<center>";
    die("<b> <h1>please check your details</h1><a href='ge.php'> <h3>Click here to retry...</h3> </a>");
}

?> 