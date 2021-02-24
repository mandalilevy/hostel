
<?php 
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
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
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    

 <ul class="navbar-nav  mt-lg-0 mx-auto">
     
    
      <i class="fas fa-arrow-alt-left"></i>
     
      <li class="nav-item">
        <a href="userdashboard.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" ><i class="fa fa-arrow-left fa-2x"></i></a>
      </li>
 </ul>
 </div> 
 </nav>
 <div class="bg">
   <div id="login">
        <h5 class="text-center text-white pt-5"></h5>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                      <div class="card-body">
                        <h5 class="card-header text-center">BOOK HOSTEL</h5>

<?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div style="font-weight: bolder;" class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div style="font-weight: bolder"   class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>






                        <form id="login-form" class="form pt-3" action="bookadd.php" method="post">
                                <div class="form-group">
                           <select class="form-control" name="hostel">
                                      <option value="">Select Hostel</option>
                                           <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","hostel");
$query = "SELECT * FROM hostel";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>

                                      <option><?php echo $row['name'];?></option>
                                         <?php 
}
 ?>
                                    </select>
                            </div>

                             <div class="form-group">
                                 <?php 
                                 
if (isset($_SESSION['client'])) {

$con=mysqli_connect("127.0.0.1","root","","hostel");
$query = "SELECT * FROM register WHERE user='".$_SESSION['client']."'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)) {?>
                                    <label style="font-weight: bold;">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" readonly="readonly">

                                </div>
                            <div class="form-group">
                                    <label style="font-weight: bold;">Contacts</label>
                                    <input type="text" class="form-control" name="contacts" value="<?php echo $row['contacts'] ?>" readonly="readonly">

                                </div>

<?php 
}
}
 ?>
  <div class="form-group">
                                    <label style="font-weight: bold;">Contacts</label>
                                    <input type="date" class="form-control" name="dt" >

                                </div>
                            <div class="">
                         
                                <input type="submit" name="submit" class="btn btn-success btn-md" value="Book">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </div>





    <style>
         #login .container #login-row #login-column #login-box {
  margin-top: 0px;
  max-width: 600px;
  
  border: 1px solid #9C9C9C;
  background-color: white;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 0px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
        body, html {
            margin: 0;
  padding: 0;
  height: 100%;
}
.bg {
  /* The image used */
 background-image: url("img/b.jpg");

  /* Half height */
  height: 91%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
</body> 
</html>
