<html>
<head>
<title> Adding Another Admin </title>
<script language="javascript">
function check23()
{
	if(document.form1.admin1.value=="")
	{
		alert("Please Enter Login Id");
		 document.form1.admin1.focus();
		 return false;
	}
    if(document.form1.pass1.value=="")
	{
		alert("Please Enter Your Password");
		 document.form1.pass1.focus();
		 return false;
	}
	if(document.form1.pass1.value!=document.form1.pass2.value)
	{
		alert("password does not match");
		document.form1.pass2.focus();
		document.form1.pass2.value="";
		 return false;
	}
	return true;
}
</script>
</head>
<body bgcolor="lightpink">

<p> <center> <h1> <font color="Blue"> *** Welcome to adding new Admin *** </center></p>
<br> <br> <br> <br><br><br>
<table border="0" height="20%" align="center" width="40%">
<form name="form1" method="POST" action="addadmin1.php" onSubmit="return check23();">
  <tr>
  <td><h3> Login Name : </td>
  <td> <input type="text" name="admin1"> </td>
  </tr>
  <tr>
  <td><h3> Password : </td>
  <td> <input type="password" name="pass1"> </td>
  </tr>
  <tr>
  <td><h3> Confirm Password : </td>
  <td> <input type="password" name="pass2"> </td>
  </tr>
  <tr>
  <td>  </td>
  <td> <input type="submit" name="submit" value="Create"> <input type="reset" name="reset" value="Reset"> </td>
  </tr>
  </form>
  </table>
