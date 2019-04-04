<?php 
session_start();
if (!$_SESSION['username']){
  header("location:login.php");
}
include "database.php";
if(isset($_POST['delete'])) {
 $username = $_SESSION['username'];
 $_balance='';
$update="SELECT * FROM booking WHERE username='$username'";

		if($del = mysqli_query($connect,$update)){
			while ($data = mysqli_fetch_assoc($del)) {
				$price = $data['price'];
				$hname=$data['hostelname'];

$details="SELECT * FROM acc_details WHERE acc_username='$username'";
if($up = mysqli_query($connect,$details)){
			while ($row = mysqli_fetch_array($up)){
				 $_balance=$row['acc_balance'];
				 
				$new= $_balance+$price;


				

			}
				}
		}

}
 mysqli_query($connect,"UPDATE acc_details SET acc_balance='$new' where acc_username='$username'") or die("The query could not be completed");
  mysqli_query($connect,"UPDATE hostel SET numrooms=numrooms+1 where name='$hname'") or die("The query could not be completed");




   //select which database you want to edit
   mysqli_select_db($connect,"pk") or die(mysqli_error($connect)); 

   //convert all the posts to variables:
  

$sql = mysqli_query($connect,"DELETE FROM booking WHERE username= '$username'")or die(mysqli_error($connect));

mysqli_query($connect,$sql);

}

 echo "<script>alert('The Hostel has been successfully been deleted')</script>";
  echo "<script>window.open('maccount.php','_self')</script>";



 ?>