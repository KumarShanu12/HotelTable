<?php

 $servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Booking";
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
        echo "not connected";
    	die("Connection failed: " . mysqli_connect_error());
	    

}
else
{
   $Name=($_POST['Name']);
   $number=($_POST['number']);
   $Message=($_POST['Message']);
    $Email=($_POST['Email']);
    $Guests=($_POST['Guests']);
    $datepicker2=($_POST['datepicker2']);



    $INSERT="INSERT INTO hotel (Name,number,Email,Guests,datepicker2,Message)  VALUES (?,?,?,?,?,?)" ;
		$stmt = $conn->prepare( $INSERT);
		$stmt->bind_param("sisiss",$Name ,$number ,$Email ,$Guests,  $datepicker2,$Message);
		$stmt->execute();

	echo "Thank You..Your table booking is under process..  go back to explore more -------------->";




	//$INSERT="INSERT INTO hotel (Name,number,Email,Guests,datepicker2,Message)  VALUES (?,?,?,?,?,?)" ;
		//$stmt->bind_param("sisiss",$Name ,$number ,$Email ,$Guests,  $datepicker2,$Message);
		
		
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><div align="center">
<button onclick="myFunction()">Home</button>

<script>
function myFunction() {
  location.replace("index.html")
}
</script>

</div>

</body>
</html>


