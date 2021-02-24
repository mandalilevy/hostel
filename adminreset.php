<?php 


$con=mysqli_connect("127.0.0.1","root","","hostel");
$query ="SELECT * FROM `admin` WHERE user='".$_POST['email']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)==False) {
	header("Location: admin_reset.php?Invalid=Invalid Username!");
}
else{
	$sqq="UPDATE `admin` SET  `pass`='".$_POST['pas']."' WHERE `user`='".$_POST['email']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: admin.php?Empty=Password Reset Successfully!!");
		}
	
}



 ?>