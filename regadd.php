
<?php
$con=mysqli_connect("127.0.0.1","root","","hostel");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}
$id=$_POST['idn'];
$name=$_POST['name'];
$cont=$_POST['cont'];
$nm=$_POST['user'];
$em=$_POST['pas'];

$sql = "INSERT INTO `register`(`id`, `name`, `contacts`, `user`, `pass`)  VALUES ('$id','$name','$cont','$nm','$em')";
if(mysqli_query($con, $sql)){
	header("Location:userlogin.php?Empty= Registration Successfull!! Login Here");
} 


else{
   header("Location:register.php?Invalid= You are already registered!!");
} 

mysqli_close($con);
 ?>