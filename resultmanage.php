<html>
<head>
<title> Result </title>
</head>
<body background="back34.jpg">
<center>
<P>
   <br>
   <br>
   <h1> <font color="red"> Exam Result </h1> </font>
<table border="1">
<tr>
<th> Roll Number </th>
<th> Name </th>
<th> Score </th>
<th> Date </th>
</tr>
<?php
    $con =@mysql_connect("localhost","root","root") or die(mysql_error());
	$db="administration";
	$databse=@mysql_select_db($db,$con) or die(mysql_error());
	$sql="SELECT *FROM users";
    $result=@mysql_query($sql,$con);
	  while($row=@mysql_fetch_array($result))
	 {
		  $rollnumber=$row['id'];
		  $name=$row['user_name'];
		  $score=$row['score'];
		  $date=$row['date'];
		  print "<tr>";
		  echo "<td>  $rollnumber</td>";
		  print "<td> $name </td>";
		  print "<td> $score </td>";
		  print "<td> $date </td>";
		  print "</tr>";
	 }
        	 
	
	 
?>
</table>
</body>
</html>