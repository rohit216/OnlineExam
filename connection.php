<?php
    $con = @mysql_connect("localhost","root","root")
    or die(mysql_error());
    if($con)
    {
       $msg = "Success";
    }
    $db_name = "student";
    $table_name = "login";
	$tname = "account34";
	$admintable = "admin";
    $db = @mysql_select_db($db_name, $connection) or die(mysql_error());
    $admindb = "administration";
	$qtable = "quiz";
    $admindb1 = @mysql_select_db($admindb, $connection);
?>
<html>
<title> Database Connection </title>
<head> </head>
 <body>
 </body>
</html>