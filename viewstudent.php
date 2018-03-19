<html>
<head>
<title>
</title>
</head>
<body background="back34.jpg">
  <p> <h1><center> <font color="red"> Roll Number and Passwords for User those are currently Logged.</center> </p> </h1>
  <table border="1" height="" width="30%" align="center">
   <tr>
   <th>  <b> Roll Number </b> </th>
   <th> <b> Password </b> </th>
   </tr>
<?php
// attempt database connection
$mysqli = new mysqli("localhost", "root", "root", "student");
if ($mysqli === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM login";
if ($result = $mysqli->query($sql)) {
if ($result->num_rows > 0) {
while($row = $result->fetch_array()) {
	print "<tr> <td align='center'>";
	echo $row['rollnumber'];
	print "</td> <td align='center'>";
    echo $row['password'];
    print "</td> 
 </tr>";	
}
$result->close();
} else {
echo "No records matching your query were found.";
}
} else {
echo "ERROR: Could not execute $sql. " . $mysqli->error;
}
// close connection
$mysqli->close();
?>
</table>
</body>
 <br> <br> <br>
   
   <tr>
      <td> <?php echo "$rollnumber"; ?> </td>
	  <td> <?php echo "$password"; ?> </td>
	  </tr>
	  </table>
	 
</html>