<html>
<head>
<title> Student Profile </title>
</head>
<body background="back34.jpg">
<br> 
<br> 
<br> 
<br> 
<P>
   <b> <h1> <center> <font color="red">***Student Profile*** </center> </h1> </b> </font>
 <table border="1" height="" width="30%" align="center">
   <tr>
   <th>  <b>First Name </b> </th>
   <th> <b> Last Name </b> </th>
   <th> <b> Address </b> </th>
   <th> <b> City </b> </th>
   <th> <b> Mob No </b> </th>
   <th> <b> Email </b> </th>
   </tr>
<?php
  //require 'connection.php';
  // session_start();
    $con=@mysql_connect("localhost","root","root")
    or die(mysql_error());
    if($con)
    {
        $db_name="student";
    $table_name="login";
	$tname="account34";
	 $db=@mysql_select_db($db_name, $con) or die(mysql_error());
	   $sql="SELECT * FROM $tname";
	   $result=@mysql_query($sql,$con) or die(mysql_error());
	   
	  while($row=@mysql_fetch_array($result))
	  {
		  print "";
		  $fname=$row['fname'];
		  $lname=$row['lname'];
		  $address=$row['address'];
		  $city=$row['city'];
		  $mob_no=$row['phone'];
		  $email=$row['email'];
		  print "<tr>";
		  print "<td><font color='black'>$fname</td>
		  <td> <font color='black'>$lname</td>
		  <td> <font color='black'>$address</td>
		  <td> <font color='black'>$city</td>
		  <td> <font color='black'>$mob_no</td>
		  <td> <font color='black'>$email</td>";
		  print "</tr>";
		  print "</font>";
	  }
	}
	else
	{
		die(mysql_error());
	}
   
	 
  ?>
  </table>
  </body>
  </html>