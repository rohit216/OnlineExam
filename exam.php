<html>
<head>
<title> Exam Creation </title>
</head>
<center>
<body background="back34.jpg">
<br><br><br> <br> <br> <br>
<?php
$_POST['exam'];
$_POST['marks'];
$_POST['time'];
$_SESSION['exam']=$_POST['exam'];;
$_SESSION['marks']=$_POST['marks'];;
$_SESSION['time']=$_POST['time'];;
$exam=$_SESSION['exam'];
$mark=$_SESSION['marks'];
$time=$_SESSION['time'];
echo $exam;
$con = @mysql_connect("localhost","root","root") or die(mysql_error());
$db=@mysql_select_db("administration",$con);
$sql="INSERT INTO categories (category_name,marks,time) VALUES('$exam','$mark','$time')";
if($_POST['submit'])
{
	@mysql_query($sql,$con) or die(mysql_error());
	echo "<br><br><br><br><h2>Created Successfully<br><br></h1><h2><a href='createexam.php'> Go to main Page </a></h2>";
	
	session_destroy();
}
else
{
	
	echo "<br><br><br><br><h2>Not Created";
	print "<h3>PLease <a href='createexam.php'> try again </a>";
}
?>
