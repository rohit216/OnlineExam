<?php
//$session_start();
if((!$_POST[fname]) || (!$_POST[lname]) || (!$_POST[phone]) || (!$_POST[email]))
{
	 header("location: register.php");
}
?>
<?php

    $connection = @mysql_connect('localhost', 'root', 'root')
    or die(mysql_error());
      if($connection)
      {
       $msg = "Success";
      }
    $db_name = "student";
    $table_name = "login";
	$tname = "account34";
    $db = @mysql_select_db($db_name, $connection) or die(mysql_error());
    $query = "INSERT INTO $tname (rollnumber, fname, lname, address, phone, city, email ) VALUES ('$_POST[user]','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[phone]','$_POST[city]','$_POST[email]')";
    $result = @mysql_query($query, $connection) or die(mysql_error());
   if($result)
	{
		header("location:ldetail.php");
	}
  echo "Inserting Successfully!!!"
  
?>
<html>
<head> 
<title> Record Adding </title>
</head>
<body bgcolor="back34.jpg"">
  </body>
</html>  