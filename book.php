<?php 

session_start();

include "header.php";
include "database.php";


 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-5 col-md-offset-3">
 			<div class="panel panel-info panel-sm">
<div class="panel-heading">
  <h4 class="panel-title" >book your hostel now</h4>
</div>
  <div class="panel-body">
 <form method="post" action="book.php">
 <?php 
 $username=$_SESSION['username'];

if (isset($_POST['book'])) {
	
	$_SESSION['price'] = $_POST['hidden_price'];
	 $_SESSION['hname'] = $_POST['hidden_name'];
	}
	?>
<div class='form-group'>
   <input class='form-control' type='text' name="usename" value="<?php echo $username;?>" disabled='disabled'/>
   <input type="hidden" value="<?php echo $username;?>" name="username">
    </div>
    <div class='form-group'>
   <input class='form-control' type='text' name='hnme' value="<?php echo $_SESSION['hname'];?>" disabled='disabled' />
   <input type="hidden" value="<?php echo $_SESSION['hname'];?>" name="hname">
    </div>
    <div class='form-group'>
   <input class='form-control' type='text' name='prce' value="<?php echo $_SESSION['price'];?>" disabled='disabled'/>
   <input type="hidden" value="<?php echo $_SESSION['price'];?>" name="price">
    </div>
    <div class='form-group'>
   <input class='form-control' type='text' name='rom' value='1' disabled='disabled'/>
   <input type="hidden" value="1" name="room">
    </div>
    <input type="submit" name="submit" value="Book Now" class="btn btn-success">
   
  
    
    </form>
        
        </div>
</div>
 		</div>
 	</div>
 </div>
 <?php
 require_once "database.php";
if (isset($_POST['submit'])) {
	$hname = $_POST['hname'];
	$username = $_POST['username'];
	$price = $_POST['price'];
	$room = $_POST['room'];
	$rvalue = '';

	$stmt = mysqli_query($connect,"SELECT * FROM booking WHERE username='$username'");
	$balance = mysqli_query($connect,"SELECT acc_balance FROM acc_details WHERE acc_username='$username'");
	if (mysqli_num_rows($stmt) > 0) {
		echo "<script>alert('You have already booked a room')</script>";
  echo "<script>window.open('home.php','_self')</script>";
		
		exit();
	}else{
		#die('hit here');
		$sql2 = "SELECT numrooms from hostel WHERE name='$hname'";
		$res = mysqli_query($connect,$sql2);
		while ( $data = mysqli_fetch_assoc($res)) {
			$x = $data['numrooms'];
		}
		
		if ($x > 0) {
		while ($data = mysqli_fetch_array($balance)) {
		$bal = $data['acc_balance'];
	}
	 if ($bal >= $price) {
	 $newbal = $bal - $price;
	$sql = "INSERT into booking(`hostelname`,`room`,`username`,`price`) VALUES ('$hname','$room','$username','$price')";
	
	if (mysqli_query($connect,$sql)) {
		$sql2 = "SELECT numrooms from hostel WHERE name='$hname'";
		if($res = mysqli_query($connect,$sql2)){
			while($data = mysqli_fetch_assoc($res)){

				$rvalue = $data['numrooms'];
				if ($rvalue<=0) {
					echo "no rooms available";
					echo mysqli_error($connect);
					exit();
				}
				else
				{
				 if ($bal >= $price) {
				}
	 $newbal = $bal - $price;
	$sql = "INSERT into booking(`hostelname`,`room`,`username`,`price`) VALUES ('$hname','$room','$username','$price')";
			}
			$rvalue-=1;
			$sql3 = "UPDATE hostel SET numrooms='$rvalue' WHERE name='$hname' ";
			if (mysqli_query($connect,$sql3)) {
				echo "<script>alert('Your room has been booked successfully!')</script>";
  echo "<script>window.open('home.php','_self')</script>";
				
				mysqli_query($connect,"UPDATE acc_details SET acc_balance='$newbal' WHERE acc_username='$username'");
			}else{
				echo "Well this is embarassing...".mysqli_error($connect);
			}
		}
	
}
}else{
		echo 'error. '.mysqli_error($connect);
	}
	} else {
		echo "<script>alert('Ongeza Pesa')</script>";
  echo "<script>window.open('book.php','_self')</script>";
	 	
	 }	
		}else{
			echo "<script>alert('no rooms available')</script>";
		}
	
	 }
	}



 ?>