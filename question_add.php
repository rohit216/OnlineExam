<html>
<head>
<title> Adding Questions. </title>
<script language="javascript">
function check()
{
	if(document.form1.qname.value=="")
	{
		alert("Please Enter question name.");
		document.form1.qname.focus();
		return false;
	}
	
	if(document.form1.op1.value=="")
	{
		alert("Please Enter first option.");
		document.form1.op1.focus();
		return false;
	}
	
	if(document.form1.op2.value=="")
	{
		alert("Please Enter second option.");
		document.form1.op2.focus();
		return false;
	}
	
	if(document.form1.op3.value=="")
	{
		alert("Please Enter third option.");
		document.form1.op3.focus();
		return false;
	}
	
	  if(document.form1.op4.value=="")
	{
		alert("Please Enter forth option.");
		document.form1.op3.focus();
		return false;
	}
	if(document.form1.correct.value=="")
	{
		alert("Please Enter correct answer.");
		document.form1.correct.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body bgcolor="lightpink">
<p>
  <!marquee>  <center> <h1> <font color="blue"> *** Adding Questions to Database *** </center> 
  </p>
  <form name="form1" method="post" action="questionadd.php" onSubmit="return check();">
  <center>
  <br> <br> <br> <br> <br>
  <table width="50%" border="0">
  <tr>
  <td> <b>Category :</b></td>
  <td>
  <div class="form-group">
							    <select class="form-control" name="category" id="category">
							        <option value="">Choose your category</option>
                                  <option value="1">ENV</option>
                                  <option value="2">HTML</option>
                                  <option value="3">PHP</option>
                                  <option value="4">CSS</option>                                
                                </select>
								</td>
								</tr>
  <tr>
  <td align="top"> <b>Question: </td>
  <td> <textarea name="qname" value="qname1"> </textarea> </td>
  </tr>
  <tr>
  <td align="left"> <b>Option1: </td>
  <td align="left"> <input type="text" name="op1"> </td>
  </tr>
  <tr>
  <td align="top"> <b>Option2: </td>
  <td align="top"> <input type="text" name="op2"> </td>
  </tr>
  <tr>
  <td align="top"> <b>Option3: </td>
  <td align="top"> <input type="text" name="op3"> </td>
  </tr>
  <tr>
  <td align="top"> <b>Option4: </td>
  <td align="top"> <input type="text" name="op4"> </td>
  </tr>
  <tr>
  <td align="top"><b> Correct Answer: </td>
  <td align="top"> <input type="text" name="correct"> </td>
  </tr>
  <tr>
  <td align="top"> </td>
  <td><input type="submit" name="submit" value="Add">  <input type="reset" name="reset" value="Reset"> </td>
  </tr>
  
  </table>
  <center> <b> <h3> <a href="adminwork.php"> Go back </b> </h3> </a>
  </form>
  </center>
  </body>
  </html>
   
  
  