<?php
include("class/users.php");



$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;



?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Quiz System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
  <script type="text/javascript">
  	function  timeout()
  	{
  		var minute=Math.floor(timeLeft/60);
  		var second=timeLeft%60;
  		var mint=checktime(minute);
  		var sec=checktime(second);
  		if(timeLeft<=0)
  		{
  			clearTimeout(tm);
  			document.getElementById("form1").submit();
  		}
  		else
  		{
  			document.getElementById("time").innerHTML=mint+":"+sec;
  		}
            timeLeft--;
            var tm= setTimeout(function(){timeout()},1000);
  	}
  	function checktime(msg){

  		if(msg<10)
  		{
  			msg="0"+msg;
  		}
  		return msg;

  	}
  	
  </script>
  <style>
  	#wish{
  		 font-family: 'Cinzel', serif;
    font-size: 30px;

  	}

  #line{
  	margin-left: -200px;
  	margin-top: 10px;
  }
  body{
  	background-color:#fbf7f5;

  }
  #submitbutton{
  	margin-bottom: 20px;
  }
  </style>
</head>
<body onload="timeout()">

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h3 id="wish">All the Best!
  	<script type="text/javascript">
  		var timeLeft=0.3*60;
</script>
  	<div id="time" style="float: right;">timeout</div></h3>
  <h2 id="line">___________________________________________________________________</h2>
  	<br>
<?php 
  $i=1;
  foreach($qus->qus as $qust) {?>
  	<form method="post" id="form1" action="answer.php">
                          
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
         <th><?php echo $i; echo ")" ?>&emsp;<?php echo $qust['question']; ?></th>
      </tr>
    </thead>
    <tbody>
    	<?php if(isset($qust['ans1'])) {?>
    <tr class="active">
        <td>&nbsp;1&emsp;<input type="radio" value="0 "name="<?php echo $qust['id']; ?>"/>&nbsp;&nbsp;<?php echo $qust['ans1'];?></td>
       </tr>
   <?php }?>
       <?php if(isset($qust['ans2'])) {?>
     <tr class="active">   
     	<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>"/>&nbsp;&nbsp;<?php echo $qust['ans2'];?></td>
       </tr>

   <?php }?>
       <?php if(isset($qust['ans3'])) {?>
  <tr class="active">
        <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>"/>&nbsp;&nbsp;<?php echo $qust['ans3'];?></td>
       </tr>

   <?php }?>
       <?php if(isset($qust['ans4'])) {?>
   <tr class="active">
        <td>&nbsp;4&emsp;<input type="radio" value="3"  name="<?php echo $qust['id']; ?>"/>&nbsp;&nbsp;<?php echo $qust['ans4'];?></td>
       </tr>

   <?php }?>
   <tr class="danger">
        <td><input type="radio" checked="checked"
        	style="display: none; "value="no_attempt"  name="<?php echo $qust['id']; ?>"/></td>
       </tr>
      
    </tbody>
  </table>
<?php $i++; } ?>
<center><input type="submit" value="submit Quiz" id="submitbutton" class="btn btn-success"></center>
</form>
</div>
<div class="col-sm-2"></div>
</div>


<script type="text/javascript">
	window.onbeforeunload = function () {
    if (someConditionThatIndicatesIShouldConfirm) {
 return "If you reload this page, your previous action will be repeated";
    } else {
        //Don't return anything
    }
}
</script>

</body>
</html>
