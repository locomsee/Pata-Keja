<?php
session_start();

include('database.php');


$admno=$_POST['adm'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$accountnum=$_POST['accountnum'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];

$query = mysqli_query($connect,"SELECT * from users WHERE username='$username' OR email='$email'");
if(mysqli_num_rows($query) > 0){
	echo "<b>Sorry,the Username or Email has already been taken by another user!<br><br><br></b>";
	echo "<b><a href='register.php'>Register Again</a></b>";
	
}else{
mysqli_query($connect,"INSERT INTO users (admno, name, username, password, email,accountnum, phone,Gender,status,type)
VALUES('$admno',$name','$username','$password','$email', '$accountnum','$phone','$gender','active','2')");
mysqli_query($connect,"INSERT INTO account_details (accountnum, acc_username, acc_password) VALUES('$accountnum',$username','$password')");
mysqli_query($connect,"INSERT INTO retrieve (email) VALUES('$mailid')");		
	//echo "YOUR ACCOUNT SUCCESSFULLY CREATED<br>";
	
}

mysqli_close($connect);


?>
