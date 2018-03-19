<?
session_start();
?>
<html>
<head>
<title> Student profile </title>
</head>
<body background="Background-2.png">
<br><br><br> <font color="blue"><h1> <center>***Exam Details *** </h1></center> </font>
<br><br><br>
<table border="1" align="center">
<tr>
<th><h2> Exam Id </h2></th>
<th><h2> Exam Name </h2></th>
<th><h2> Exam Marks</h2> </th>
<th><h2> Time(in minutes) </h2></th>
</tr>
<?php
$con=@mysql_connect("localhost","root","root");
$databse=@mysql_select_db("administration",$con);
$sql="SELECT *FROM categories";
$result=@mysql_query($sql,$con);
while($row=@mysql_fetch_assoc($result))
{
	print "<tr>";
	print "<td><h4><p> <b> $row[id] </p> </b></td>";
	print "<td><h4><p> <b> $row[category_name] </p> </b></td>";
	print "<td><h4><p> <b> $row[marks] </p> </b></td>";
	print "<td><h4><p> <b> $row[time] </p> </b></td>";
	print "</tr>";
}
?>
</table>
</body>
</html>