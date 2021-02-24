
   <!DOCTYPE html>
  <html lang="en">
  <head>
<title>HOSTEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "logo.jpg" type = "image/x-icon"> 
  </head>
  <body style="background-image:url(img/b.jpg); background-repeat: no-repeat;background-size: cover;height: 624px ">
  	<div class="container">
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-primary" style="opacity: 0.5" >

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
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; font-weight: bolder;" ></a>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
  <li class="nav-item">
        <a href="admin_homepage.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" ><i class="fa fa-home fa-2x"></i></a>
      </li>
 
 </ul>
 </div> 
  </div>
</nav>
 

<div class="container">
	<div class="row justify-content-center"> 
    <div class="col-lg-5 bg-light mt-4 p-2 rounded">
    	<h3 class="text-center text-info pb-2">ADD A NEW HOSTEL</h3>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>
                 <?php 
                 if (@$_GET['success']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['success']?></div>
                   <?php 
                 }
               ?>












<form action="" method="post" enctype="multipart/form-data" id="image_upload">
	

<div class="form-group row">
  <label for="em" class="col-sm-2 col-form-label"> Name</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="em" name="name" placeholder="hostel name" required="">
  </div>
  </div>
  <div class="form-group row">
  <label for="pp" class="col-sm-2 col-form-label"> Location</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="em" name="location" placeholder="hostel location" required="">
  </div>
  </div>
  <div class="form-group row">
  <label for="pp" class="col-sm-2 col-form-label"> Price</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="em" name="price" placeholder="hostel price" required="">
  </div>
  </div>
	<div class="form-group">
		<div class="custom-file">
			<label for="image" class="custom-file-label">Select Hostel Image</label>
			<div class="col-sm-10">
			<input type="file" name="img[]" class="custom-file-input form-control" id="image" multiple="">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Save" class="btn btn-success btn-block">
	</div>
	<h5 class="text-center text-success" id="result"></h5>
</form>


    </div>
	</div>
</div>
</div>
<script>
	$(document).ready(function(){
   $("#image").on('change',function(){
     var filename=$(this).val();
     $(".custom-file-label").html(filename);
   });

$("#image_upload").submit(function(e){
e.preventDefault();
$.ajax({
	url: 'eka.php',
	method:'POST',
	processData:false,
	contentType:false,
	cache:false,
	data:new FormData(this),
	success: function(response){
		$("#result").html(response);
		//load_images();
	}
})
});
/*load_images();
function load_images(){
$.ajax({
url:'load.php',
method:'get',
success: function(data){
	$("#image_preview").html(data);
}
});
}*/
	});

</script>
</div>
  </body> 
  </html>
