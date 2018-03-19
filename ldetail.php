<?php

?>
<html>
<head>
<title> login detail </title>
<script language="javascript">
 function checkdata()
 {
	 if(document.form2.user1.value=="")
	 {
		 alert("Please enter your rollnumber");
		 document.form2.user1.focus();
		 return false;
	 }
	 if(document.form2.pass1.value=="")
	 {
		 alert("Please enter your Password");
		 document.form2.pass1.focus();
		 return false;
	 }
	 if(document.form2.pass1.value!=document.form2.pass2.value)
	 {
		 alert("Password does not match.");
		  document.form2.pass2.value="";
		  document.form2.pass2.focus();
		  return false;
	 }
	 return true;
	 
 }
 </script>
</head>
<body background="back34.jpg">
 <br> <br><h1> <center> <marquee> <font color="blue">Please enter your roll number and Password here to create Account... </marquee> </h1> </font> </center>
<center>
<!fieldset style="backface-visibility: visible;">
<table name="usertable" border="0" height="">
<form name="form2" method="post" action="addldetail.php" onSubmit="return checkdata();">
<tr>
<td class="style7"><label><b> <font color="black"> Roll NO  : </label> </td>
<td class="style7"><input type="text" name="user1"> <span class="error"></span> </td> <br>
</tr>
<tr>
<td class="style7"><div align="left"><label><b> <font color="black"> Password : </label> </td>
<td clas="style7"><input type="password" name="pass1"> </td> 
</tr>
<tr>
<td class="style7"><label><b> <font color="black"> Re-type Password : </label> </td>
<td class="style7"><input type="password" name="pass2">  </td><br /> 
</tr>
<tr>
<td> <label> <b> <font color="black"> Security Question : </label> </font> </b> </td>
<td> <select name="answer">
      <option value=""> ---Select Question--- </option>
     <option value="abc"> What is your Mobile Number? </option>
	 <option value="abc"> What is your Name? </option>
	 <option value="abc"> What is your Mother's name? </option>
	  <option value="abc"> What is your favourite game? </option>
	   <option value="abc"> What is your favourite subject? </option> </td>
	   </tr>
<tr>
<td> <label> <b> <font color="black"> Security Answer: </label> </font> </b> </td>
<td> <input type="text" name="answer"> </td>
<tr>
<td align="right"><input type="submit" name="submit" value="Create"> </input> </td><td><input type="reset" name="reset" value="Reset"> </td> 
   <br> <br>
</tr>
<!tr>

</form> </table> <br> </center>
</body>
</html>