<?php 
$con=mysqli_connect("127.0.0.1","root","","hostel");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}
session_start();
if (isset($_POST['submit'])) 
{
if (empty($_POST['name']) || empty($_POST['pass']))
  {
	header("Location:userlogin.php?Empty=please fill in the blanks");
  }
else
{
$rank="Admin";
$query ="SELECT  * FROM `register` WHERE user='".$_POST['name']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	$_SESSION['client']=$_POST['name'];
	header("Location:userdashboard.php");
}
else{
	header("Location:userlogin.php?Invalid= Username and Password do not match");
}
}
}
else
{
	echo "NOT WORKING NOW";
}
 ?>
