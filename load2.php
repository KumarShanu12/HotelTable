<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Booking";

$conn1 = new mysqli($servername, $username, $password, $dbname);

$First_Name=($_POST['First_Name']);
 $message=($_POST['message']);
    $email=($_POST['email']);
    $number1=($_POST['number1']);
	if (!$conn1) 
	{
		echo "not connected";
    	die("Connection failed: " . mysqli_connect_error());
	}
	else

	{	
		$INSERT1="INSERT INTO hotel2 (First_Name,email,number1,message)  VALUES (?,?,?,?)" ;
		$stmt1 = $conn1->prepare($INSERT1);
		$stmt1->bind_param("ssis",$First_Name ,$email,$number1,$message);
		$stmt1->execute();
    	$stmt1->close();
    	$conn1->close();
    	echo "Thank You For Your Feedback";
    }
   

?>


