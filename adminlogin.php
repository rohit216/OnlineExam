<html>
<head>
<title> </title>
</head>
<body bgcolor="lightblue">
<?php
if((!$_POST[admin]) || (!$_POST[pass123]))
{
	header("location: admin.php");
	 echo "Please Enter Details";
	 exit;
}
?>
<?php
    $connection = @mysql_connect('localhost', 'root', 'root','administration')
    or die(mysql_error());
    if($connection)
    {
      // $msg = "Success";
    }
    //$db_name = "student";
    //$table_name = "login";
	//$tname = "account";
	$admintable = "admin";
   // $db = @mysql_select_db($db_name, $connection) or die(mysql_error());
    $admindb = "administration";
    $admindb1 = @mysql_select_db($admindb, $connection);

         $adminquery = "SELECT * FROM $admintable WHERE username = '$_POST[admin]' AND password = '$_POST[pass123]' ";
		 $execute = @mysql_query($adminquery, $connection);
		 $num1 = mysql_num_rows($execute);
		 if($num1 != 0)
		 {
			  $msg = "Login Successfull";
			   header("location: adminwork.php");
		 }
		 else
		 {
			  $msgerror = "Login Unsuccessfull";
			  //echo "$msgerror";
		 }
	?>	
	  </body>
	     <p> <h3> <center> <br> <br> <?php 
		 echo "$msgerror"; ?> Please <a href="admin.php"> Click here </a> to retry... </h3> </p> </center>
	  </html>
         