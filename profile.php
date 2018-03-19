<?
session_start();
?>
<html>
<head>
<title> Student profile </title>
</head>
<body background="Background-2.png">
<br><br><br> <font color="blue"><h1> <center>***Student Profile ***</center> </h1></font>
<?php
$con=@mysql_connect("localhost","root","root");
$databse=@mysql_select_db("student",$con);
$sql="SELECT *FROM account34 WHERE rollnumber=$_SESSION[user]";
$result=@mysql_query($sql,$con);
$row=@mysql_fetch_assoc($result);
if(!empty($_SESSION["user"]))
{
	print "<h3><p> <b> Roll No    : $_SESSION[user] </p> </b>";
	print "<h3><p> <b> First Name : $row[fname] </p> </b>";
	print "<h3><p> <b> Last Name  : $row[lname] </p> </b>";
	print "<h3><p> <b> Address    : $row[address] </p> </b>";
	print "<h3><p> <b> City       : $row[city] </p> </b>";
	print "<h3><p> <b> Mob No     : $row[phone] </p> </b>";
	print "<h3><p> <b> Email Id   : $row[email] </p> </b>";
}
?>
</body>
</html>
