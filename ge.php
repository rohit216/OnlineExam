<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Forget Password.</title>
	<script language="javascript">
	function checkdata()
	{
		if(document.form1.roll.value=="")
		{
			alert("Please enter Roll Number");
			document.form1.roll.focus();
			rerurn false;
		}
		if(document.form1.answer.value=="")
		{
			alert("Please enter Security Answer");
			document.form1.answer.focus();
			rerurn false;
		}
	        return true;
	}
	</script>
</head>
<body background="back34.jpg"><center><br><br><p> <b> <h1><font color="red" font face="Algerian">Enter your Roll Number and Security Answer to get your password.</font> </h1> </b></p><br><br><br>

<?
session_start();
?>
<br><br><table border="0">
<form name="form1" method="post" action="genpassword.php" onSubmit="return checkdata();">
<tr>
<td> <b><font color="black" size="4" font face="Times New Roman"> Roll Number: </b></font></td>
<td><input type="text" name="roll"> <br /> </td>
</tr>
<tr>
<td><b> <font color="black" size="4" font face="Times New Roman">Security Answer: </b></font></td>
<td><input type="text" name="answer"> </td>
<tr>
<td> </td>
<td><input type="submit" name="submit" value="Generate"></td>
</tr>
</table>
</form>
</body>
</html>