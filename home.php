<?php
session_start();
if (!$_SESSION['username']){
  header("location:login.php");
}
include "database.php";
 

 
?>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PataKeja-Online</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/customStyle.css" rel="stylesheet" />
    <link href="customeStyle.css" rel="stylesheet">
    <style type="text/css">
    body{
        background-image: url("images/18.jpg");
        background-size: cover;
        padding-top: 70px;
    }
    h1,h4,p{
        color: white;   
    }
    #footer{
    padding-bottom: 200px;
    position: fixed-bottom;
    background-color: gray;
    margin: 0px;
    height: 40px;
    clear: both;
    font-size: 90%;
    text-align: center;
text-align:center;
margin-top:2px;
width:100%;
height:inherit;
background-color:#4d4d4d;
padding-bottom:5px;

   }
   #footer ul{
    padding: 5px;
    list-style-type: none;
    text-align: center;
    margin: 10px;
    border-radius: 5px;
   }
   #footer ul li{
      display: inline;
      padding: 10px;
   }
   
   #footer ul li a{
      text-decoration: none;
      font-family: Arial;
      color: black;
   }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top" id="navigation" style="opacity:0.9;color:grey;">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand waves-effect waves-light" href="home.php">
    <img style="padding:0px;" class="img-fluid" width="120px" height="60px" src="images/pata3.jpg"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <ul class="nav navbar-nav"> 
      <li><a href="home.php">View Hostels</a></li>
      <li><a href="maccount.php">My Account</a></li>
      <li><a href="About.php">About Us</a></li>
      <li><a href="Contact.php">Contact</a></li>
       <li><a href="logout.php">Logout</a></li>
  </ul>
         
          <ul class="dropdown-menu">
      <li><a href="home.php">View Hostels</a></li>
      <li><a href="maccount.php">My Account</a></li>
      <li><a href="About.php">About Us</a></li>
      <li><a href="Contact.php">Contact</a></li>
       <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

    
      <form action="search.php" method="POST" class="navbar-form navbar-right" >
    <div class="input-group">  
       <input type="text" class="form-control" name="hostelname" placeholder="Search for Hostel" />
      <span class="input-group-btn">
        <input  type="submit" name="searchnow" class="btn btn-inverse" value="Search" />
      </span>
        
      </div>


  </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
    </nav>
    <div class="container" style="width:100%;">
    <h3 align="center">Hostels</h3><br />
    <div class="row col-lg-12 col-md-10 ">
      <?php 
       require 'database.php';
      $sql = "SELECT * FROM hostel";
      $result = mysqli_query($connect,$sql);
      if (mysqli_num_rows($result)>0) {

          while ($row= mysqli_fetch_array($result)) {
            $image = $row["image"];
            $image = explode('../', $image);
            $img ='./'.$image[1];
      ?>
      
        <div class="col-md-2 col-sm-5">
        <div style="border:1px solid#333; background-color:#b8bec4; border-radius: 5px; opacity:0.95s">
      
        <form method="post" action="book.php">
        <div style="padding: 5px;" align="center">
          <img class="responsive" src="<?php echo $img;?>" style="height: 150px; width: 150px; border-radius: 5px;"/>
          <h4 class="text-info"><?php echo $row["name"];?></h4>
          <h4 class="text"> Ksh. <?php echo $row["price"];?></h4>
          <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
          <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
          <input type="submit" name="book" style="margin-top: 5px;" class="btn btn-info" value="Book Now!">
        </div>
          

        </form>
      
       </div>
      </div>

      
      
      <?php 
          }
        }
       ?>
       </div>
       <div class="row">
         <div class="table-responsive col-md-6">
        
       </div>

       </div>
       

    </div>
   

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootsrap/js/bootstrap.min.js"></script>
  <!--  <div id="footer">
<ul>
   <li><a href="index.php"> Home</a></li>
     <li><a href="contact.php">Contact</a></li>
     <li><a href="about.php">About Us</a></li>
   </ul>
  &copy; Copyright 2017 Pata Keja | All Rights Reserved
</div>/*-->
  </body>
</html>

