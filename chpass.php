<?php
print "<body background='back34.jpg'><br><br><br><br>";
$submit=isset($_POST['submit']);
$con=@mysql_connect("localhost","root","root") or die(mysql_error());
 $database = "student";
 $table = "login";
 $dt=@mysql_select_db($database,$con);
  $rnumber=$_POST['roll_no'];
  $old=$_POST['opass'];
  $new=$_POST['npass'];
  $retype=$_POST['rpass'];
   $sql1="SELECT *FROM login";
   $result1=@mysql_query($sql1,$con);
   
    if($row1=@mysql_fetch_assoc($result1))
    {
		 if((strlen($new)<4))
		{
			echo "<br><br><br><b> <h3><center><font color='red'>Password must be atleast 8 digits.</h3> </b>";
			echo '<center><a href="chpassword.php">Click here </a> <b> <h4>to try again...</h4></center>';
		}
		else{
       $sql="UPDATE login SET password='$new' WHERE rollnumber='$rnumber'";
         $result=@mysql_query($sql,$con);
         echo "<br><br><br><b> <h2><center>Password Changed Successfully<br></h2> </b>";
		  echo "<b> <h2><center><font color='red'>Your new Password : $new </font> </b> </h2>";
		echo '<center><a href="student.php"><h3>Click here</h3> </a> <b> <h3>to go back...</h3></center>';
		}
    }
         else{
			 echo "<br><br><br><b> <h3><center><font color='red'>There is error while updating password.</h3> </b>";
			echo '<center><a href="chpassword.php">Click here </a> <b> <h4>to try again...</h4></center>';
		 }			 
    
   
?>