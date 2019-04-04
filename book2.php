 <?php
 require_once "database.php";
if (isset($_POST['submit'])) {
	$hname = $_POST['hname'];
	$username = $_POST['username'];
	$price = $_POST['price'];
	$room = $_POST['room'];
	$rvalue = '';

	






	$sql = "INSERT into booking(`hostelname`,`room`,`username`,`price`) VALUES ('$hname','$room','$username','$price')";
	
	if (mysqli_query($connect,$sql)) {
		$sql2 = "SELECT numrooms from hostel WHERE name='$hname'";

		

		if($res = mysqli_query($connect,$sql2)){
			while($data = mysqli_fetch_assoc($res)){
				$rvalue = $data['numrooms'];
				
				$rvalue-=1;
				$sql3 = "UPDATE hostel SET numrooms='$rvalue' WHERE name='$hname' ";
				if (mysqli_query($connect,$sql3)) {
					echo "Your room has been booked successfully!";
				}else{
					echo "Well this is embarassing...".mysqli_error($connect);
				}
			}
		}else{
		echo 'error. '.mysqli_error($connect);
	}
	}else{
		echo 'error. '.mysqli_error($connect);
	}


}

 ?>