
		$INSERT1="INSERT INTO hotel2(First_Name,message,email,number)  VALUES (?,?,?,?)" ;
		
		$stmt = $conn1->prepare( $INSERT1);
		$stmt->bind_param("siss",$First_Name ,$number ,$email ,$message);
		$stmt->execute();





		$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Booking";

$conn = new mysqli($servername, $username, $password, $dbname);


$Name=($_POST['Name']);
 $number=($_POST['number']);
 $Message=($_POST['Message']);
    $Email=($_POST['Email']);
    $Guests=($_POST['Guests']);
    $datepicker2=($_POST['datepicker2']);


	if (!$conn) 
	{
		echo "not connected";
    	die("Connection failed: " . mysqli_connect_error());
	}
	else

	{	
	
		
		$INSERT="INSERT INTO hotel (Name,number,Email,Guests,datepicker2,Message)  VALUES (?,?,?,?,?,?)" ;
		
		$stmt = $conn->prepare( $INSERT);
		$stmt->bind_param("sisiss",$Name ,$number ,$Email ,$Guests,  $datepicker2,$Message);
		$stmt->execute();
    	echo "Thank You..Your table is booked ;
    	$stmt->close();
    	$conn->close();

    }




    $INSERT="INSERT INTO hotel (Name,number,Email,Guests,datepicker2,Message)  VALUES (?,?,?,?,?,?)" ;
		
		$stmt = $conn->
		if(!$stmt)
		{

			echo "in correct";
		}
		else
		{


			$stmt->bind_param("sisiss",$Name ,$number ,$Email ,$Guests,  $datepicker2,$Message);
		
    	echo "Thank You..Your table is booked ;
    	$stmt->close();
    	$conn->close();





    			$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Booking";
$conn = new mysqli($servername, $username, $password, $dbname);


$Name=($_POST['Name']);
 $number=($_POST['number']);
 $Message=($_POST['Message']);
    $Email=($_POST['Email']);
    $Guests=($_POST['Guests']);
    $datepicker2=($_POST['datepicker2']);



    echo "success";


if (!$conn) 
	{
		echo "not connected";
    	die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		$INSERT="INSERT INTO hotel (Name,number,Email,Guests,datepicker2,Message)  VALUES (?,?,?,?,?,?)" ;
		$stmt = $conn->prepare( $INSERT);
		$stmt->bind_param("sisiss",$Name ,$number ,$Email ,$Guests,  $datepicker2,$Message);
		$stmt->execute();
		$stmt1->close();
    	//$conn1->close();
    	//require "index.html";


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56801282.36779669!2d-131.48418691999598!3d29.66539724812115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dc13a009bba0319!2sPret+A+Manger!5e0!3m2!1sen!2sin!4v1491030489371"></iframe>

			
	}
