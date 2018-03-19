<?php
session_start();
?>
<?php 
require 'config.php';
$category='';
 if(!empty($_POST['name'])){
     $name=$_POST['name'];
	 $roll_no=$_POST['roll_no'];
     $category=$_POST['category'];
     mysql_query("INSERT INTO users (id, user_name,score,category_id)VALUES ('$roll_no','$name',0,'$category')") or die(mysql_error());
     $_SESSION['name']= $name;
     $_SESSION['id'] = mysql_insert_id();
 }
$category=$_POST['category'];
if(!empty($_SESSION['name'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Examination System.</title>
		<div id="timer" style="font-weight: bold"> </div>
    <script type="text/javascript">
      var totalseconds = 60*5;
      var minutes = parseInt(totalseconds/60);
      var seconds = parseInt(totalseconds%60);
      function checktime()
      {
        document.getElementById("timer").innerHTML = ' Time left: ' + minutes + ' minutes ' + seconds + ' seconds ' ;
			if(totalseconds <= 0)
			{
				setTimeout('document.form1.submit()',1);
				alert("Time Up");
			}
			else
			{
				totalseconds = totalseconds - 1; 
		        minutes = parseInt(totalseconds/60);
		        seconds = parseInt(totalseconds%60);
				setTimeout("checktime()",1000);
			}
      }
        setTimeout("checktime()",1000);
    </script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="css/TimeCircles.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.container {
				margin-top: 110px;
			}
			.error {
				color: #B94A48;
			}
			.form-horizontal {
				margin-bottom: 0px;
			}
			.hide{display: none;}
		</style>
		
	</head>
	<body>
	    <header>
            <p class="text-center">
              <b>  Welcome : <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?>
            </p></b>
        </header>
        
		<div class="container question">
			<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
				<p>
					<h1> <b> <font color="red">Online Examination System.</h1> </font> </b>
				</p>
				<hr>
				<form class="form-horizontal" role="form" id='login' method="post" action="result.php" name="form1">
					<?php 
					$res = mysql_query("select * from quiz where category_id=$category ORDER BY RAND()") or die(mysql_error());
                    $rows = mysql_num_rows($res);
					$i=1;
                while($result=mysql_fetch_array($res)){?>
                    
                    
                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value='<?php echo $result['op1'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op1'];?>
                   <br/>
                    <input type="radio" value='<?php echo $result['op2'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op2'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op3'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op3'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op4'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
                    </div>     
                      
                     <?php }elseif($i<1 || $i<$rows){?>
                     
                       <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value='<?php echo $result['op1'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op1'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op2'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op2'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op3'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op3'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op4'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
                    </div>
                       
                       
                       
                        
                        
                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value='<?php echo $result['op1'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op1'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op2'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op2'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op3'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op3'];?>
                    <br/>
                    <input type="radio" value='<?php echo $result['op4'];?>' id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['op4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    
                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
					<?php } $i++;} ?>
					
				</form>
			</div>
		</div>
       <footer>
            <p class="text-center" id="foot">
                &copy; <a href="http://www.gpkolhapur.org.in/" target="_blank">GPKP</a>2016
            </p>
        </footer>


<?php

if(isset($_POST[1])){ 
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   
   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
   
   $response=mysql_query("select id,correct from quiz where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
   while($result=mysql_fetch_array($response)){
       if($result['correct']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
			   //if($result['correct']==$_POST[$result['id']])
               $wrong_answer++;
           }
       
   }
   
   
   echo "right_answer : ". $right_answer."<br>";
   echo "wrong_answer : ". $wrong_answer."<br>";
   echo "unanswered : ". $unanswered."<br>";
}
?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		
	
		<script>
		$('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');
		 
		 $(document).on('click','.next',function(){
		     last=parseInt($(this).attr('id'));     
		     nex=last+1;
		     $('#question'+last).addClass('hide');
		     
		     $('#question'+nex).removeClass('hide');
		 });
		 
		 $(document).on('click','.previous',function(){
             last=parseInt($(this).attr('id'));     
             pre=last-1;
             $('#question'+last).addClass('hide');
             
             $('#question'+pre).removeClass('hide');
         });
         
         
		</script>
		<script>
		Countdown(2000,"");
	</body>
</html>
<?php }else{
    
 header( 'Location: index34.php' ) ;
      
}
?>