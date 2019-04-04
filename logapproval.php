<?php
	session_start();
	//Connect to mysql server
	require "database.php";
	
	if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password =$_POST['password'];
	$check_user="select * from users where username='$username' and password='$password'";
	$run=mysqli_query($connect,$check_user);
	if($run){
		if (mysqli_num_rows($run)>0) {
			while ($newqry=mysqli_fetch_assoc($run)){
				$type=$newqry['type'];
				if ($type == 2) {
           							session_regenerate_id();
									$_SESSION['username']=$newqry['username'];
									session_write_close();
									header("location: home.php");
									exit();
           			
           								}else if($type == 1){
               
           							$_SESSION['admin_id']=$newqry['id'];
           							$_SESSION['username']=$newqry['username'];
           							$_SESSION['admin_lastname']=$newqry['lname'];
           							header('location:.php');
           							//echo $_SESSION['username'];
           					}
			}
			if (mysqli_num_rows($run)>0) {
	 echo "<script>window.open('home.php','_self')</script>";

	}
	

		}
else{
		echo "<script>alert('incorrect password or username')</script>";
	echo "<script>window.open('login.php','_self')</script>";
		#header('Location:login.php');
	}






	}
}
	
	