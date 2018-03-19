<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Untitled 1</title>
     <script type="text/javascript">
      function check()
      {
        if(document.form1.npass.value!=document.form1.rpass.value)
        {
            alert("Password doesn't match.");
            document.form1.npass.focus();
            document.form1.npass.value="";
            document.form1.rpass.value="";
            return false;
        }
        return true;
      }
    </script>
</head>

<body background="back34.jpg">
<center>
<br><br><br>
      <p><h2> <font color="red"> *** Change Password Wizard *** </p> </h2> </font>
      <table border="0">
    <form name="form1" method="post" action="chpass.php" onsubmit="return check();">
	<tr>
	
<td><b>   Roll No : </td> <td> <input type="text" name="roll_no" required="numeric" placeholder="Enter your roll_no"> </td></tr><br /> <br />
<tr>
   <td><b>Old Password : </td><td><input type="password" name="opass" required="numeric"></td> </tr>
   <tr>
   <td><b>New Password :</td> <td><input type="password" name="npass" required="numeric"></td></tr>
   <tr>
   <td> <b>Re-type Password :</td> <td> <input type="password" name="rpass" required="numeric"> </td></tr>
   <tr><td> </td>
   <td><input type="submit" name="submit" value="Change Password"></td> </tr> 
   </form>
   
   </table>
    <center> <a href="student.php"> <b> <h4> Go back </b> </h4></a> </center>
</body>
</html>