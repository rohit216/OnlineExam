<html>
<head>
<title> Online Examination Sysem </title>
</head>
<body background="back34.jpg">
<br> 
  <p><font color="red"><h1> <center> *** Exam Result *** </p> </h1> </font> </center>
<center><br> <br><br><br><br><br><br>
<table border="0">
<?
session_start();
?>
<?php
 $con = @mysql_connect("localhost","root","root")
    or die(mysql_error());
	 $admindb = "administration";
    $admindb1 = @mysql_select_db($admindb, $con);
 $sql="SELECT id,user_name,score FROM users WHERE id='$_POST[roll_no]'";
  $result=@mysql_query($sql,$con);
   while($row=@mysql_fetch_array($result))
   {
	   $id=$row['id'];
	   $name=$row['user_name'];
	   $score=$row['score'];
	   	  
   }
   if($id==$_POST['roll_no'])
	   {
	  print "<tr>";
	  print "<td><b><p> <h3> Your Roll No : $id</b> </p></td>";
	  print "<tr><td><b><p> <h3>Your Name : $name</b> </p></td></tr>";
	  print "<tr><td><p> <b><h3>Your Marks : $score</p> </b></td>";
	  print "</tr>";
	   }
   else if($id!=$_POST['roll_no'])
	  {
	     print "<b><p> <h3> <font color='red'>Please Check Your Roll Number.</p><p>You are not able to view result.</p><p>Please Give Exam.</p></b></h3>";
	  }
   
  ?>
  </center>
  </table>
  </fieldset>
  </body>
  </html>