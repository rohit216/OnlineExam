<html>
<head>
<title> Adding question script </title>
</head>
<body bgcolor="lightblue">
  <?php
       $connection = @mysql_connect('localhost', 'root', 'root', 'administration')
    or die(mysql_error());
    if($connection)
    {
       $msg34 = "Success";
    }
 
    //$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
   $admindb = "administration";
   $admindb1 = @mysql_select_db($admindb, $connection);
   $qtable = "quiz";
	 
	         $query = "INSERT INTO $qtable (question, op1, op2, op3, op4, correct,category_id) VALUES ('$_POST[qname]', '$_POST[op1]', '$_POST[op2]', '$_POST[op3]', '$_POST[op4]', '$_POST[correct]','$_POST[category]')";
			 $result = @mysql_query($query, $connection);
			 if($result)
			 {
				 $msg = "Question added successfully.";
			 }
			 else
			 {
				echo "No Question is added";
			 }
			 ?>
			   <br> <br> <br> 
			 <?php
			    echo "<center> <h3> $msg  </center> </h3>";
              ?>
          			  
			<center><b> <h3> To add more <a href="question_add.php"> Click here </a> 
			 </body>
			 </html>
	       