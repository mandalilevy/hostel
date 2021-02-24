<?php
    session_start();

    $database_name = "hostel";
    $con = mysqli_connect("localhost","root","",$database_name);?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOSTEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel = "icon" href = "img/b.jpg" type = "image/x-icon"> 
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body class="" style="background-image:url(img/b.jpg); background-repeat: no-repeat;background-size: cover;height: 624px ">
    <div class="navbar-fixed-top">
 <nav class="navbar navbar-expand-lg bg-primary" style="opacity: 0.5">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav mr-auto">
  <li class="nav-item">
          <?php 
  //session_start();
if (isset($_SESSION['client'])) {
                  echo '<a style="color: white; font-family:Verdana; font-weight:bolder;" class="nav-link mx-auto"> Welcome: '.$_SESSION['client'].'</a>';
                    }


 ?>
      </li>
</ul >

 <ul class="navbar-nav   mx-5 ">
  <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="book.php">BOOK HOSTEL</a>
      </li>

</ul >
<ul class="navbar-nav  ml-lg-5">
  <li class="nav-item">
   <?php 
echo '<a class="nav-link" style="color: white; font-weight:bolder; font-family:Verdana"  href="userlogout.php?logout">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 </div> 
  
</nav>
 </div>
</div>




<br><br><br><br>

    <div class="container bg-white" style="margin: auto;">
       

        <?php
     
            $query = "SELECT * FROM hostel order by name";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="candidate_images.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive">
                                <h5 class="text-primary"><?php echo $row["name"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["location"]; ?></h5>
                                <h5 class="text-success"><?php echo $row["price"]; ?></h5>
                               
  
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
      


</body>
</html>
