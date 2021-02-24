
<?php
$con=mysqli_connect("127.0.0.1","root","","hostel");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}

$nm=$_POST['user'];
$em=$_POST['pas'];

$sql = "INSERT INTO `admin`(`user`, `pass`) VALUES ('$nm','$em')";
if(mysqli_query($con, $sql)){
	header("Location:admin.php?Empty= Registration Successfull!! Login Here");
} 


else{
   header("Location:admin_reg.php?Invalid= You are already registered!!");
} 

mysqli_close($con);
 ?>