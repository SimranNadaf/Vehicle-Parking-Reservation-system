<?php
$id=$_GET['id'];
include 'Connect.php'; 
$query="SELECT * FROM `admin` where `Id`='$id'";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
  $name=$row['Name'];
  $email=$row['Email'];
  $phone=$row['Phone no'];
  $pwd=$row['Password'];
}
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin Details</title>
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
    <br><br><br>
      <div class="container-fluid justify-content-center " style="margin: 30px;">
        <div class="jumbotron text-center w-50 mx-auto justify-content-center"  style="height: 100px border: radius 50px;padding:20px">
          <div class="container align-middle">
     <h3 class="text-center" >Admin Details</h3>
   
  </div>
</div>
<div class="form-group container justify-content-center" style="width:30%">
<form method="post" action="Myprofile(admin)Process.php?id=<?php echo $id; ?> ">
  <label class="ssr-only" for="name">Name</label>

  <br>

   <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required value="<?php echo $name; ?>">
     <br>

  <label class="ssr-only" for="email">Email</label>
 
     <br>
   
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required value="<?php echo $email; ?>">
    <br>

    <label class="ssr-only" for="no">Phone No</label>
 
     <br>
   
    <input type="text" class="form-control" name="no" id="no" placeholder="Enter Phone no" required value="<?php echo $phone; ?>">
    <br>
    <label class="ssr-only" for="pwd">Password</label>
 
     <br>
   
    <input type="text" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required value="<?php echo $pwd; ?>">
    <br>
  
 
  <hr>
  <div class="text-center">
   <input class="btn-lg btn-success" type="submit" name="confirm" value="Confirm">
  </hr>
  </div>
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