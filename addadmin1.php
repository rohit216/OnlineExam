<html>
<head>
<title> </title>
</head>
<body bgcolor="lightpink">
	<?php
	       $connection = @mysql_connect('localhost', 'root', 'root', 'administration')
    or die(mysql_error());
    if($connection)
    {
       $msg = "Success";
    }
    //$db_name = "student";
   // $table_name = "login";
	//$tname = "account";
	$admintable = "admin";
    //$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
    $admindb = "administration";
    $admindb1 = @mysql_select_db($admindb, $connection);

	     $sql = "INSERT INTO $admintable (username, password) VALUES ('$_POST[admin1]', '$_POST[pass1]')";
		  $result = @mysql_query($sql, $connection);
		  if($result)
		  {
			  echo "<br><br><br><br><b><center><h2>Succesfully Added New Admin</b> </center> </h2>";
			  echo '<h3><center><a href="adminwork.php"> Click here </a> to go back </center></h3>';
		  }
		    else
			{
				echo "<br><br><br><br><b><center><h2>Something error occured</b> </center> </h2>";
				echo '<h3><center><a href="adminwork.php"> Please try again... </center></h3>';
			}
		  ?>
		  </body>
		  </html>