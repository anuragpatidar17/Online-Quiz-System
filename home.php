<?php

include("class/users.php");



$cpf=$_SESSION['cpf'];
$profile = new users;
$profile->users_profile($cpf);




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">


<style>
  body{
    background-color:#fbf7f5;
  }
  #startbutton{
    margin-top: 200px;
  }
  #headtag{
    font-family: 'Cinzel', serif;
    font-size: 50px;
  }
  
</style>
   
</head>
<body>

<div class="container">
 <center><h2 id="headtag">Online Quiz System</h2></center> 
  <br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">About</a></li>

    <li style= "float:right" id="menu3"><a data-toggle="tab" href="logout.php">Logout</a>
      <script type="text/javascript">
        document.getElementById("menu3").onclick = function(){
             location.href="index.php"
        };
        
        
      </script></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
   
   <center><button type="button" id="startbutton" class="btn btn-primary" data-toggle="tab" href="#select">Show  Category</button></center>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><br>
       <div id="select" class="tab-pane fade">
           <form method="post" action="qus_show.php">
      <select class="form-control" id="" name="cat">
        <option>Select Category</option>
        <?php
         $profile->cat_shows();
       
        foreach($profile->cat as $category)
        {?>
              <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name']; ?></option>
        
         <?php } ?>
      </select>
      <br>
     <center><input type="submit" value="Start Quiz" name="submit" class="btn btn-primary"></center> 
    </form>
    </div>
  </div>
   <div class="col-sm-4"></div>
 </div>

    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
         <th>CPF</th>
          <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($profile->data as $prof)
      { ?>

      <tr>
        <td><?php echo $prof['id']; ?></td>
        <td><?php echo $prof['name']; ?></td>
         <td><?php echo $prof['cpf']; ?></td>
          <td><?php echo $prof['email']; ?></td>
      </tr>
      
    </tbody>
    <?php }?>
  </table>







      
    </div>
    <div id="menu2" class="tab-pane fade">
      <h1 style="color:#B22222;">ONGC History</h1>
      <br>
      <h4 style="text-align:justify;">
        <li>Oil and Natural Gas Corporation Limited (ONGC) is an Indian multinational oil and gas company earlier headquartered in Dehradun, Uttarakhand, India. As a Corporation, it's registered office is now at Deendayal Urja Bhavan, Vasant Kunj, New Delhi 110070 India.</li><br>
       <li>It is a Public Sector Undertaking (PSU) of the Government of India, under the administrative control of the Ministry of Petroleum and Natural Gas.</li><br>
       <li>It is India's largest oil and gas exploration and production company. It produces around 70% of India's crude oil (equivalent to around 30% of the country's total demand) and around 62% of its natural gas.</li><br>

<li>On 31 March 2013, its market capitalisation was INR 57.2 trillion (US$billion), making it India's first largest publicly traded company.</li><br>
<li>In a government survey for fiscal year 2016-17, it was ranked as the largest profit making PSU in India.
It is ranked 11th among the Top 250 Global Energy Companies by Platts.</li><br>

<li>ONGC was founded on 14 August 1956 by Government of India, which currently holds a 68.94% equity stake.
 It is involved in exploring for and exploiting hydrocarbons in 26 sedimentary basins of India, and owns and operates over 11,000 kilometers of pipelines in the country. </li><br>
Its international subsidiary ONGC Videsh currently has projects in 17 countries.
 <li>ONGC has discovered 6 of the 7 commercially producing Indian Basins, in the last 50 years, adding over 7.1 billion tonnes of In-place Oil & Gas volume of hydrocarbons in Indian basins.</li><br>
  <li>Against a global decline of production from matured fields, ONGC has maintained production from its brownfields like Mumbai High, with the help of aggressive investments in various IOR (Improved Oil Recovery) and EOR (Enhanced Oil Recovery) schemes.</li><br>
   <li>ONGC has many matured fields with a current recovery factor of 25–33%.Its Reserve Replacement Ratio for between 2005 and 2013, has been more than one.</li><br>
    <li>During FY 2012–13, ONGC had to share the highest ever under-recovery of INR 8993.78 billion (an increase of INR 567.89 million over the previous financial year) towards the under-recoveries of Oil Marketing Companies (IOC, BPCL and HPCL).</li><br>
  <li>On 1 November 2017.the Union Cabinet approved ONGC for acquiring majority 51.11 % stake in HPCL (Hindustan Petroleum Corporation Limited).</li><br>
<li>On Jan 30th 2018, Oil & Natural Gas Corporation acquired the entire 51.11% stake of GOI.</li><br>
</h4>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
