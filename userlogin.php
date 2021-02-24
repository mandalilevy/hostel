<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOSTEL</title>
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel = "icon" href = "img/b.JPG" type = "image/x-icon"> 
 
  
</head>
<body class="bg-light">
   
 <div class="bg">
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-5 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
              <h5 class="card-title text-center" style="color: blue">USER LOGIN</h5>
              <?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>


              <form class="form-signin" method="post" action="next.php">
              <div class="form-group row">
                  <label for="inputEmail">User Name</label>
                  <input type="text" id="inputEmail" name="name" class="form-control" placeholder="username" >           
              </div>
              <div class="form-group row">
                  <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" >              
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Login</button>
              <b>Not yet Registered?</b><a href="register.php">Click me to Register</a><br>
            </form>
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
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
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
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>

</body> 
</html>
