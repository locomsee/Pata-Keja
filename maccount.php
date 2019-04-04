<?php 
session_start();
if (!$_SESSION['username']){
  header("location:login.php");
}
include "header.php";
include "database.php";
 ?>
 <div class="container">
 	<div class="row">
     <div class="col-md-6 col-md-offset-2">
 			<div class="panel panel-info panel-sm">
<div class="panel-heading">
  <h4 class="panel-title" >My account Details</h4>
</div>
<form method="post" action="delete.php">
 <?php
 $name=$_SESSION['username'];
  $query= mysqli_query($connect,"SELECT * FROM acc_details WHERE acc_username='$name'");
  while($row=mysqli_fetch_assoc($query)){

   $usename=$row['acc_username'];
   $balance=$row['acc_balance'];
   }
  
  $qry= mysqli_query($connect,"SELECT * FROM booking WHERE username='$name'");
  if (mysqli_num_rows($qry)) {
      while($row=mysqli_fetch_assoc($qry)){

     $username=$row['username'];
     $hostel=$row['hostelname'];
     $room=$row['room'];
   }
     
     echo "<div class='panel-body'>
     <h5> Logged in as : <strong>".$usename."</strong></h5>
     <h5> Account Balance: <strong>".$balance."</strong></h5>
     <h5> Hostel Booked: <strong>".$hostel."</strong></h5>
     <h5> Number of rooms: <strong>".$room."</strong></h5>
     
     </div>
     <input type=\"submit\" name=\"delete\" value=\"delete\" class=\"btn btn-danger\">";
    ;
  }else{
    echo "<div class='panel-body'>
     <h5> Logged in as : <strong>".$usename."</strong></h5>
     <h5> Account Balance: <strong>".$balance."</strong></h5>
     
     <h5> Number of rooms: <strong> No room booked</strong></h5>
     
     </div>
     ";
  }
  



  ?>
  
  </form>
 
    
        </div>
 	</div>
 </div>

    </div>
    </div>

    
    </div>
    </div>
   
    
        </div>
</div>
 		</div>

 		