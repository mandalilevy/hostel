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
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-primary" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    

 <ul class="navbar-nav  mt-lg-0 mx-auto">
   
    
    
      <li class="nav-item">
        <a href="admin_homepage.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" ><i class="fa fa-arrow-left fa-2x"></i></a>
      </li>
     
 </ul>
 </div> 
 </nav>
 <div class="bg">
   
   <div class="container pt-sm-4">
  <div class="">
    <div class="">
       <table class="table  table-bordered table-responsive-sm table-sm">
        <center><legend style="color: white;font-weight: bolder;">FARE CHART</legend></center> 
    <thead class="thead-light">

<tr>
<th scope="col" style="width: auto;" ><strong>NAME</strong></th>
<th scope="col" style="width: auto;"><strong>CONTACTS</strong></th>
<th scope="col" style="width: auto;"><strong>DATE</strong></th>
<th scope="col" style="width: auto;"><strong>HOSTEL</strong></th>


</tr>
</thead>
<tbody class="bg-light">
<?php
$con=mysqli_connect("127.0.0.1","root","","hostel");
$query ="SELECT * FROM `book`";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?>

<tr><td style="width: auto;"><?php echo $row["name"]; ?></td>
<td  style="width: auto;"><?php echo $row["contacts"]; ?></td>
<td  style="width: auto;"><?php echo $row["date"]; ?></td>
<td  style="width: auto;"><?php echo $row["hostel"]; ?></td>


</tr>
<?php } ?>

</tbody>
</table>
  </div>
</div>
 </div>





    <style>
        body, html {
  height: 100%;
}
.bg {
  /* The image used */
  background-image: url("img/b3.jpg");

  /* Half height */
  height: 91%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
    <div class="modal fade" id="vehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-primary">
                         <center>  <h3 class=" mx-auto" style="color: white">NEW VEHICLE</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                           
                                <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Type</label>
                                    <select class="form-control" name="vtype">
                                    <option>Select Type</option>
                                    <option>Bus</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Color</label>
                                    <input type="text" class="form-control" name="vcolor" required="">

                                </div>
                          
                              
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Number Plate</label>
                                    <input type="text" class="form-control" name="vreg" required="">
                                </div>
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="submit">Submit</button>
                                </div>
</div>


                               
                            </form>





                    


                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>
<!--Driver-->







<div class="modal fade" id="asign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-primary">
                         <center>  <h3 class=" mx-auto" style="color: white">ASSIGN A VEHICLE</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                           
                                <div class="form-group">
                                    <label style="font-weight: bold;">Driver Name</label>
                                    <select class="form-control" name="driver">
                                      <option value="">Select Driver</option>
                                           <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query = "SELECT * FROM driver";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>

                                      <option><?php echo $row['driver_name'];?></option>
                                         <?php 
}
 ?>
                                    </select>
</div>
       <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Number Plate</label>
                                    <select class="form-control" name="vehicle">
                                      <option value="">Select Vehicle Number Plate</option>
                                           <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query = "SELECT * FROM vehicle";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>

                                      <option><?php echo $row['vehicle_regno'];?></option>
                                         <?php 
}
 ?>
                                    </select>
</div>
                                </div>
                          
                              
                                
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="ass">Submit</button>
                                </div>
</div>


                               
                            </form>





                    


                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>









</body> 
</html>
 <?php
 //session_start();
if (isset($_POST['submit'])) {
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `vehicle` WHERE vehicle_regno='".$_POST['vreg']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('VEHICLE ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `vehicle`(`vehicle_type`, `vehicle_color`, `vehicle_regno`) VALUES('".$_POST['vtype']."','".$_POST['vcolor']."','".$_POST['vreg']."')";
if(mysqli_query($con, $sql)){

}
}
}

if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `driver` WHERE driver_id='".$_POST['did']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('DRIVER ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `driver`(`driver_id`, `driver_name`, `driver_licenceno`, `driver_age`, `driver_gender`)  VALUES('".$_POST['did']."','".$_POST['dname']."','".$_POST['dlno']."','".$_POST['dage']."','".$_POST['dgender']."')";
if(mysqli_query($con, $sql)){

}
}
}









 ?>