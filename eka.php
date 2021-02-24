
<?php

$con=mysqli_connect("127.0.0.1","root","","hostel");
foreach ($_FILES['img']['name'] as $i => $value) {
$image_name=$_FILES['img']['tmp_name'][$i];
$name=$_POST['name'];
$loc=$_POST['location'];
$price=$_POST['price'];
$folder="upload/";
$image_path=$folder.$_FILES['img']['name'][$i];
move_uploaded_file($image_name, $image_path);
$sql="INSERT INTO `hostel`(`name`, `location`, `price`, `img`) VALUES('$name','$loc','$price','$image_path')";

if(mysqli_query($con, $sql)){
echo "Hostel Uploaded Successfully!";

}
else{
	echo "Hostel Already Added!";
}

}
?>