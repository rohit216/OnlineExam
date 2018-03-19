
<html>
	<head> 
	<title> </title>
	</head>
	<body bgcolor="lightblue">
	<?php
  //include("connection.php");
  if((!$_POST[user1]) || (!$_POST[pass1]))
  {
	   header("location: ldetail.php");
	   exit;
  }
   $connection = @mysql_connect('localhost', 'root', 'root')
    or die(mysql_error());
      if($connection)
      {
       $msg = "Success";
      }
    $db_name = "student";
    $table_name = "login";
	//$tname = "account34";
    $db = @mysql_select_db($db_name, $connection) or die(mysql_error());
  

	     $query = "INSERT INTO $table_name ( rollnumber, password, secanswer) VALUES ('$_POST[user1]', '$_POST[pass1]', '$_POST[answer]')";
    $result = @mysql_query($query, $connection) or die(mysql_error());
   if($result)
	{
	$msg = "<br><br><br><h2>Account successfully Created</h2>";
	
		}
	?>
	<center><br> <br> <br>
	<?php echo "$msg"; ?>
<br><a href="Login.php"> Click Here to Login </a>
</center>
	</body>
	</html>
	