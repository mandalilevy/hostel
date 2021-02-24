<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HOSTEL</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/b.jpg" type = "image/x-icon"> 
</head>
<body class="" style="background-image:url(img/b.jpg); background-repeat: no-repeat;background-size: cover;height: 624px ">
	<div>
 <nav class="navbar navbar-expand-lg bg-primary" style="opacity: 0.5">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
	<li class="nav-item">
        	<?php 
	session_start();
if (isset($_SESSION['User'])) {
                  echo '<a style="color: white; font-family:Verdana; font-weight:bolder;" class="nav-link"> Welcome: '.$_SESSION['User'].'</a>';
                    }


 ?>
      </li>
</ul >
<ul class="navbar-nav  mt-lg-0 mx-auto">
    
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter"></a>
      </li>

 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: white; font-weight:bolder; font-family:Verdana"  href="logout.php?logout">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container pt-sm-4">
  <div class="jumbotron ">
    <div class="container jumbotron bg-light">
      <style type="text/css">
        .jumbotron {
    background: none
}
      </style>
    <center>
       
          <button class="btn btn-group-sm btn-block w-25" style=""><a href="hosteladd.php"style="font-weight: bolder;color: purple;text-decoration: none;">ADD HOSTEL</a> </button>
          <button class="btn btn-group-sm btn-block w-25" >
          <a href="booked.php" style="font-weight: bolder;color: purple;text-decoration: none;">VIEW  BOOKED HOSTEL</a> </button>
           
          </center>
     </div>
    <style>
      td{
        color: black;
        font-weight: bolder;
      }
    </style>
  </div>
</div>



<div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="">
      <div class="modal-body">
        <div class="card card-outline-secondary">
     <div class="card-header" style="background-color: purple">
       <center><h3 style="color: white">CREATE NEW POST</h3></center> 
     </div>
                                <div class="form-group">

                             <label style="font-weight: bold;">POST NAME</label>
                                    <input type="text" required="" class="form-control" name="name" >
                                </div>
               
        <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="add">Create</button>
                                </div>
        
                      
      </div>
          </div>                     
      </div>
      </form>
    </div>
  </div>
</div>





</body>
</html>
<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","piu_vote");
$query ="SELECT * FROM `posts` WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('POST ALREADY CREATED!!');</script>";
}
else{
$sql="INSERT INTO `posts`(`name`)VALUES('".$_POST['name']."')";
if(mysqli_query($con, $sql)){
//header("Location: main.php");
}
}
}
 ?>
