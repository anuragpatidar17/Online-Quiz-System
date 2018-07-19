

<html lang="en">
<head>
  <title>Online Quiz System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    body{
  background-image:url("Images/final.jpeg");
  background-size: cover;
}
#leftpanel{
  margin:30px 100px 30px 100px;
}

#rightpanel{
  margin:30px 80px 30px 80px;
}

#ongc-text{
  margin-left:-60px;
  margin-top:40px;
  font-size: 2px;
  color:#B22222;
  font-weight:bold;
  
} 

#cpf{
  font-weight: bold;
}
#pwd{
  font-weight: bold;
}
#name{
  font-weight: bold;
}
#email{
  font-weight: bold;
}





  </style>
</head>
<body>


  <div class="container">
    <div class="row">
       <div class="col-sm-2">
        <br>
      <img src="Images/ongc.jpeg">
    </div>
    <div class="col-sm-8" id="ongc-text">
      <br>

    <h1>Oil and Natural Gas Corporation Limited</h1>
  </div>

      
     
        
</div>
</div>
</div>

<br>
  
<div class="container">
    <div class="row">
    <div class="col-sm-6">

  <div class="panel panel-info" style="background:#fffff0;" id="leftpanel">
    
    <div class="panel-heading" style="font-size:25px;">Login</div>
    <div class="panel-body">

       <?php

            if (isset($_GET['run']) && $_GET['run']=="failed")
            {
              echo "<mark>Your CPF or password is not your correct.</mark>";
            }

            ?>

 <form role="form" method="post" action="signin_sub.php">
    <div class="form-group">
      <label for="CPF">CPF No:</label>
      <input type="number" class="form-control" id="cpf" placeholder="Enter CPF No." name="c">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
</div>


<div class="col-sm-6">

  <div class="panel panel-info"  style="background:#fffff0;" id="rightpanel">
    
     <div class="panel-heading" style="font-size:25px";>Signup</div>  
          <div class="panel-body">
            <?php

            if (isset($_GET['run']) && $_GET['run']=="success")
            {
              echo "<mark>Sign Up Successfully done.</mark>";
            }

            ?>

 <form role="form" method="post" action="signup_sub.php">
  <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter your Name" name="n">
    </div>
    <div class="form-group">
      <label for="CPF">CPF No:</label>
      <input type="number" class="form-control" id="cpf" placeholder="Enter your CPF No." name="c">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
  
    <button type="submit"class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
</div>
</div>
</div>

</body>
</html>
