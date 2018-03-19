
<?php
session_start("20");
 ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Login window</title>
	<script language="javascript">
	function check34()
	{
		if(document.form1.user.value=="")
		{
			alert("Please enter your Roll_No");
			document.form1.user.focus();
			return false;
		}
		if(document.form1.pass.value=="")
		{
			alert("Please Enter your password");
			document.form1.pass.focus();
			return false;
		}
		return true;
	}
	</script>
</head>

<body background="FGG.jpg" width="1500">
<center>
<h1><b><br><br><font color="red"> ***Student Login***</font></b></h1>
<p><span class="error"></span></p><br /> <br /> <br />
<fieldset style="backface-visibility: visible;">
<table border="0">
<form name="form1" method="post" action="login_test.php" onSubmit="return check34();">
<font color="red">
<tr>
<td><label><b>Roll NO  : </td>
<td></label><input type="text" name="user"> <span class="error"></span> </td>
</tr>
<tr>
<td><label><b> Password :</label></td> 
<td><input type="password" name="pass"> </td> 
</tr>
<tr>
<td> </td>
<td><input type="submit" name="submit" value="Login"> </input> 
<input type="reset" name="reset" value="Reset"> </td>
</tr>
<tr> 
<td> </td>
<td><a href="ge.php"> <b>Forget Password </b> </a> </td>
</tr>
 </font>
</form> <br>
  <form name="form2" method="post" action="Login.php">
  <tr>
  <td> </td>
  <td><a href="register.php"> <b>Register Now</b><!img src="register.jpg" align="center" height="50" width="100"> </a> </td>
  </tr>
  </form>
  </fieldset>
  </table>
</body>
</center>
</html>
