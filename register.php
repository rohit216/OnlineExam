<!DOCTYPE HTML>
  
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title> Account Creation Window</title>
	<link href="quiz.css" rel="stylesheet" type="text/css">
	<script language="javascript">
	function check()
	{
		if(document.form1.fname.value=="")
		{
			alert("Please Enter First name.");
			document.form1.fname.focus();
			return false;
		}
		if(document.form1.lname.value=="")
		{
			alert("Please Enter Last name.");
			document.form1.lname.focus();
			return false;
		}
		if(document.form1.address.value=="")
		{
			alert("Please Enter valid address.");
			document.form1.address.focus();
			return false;
		}
		if(document.form1.city.value=="")
		{
			alert("Please Enter your city.");
			document.form1.city.focus();
			return false;
		}
		if(document.form1.phone.value=="")
		{
			alert("Please Enter MObile Number.");
			document.form1.phone.focus();
			return false;
		}
		 if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.value="";
			document.form1.email.focus();
			return false;
		}
  return true;
  }
	
	</script>
</head>

<body background="ANIMATE.jpg">
<h1><marquee> <b> <font color="#F2A345">Account creation details for Student login </b></marquee></h1> </red>
<table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="connected_multiple_big.jpg" width="131" height="155"></span></td>
     <td width="468" height="57"><h1 align="center"><span class="style8"> <b> <font color="yellow">New User Signup</font></b></span></h1></td>
   </tr>
   <tr>
     <td><form name="form1" method="POST" action="account.php" onSubmit="return check();">
       <table width="301" border="0" align="center">
	   <center>
	    <tr>
           <td> <div align="left" class="style7"> <b><font color="black"> Roll No: </div></td>
           <td> <input type="text" name="user"></td>
         </tr>
         <tr>
           <td> <div align="left" class="style7"> <b><font color="black"> First_Name: </div></td>
           <td> <input type="text" name="fname"></td>
         </tr>
         <tr>
           <td class="style7"><b><font color="black">Last_Name:<br></td>
           <td> <input type="text" name="lname"></td>
         </tr>
         <tr>
          
         <tr>
           <td valign="top" class="style7"><b><font color="black">Address:<br></td>
           <td><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7"><b><font color="black">City:<br></td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7"><b><font color="black">Mob No:<br></td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7"><b><font color="black">E-mail:<br></td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
		  <tr><td> </td>
         <td> <input type="submit" name="Submit" value="Signup">
		<input type="reset" name="reset" value="Reset"> </td>
			 </tr>
         <tr> </b>
           <td>&nbsp;</td>
		   </tr> </table>
		   
         
       </center>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>