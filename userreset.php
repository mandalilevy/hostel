<?php 


$con=mysqli_connect("127.0.0.1","root","","hostel");
$query ="SELECT * FROM `register` WHERE user='".$_POST['email']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)==False) {
	header("Location: rest.php?Invalid=Invalid Username!");
}
else{
	$sqq="UPDATE `register` SET  `pass`='".$_POST['pas']."' WHERE `user`='".$_POST['email']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: userlogin.php?Empty=Password Reset Successfully!!");
		}
	
}



 ?>