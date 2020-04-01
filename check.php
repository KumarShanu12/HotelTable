<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Booking";
$conn2 = new mysqli($servername, $username, $password, $dbname);
 $number=($_POST['number']);

if(!$conn2)
{
        echo "not connected";
      die("Connection failed: " . mysqli_connect_error());
       

}
else
{

  $show="SELECT * FROM hotel where $number ='$number'";
  $result=mysqli_query($conn2,$show);
  while ($rows=mysqli_fetch_array($result)) 
  {
   if($number == $rows[2])
    {
      echo "Congratulations...Your table is Booked..";
         # code...
    }
  else
    {
        echo "not booked Sorry";

    }
    
  }  
}
echo "Happy Eating";
?>