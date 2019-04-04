<?php 
session_start();

include('database.php');
if (isset($_POST['submit'])){
 	 $admnum=mysqli_escape_string($connect,$_POST['adm']);
  	 $name=mysqli_escape_string($connect,$_POST['name']);
	 $user_name=mysqli_escape_string($connect,$_POST['username']);
	 $password=mysqli_escape_string($connect,$_POST['password']);
	 $email=mysqli_escape_string($connect,$_POST['email']);
	 $accountnum=mysqli_escape_string($connect,$_POST['accnum']);
 	 $phonenum=mysqli_escape_string($connect,$_POST['phonenum']);
  	 $gender=$_POST['gender'];

  	 if (!preg_match('/^[A-Za-z][A-Za-z0-9]/',$admnum) OR strlen($admnum) < 6) {
      echo "<script>alert('please enter a valid adm No.')</script>";
      exit();
     }
  	  if ( !preg_match('/^[A-Za-z ]{5,31}/', $name) ) {
  	 	echo "<script>alert('please fill in a valid name')</script>";
  	  exit();
  	 }
  	  if (!preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}/', $user_name) ) {
  	 	echo "<script>alert('please enter  a valid username')</script>";
   exit();
  	 }
     $check_username=" select * from users where username='$user_name'";
 $run= mysqli_query($connect,$check_username);
 if (mysqli_num_rows($run)>0){
  echo "<script>alert('Username $user_name is already in existance in our data base, Try another one')</script>";
 

     exit();

}
  	  if ( $password=="") {
  	 	echo "<script>alert('please enter your password')</script>";
  	 	 exit();
  	 }
  	  if ( !filter_var($email,FILTER_VALIDATE_EMAIL)) {
  	 	echo "<script>alert('please enter your email')</script>";
  	 	 exit();
  	 }
     $check_email=" select * from users where email='$email'";
     $run= mysqli_query($connect,$check_email);
     if (mysqli_num_rows($run)>0){
      echo "<script>alert('Email $email is already in existance in our data base, Try another one')</script>";
    

         exit();

}
  
  if ( $accountnum=="" || !is_numeric($accountnum)) {
      echo "<script>alert('please enter your account number')</script>";
     exit();
     }
     if (strlen($accountnum) < 6) {
       echo "<script>alert('The account must have 6 characters')</script>";
      exit();
     }
  	  if ( $phonenum=="" || !is_numeric($phonenum)) {
  	 	echo "<script>alert('please enter your phone number')</script>";
  	
  	 }
     if (strlen($phonenum) !== 10) {
       echo "<script>alert('phone number must have 10 characters')</script>";
      exit();
     }
  	 
$query= "insert into users(admno, name, username, password, email, accountnum, phone, gender, type) 
value('$admnum', '$name', '$user_name', '$password', '$email', '$accountnum', '$phonenum', '$gender', '2')";


if (mysqli_query($connect,$query)){
mysqli_query($connect,"INSERT INTO acc_details (accountnum, acc_username) VALUES('$accountnum','$user_name')") or die(mysqli_error($connect));
	echo "<script>alert('Registration successful')</script>";
  echo "<script>window.open('login.php','_self')</script>";

}
else{
	die(mysqli_error($connect));
echo "";
echo "<script>alert('Registration unsuccesful')</script>";
  echo "<script>window.open('register.php','_self')</script>";
}
  	}
		


 ?>