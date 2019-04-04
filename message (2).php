<?php 
session_start();

include('database.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$query="insert into messages(name, email, messages) 
value('$name', '$email', '$message')";
if (mysqli_query($connect,$query)){
	echo "<script>alert('your message was sent successful')</script>";
  echo "<script>window.open('Contact.php','_self')</script>";

}
else{
echo "";
echo "<script>alert('Message was unable to be sent at this time, try later')</script>";
  echo "<script>window.open('Contact.php','_self')</script>";
}
}




 ?>