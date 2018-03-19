<?php
session_start();
$_POST['user'];
$_SESSION["user"]=$_POST['user'];
//$user=$_SESSION["user"];
?>
<html>
<head> 
<title> </title>
</head>
<body bgcolor="lightblue">
<?php
//include("connection.php");

if (empty($_POST[user]) || empty($_POST[pass])) {
	 die('Incorrect login');
     header( "Location: login.php");
//exit;
}
$connection = @mysql_connect('localhost', 'root', 'root', 'student')
    or die(mysql_error());
    if($connection)
    {
       $msg = "Success";
    }
    $db_name = "student";
    $table_name = "login";
	//$tname = "account";
	//$admintable = "admin";
    $db = @mysql_select_db($db_name, $connection) or die(mysql_error());
    //$admindb = "administration";
    //$admindb1 = @mysql_select_db($admindb, $connection);

//$table_name = "login";
$sql = "SELECT * FROM $table_name WHERE rollnumber = '$_POST[user]' AND password = '$_POST[pass]' ";
$result = @mysql_query($sql, $connection);
  echo '<input type="hidden" name="user" value="$_POST[user]">';
$num = mysql_num_rows($result);
if($num == 0)
{
    $msg1 = "Login Unsuccesfull";
}
else
{
	$msg1="Login successfull";
	header("Location: student.php");
  
}
   
   ?>
 <p> <h3> <center> <br> <br>  <br> <br>
     <?php 
		 echo "$msg1"; ?> <br> Please <a href="login.php"> Click here </a> to retry... </h3> </p> </center>
</body>
</html>
