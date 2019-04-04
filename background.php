<?php
session_start();
?>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/customStyle.css" rel="stylesheet" />
    <style type="text/css">
    body{
        background: url("images/h0.jpg");
        background-size: cover;
    }
    h1,h4,p{
        color: white;   
    }
    </style>
  </head>
  <body>
  <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark bg-info  fixed-top">
        <div class="container">
            
            <a class="navbar-brand" href="index.php">Pata Keja</a>
            <div class="collapse navbar-collapse" id="collapseEx2">
               <form class="navbar-form navbar-right" role="search">
    <div class="input-group">  
       <input type="text" class="form-control" placeholder="Search for Hostel" />
      <span class="input-group-btn">
        <button type="submit "class="btn btn-default">Search</button>
      </span>
        
      </div>


  </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
  <div class="container">
  <div class="row">
  <div align="center">
      <h1 class="h1-responsive">Welcome to pata keja</h1>
        <h4>The fastest way to get a hostel</h4>
        <br>
      <a href="register.php" class="btn btn-info btn-md">Sign up!</a> Or
      <a href="login.php" class="btn btn-success btn-md">Login</a>
  </div>
      
  </div>
      
  </div>
    

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootsrap/js/bootstrap.min.js"></script>
   
  </body>
</html>

