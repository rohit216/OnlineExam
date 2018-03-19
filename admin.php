<html>
<head>
<title> Administration Login </title>
<script language="javascript">
function check()
{
	if(document.form1.admin.value=="")
	{
		alert("Please Enter Login ID");
		  document.form1.admin.focus();
		  return false;
	}
	 if(document.form1.pass123.value=="")
	 {
		  alert("Please Enter your password");
		    document.form1.pass123.focus();
			return false;
	 }
	 return true;

}
</script>
</head>
<body background="ANIMATE.jpg">
<center><br><br><br><br><font color="yellow"><h1>Administrator Login </h1>
<br><br><br><fieldset style="backface-visibility: invisible;">
<form name="form1" method="post" action="adminlogin.php" onSubmit="return check();">
<label><b> <font color="Black">Login ID  : </label><input type="text" name="admin"> <span class="error"></span> <br /> <br />
<label><b> Password :</label><input type="password" name="pass123"> <br /> <br /></font>
<input type="submit" name="submit" value="Login"> </input>
<input type="reset" name="reset" value="Reset"> 
   <br> <br>
</form>
</center>
</body>
</html>