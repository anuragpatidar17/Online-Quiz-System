<?php


include("class/users.php");




$ans=new users;
$answer=$ans->answer($_POST);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quiz System</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">




<style>
#result{
	 font-family: 'Cinzel', serif;
    font-size: 45px;
}

#line{
	margin-left: -250px;
	margin-top: 10px;

}
body{
	background-color:#fbf7f5;
}

td{
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
	
</style>

</head>
<body>

	<center>
      <?php
      $total_qus=$answer['right']+$answer['wrong']+$answer['no-answer'];
      $attempt_qus=$answer['right']+$answer['wrong'];
      ?>

      <div class="container">
      	<div class="col-sm-2"></div>
      	<div class="col-sm-6">
  <h2 id="result">Quiz Results</h2>
  <h2 id="line">__________________________________________________________________________</h2>
  <br><br><br><br>
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total Number of Questions :</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted Questions</td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td>Right Answers</td>
        <td><?php echo $answer['right']; ?></td>
      </tr>
      <tr>
        <td>Wrong Answers</td>
        <td><?php echo $answer['wrong']; ?></td>
      </tr>
       <tr>
        <td>Not Attempt Questions</td>
        <td><?php echo $answer['no-answer']; ?></td>
      </tr>
       <tr>
        <td>Your Result</td>
        <td><?php 
$per=(floor(($answer['right']*100)/($total_qus)));
echo $per."%";
 ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="col-sm-4"></div>
</div>
</center>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <center><button onclick="myFunction()" type="button" class="btn btn-success">Print</button></center>
  
</div>
</div>
<div class="row">
<div class="col-sm-12">
 
   <center><button onclick="Log()" type="button" class="btn btn-info" style="margin-top: 20px;">Logout</button></center>
</div>
</div>
</div>

<script type= text/javascript>
function log()
    {

session_destroy();
 }



<script>
function myFunction() {
    window.print();
}
</script>



</body>
</html>