<?php
session_start();
 extract($_POST);
?>
<html>
<head>
<title> Exam Creation </title>
</head>
<center>
<body background="back34.jpg">
<br><br><br
<p> <h1> <font color="red"> *** Exam Creation *** </p> </h2> </font>
<br><br><br><br><br>
<center>
<fieldset style="backface-visibility: visible;">
<table name="usertable" border="0" height="">
<form name="form2" method="post" action="exam.php">
<tr>
<td class="style7"><label><b> <font color="black"> Exam Name  : </label> </td>
<td class="style7"><input type="text" name="exam" required="text"> <span class="error"></span> </td> <br>
</tr>
<tr>
<td class="style7"><div align="left"><label><b> <font color="black"> Total Marks : </label> </td>
<td clas="style7"><input type="text" name="marks" required="numeric"> </td> 
</tr>
<tr>
<td class="style7"><label><b> <font color="black"> Time : </label> </td>
<td class="style7"><input type="text" name="time" required="numeric"> (In minutes)  </td><br /> 
</tr> 
<tr>
<td></td>
<td class="style7"><input type="submit" name="submit" value="Create">
<input type="reset" name="reset" value="Reset"> </td>
</tr>
</table>
</body>
</html>
