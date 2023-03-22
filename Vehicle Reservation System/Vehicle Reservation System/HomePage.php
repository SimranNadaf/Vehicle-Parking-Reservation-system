<?php
if($_GET['msg']=="You are Logout Successfully!") {
$msg=$_GET['msg'];
$name=$_GET['name'];

echo "<script>alert('$name, $msg'); </script>";

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Home Page</title>
</head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">


  <a class="navbar-brand" style="color: white" href="HomePage.php">Vehical Parking Reservation System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="HomePage.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
                <a style="color: white" href="#" class="nav-link dropdown-toggle"
                data-toggle="dropdown" id="mydropdown">Login</a>
                <div class="dropdown-menu"
                  aria-labelledby="mydropdown">
                  <a href="LoginPage.php" class="dropdown-item">User Login</a>
                   <a href="AdminLogin.php" class="dropdown-item">Admin Login</a>
                    
                  
                </div>
              </li>
      <li class="nav-item ">
      <a class="nav-link" style="color:white;" href="UserRegistration.php">User Registration<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
  <a class="nav-link" style="color:white;" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0"> 
    </form>
  </div>
</nav>
<div class="container-fluid" style="background-image: url('homepage bg.jpeg'); padding-top:50px; height:1300px;">
 <div class="container" style="background-color:white; padding-left:0px; padding-right:0px;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="first slide.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h2 class="bg-dark p-2" style="opacity: 0.8; margin:50px">Vehicle Parking Reservation System</h2>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="second slide.jpeg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h2 class="bg-dark p-2" style="opacity: 0.8; margin:50px">Secure and Clean Parking Place</h2>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="third slide.jpeg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h2 class="bg-dark p-2" style="opacity: 0.8; margin:50px">24×7 Parking Booking System</h2>
   
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container marketing text-center" style="margin-top:70px;">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="Slots Per Vehicle Type.png" alt="Generic placeholder image" width="140" height="140">
            <h4>Slots Per Vehicle Type</h4>
            <p>Allocate slots as per two-wheeler and four-wheeler vehicles to utilise all available space.</p>  
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="View Live Reports.png" alt="Generic placeholder image" width="140" height="140">
            <h4>View Live Reports</h4>
            <p>No more manual checking of empty space, view it on your phone along with reports..</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="Easy to Use.png" alt="Generic placeholder image" width="140" height="140">
            <h4>Easy to Use</h4>
            <p>Manage the entire parking area using your handheld device. No training required.</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        
        <!-- How it works -->
        <div class="container text-center" style="margin-top:100px; background-color: #f2f2f2; padding-top: 40px; width: 95%; height: 350px; margin-bottom: 50px;" >
         <h2> How it works</h2>

        <div class="row" style="padding-top: 50px;">
          <div class="col-lg-3">
            <img class="rounded" src="Login.jpeg" alt="Login" width="80" height="80">
            <h5>Login</h5>
       <p style="font-size:13px">Users enters their username and password. The operating system confirms their name and password.</p>  
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <img class="rounded" src="Search.jpeg" alt="Search" width="80" height="80">
            <h5>Search</h5>
        <p style="font-size:13px">Enter start date and time as well as end date and time. then select available parking zone.</p>
          </div><!-- /.col-lg-3 -->
          
          <div class="col-lg-3">
            <img class="rounded" src="Book.jpeg" alt="Book" width="80" height="80">
            <h5>Book</h5>
            <p style="font-size:13px">User check availability and start booking.User fill out required details.</p>
          </div><!-- /.col-lg-3 -->
         
          <div class="col-lg-3">
            <img class="rounded" src="Parked.jpeg" alt="Parked" width="80" height="80">
            <h5>Parked</h5>
          <p style="font-size:13px">User parked their car in a slot.The user will park the car in the space he has reserved.</p>  
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        </div><!-- container -->
        </div><!-- container fluid-->
  
  
  
  
  </form>
</div>
</div>
  <footer> 
    <div class="bg-success" style="
        padding:10px;
        text-align:center;
        width:100%;
        color: white;">
     
    Vehical Parking Reservation System
  <br>Copyright @ 2021
    </div>
    </footer>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>       
</body>
</html>