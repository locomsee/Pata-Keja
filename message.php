<?php
include('database.php');
$name=$_POST['name'];
$email=$_POST['email'];
//$subject=$_POST['subject'];
$message=$_POST['message'];
mysqli_query($connect,"INSERT INTO messages (name, email,message)
VALUES
('$name','$email','$message')");
header("location: Contact.php");
?>
