<?
session_start();
$_SESSION["user"];
?>
<html>
<head>
<title> Student Exam Page.</title></head>
<body background="back34.jpg">
<br>
<a href="logout1.php"><img src="logout34.jpg" height="50" width="120" align="right"> </a><br><p>
</P><img src="college.jpg" height="400" width="300" align="left">
<p>
<center><h1> *** Student Activity Page *** </h1></center>
<div>
<form method="post" action="startexam.php">


<br> <br><br><center>
<table border="0">
<tr>
<br> <p align="left">
   <td><h3><a href="chpassword.php"><font color="red">Change Password</a></td>
   </tr>
   <tr>
   <td><h3>
  <a href="profile.php"><font color="red"> View Profile </td>
   </tr>
   <tr>
   <td><h3><a href="viewexam.php"><font color="red">View Exam </td>
   </tr>
   <tr>
   <td>
 <b> <input type="submit" name="submit" value="Go to Exam"> </td> </tr>
 </table>
 </p>
 </div>
  </form>
  </center>
</body></html>