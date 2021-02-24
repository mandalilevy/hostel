
<?php
$con=mysqli_connect("127.0.0.1","root","","hostel");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}
$hostel=$_POST['hostel'];
$name=$_POST['name'];
$cont=$_POST['contacts'];
$date=$_POST['dt'];


$sql = "INSERT INTO `book`(`hostel`, `name`, `contacts`, `date`)  VALUES ('$hostel','$name','$cont','$date')";
if(mysqli_query($con, $sql)){
	header("Location:userdashboard.php");
} 


else{
   header("Location:book.php?Invalid= Booking Unsuccessfull!!");
} 

mysqli_close($con);
 ?>