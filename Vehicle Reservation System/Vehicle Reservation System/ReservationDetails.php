<?php
$id=$_GET['id'];
$slot=$_GET['slot'];
$Sdate=$_GET['Sdate'];
$Stime=$_GET['Stime'];
$Edate=$_GET['Edate'];
$Etime=$_GET['Etime'];
$type=$_GET['type'];

if(isset($id)){

include 'Connect.php'; 
$query="SELECT * FROM `user` where `Id`='$id'";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
  $name=$row['Name'];
  $email=$row['Email'];
  $phone=$row['Phone no'];
  $add=$row['Address'];
}
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Reservation Details</title>
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
   <h3 class="text-center" >Reservation Details</h3>
   
  </div>
</div>
<div class="form-group container justify-content-center" style="width:30%">
<form method="post" action="ReservationDetailsProcess.php?id=<?php echo $id;?>&slot=<?php echo $slot;?>&Sdate=<?php echo $Sdate;?>&Stime=<?php echo $Stime;?>&Edate=<?php echo $Edate;?>&Etime=<?php echo $Etime;?>&type=<?php echo $type;?>&name=<?php echo $name;?>">
  <label class="ssr-only" for="name">Start Date</label>

  <br>

   <input type="date" class="form-control" name="Sdate" id="date" required value="<?php echo $Sdate; ?>" readonly>
     <br>
     <label class="ssr-only" for="stime">Start Time</label>
      <br>
    <input type="text" class="form-control" name="Stime" id="stime"  required value="<?php echo $Stime; ?>" readonly>
     <br>
    <br>

<label class="ssr-only" for="name">End Date</label>

  <br>

   <input type="date" class="form-control" name="Edate" id="date" placeholder="Enter date" required value="<?php echo $Edate; ?>" readonly>
     <br>
    
    <label class="ssr-only" for="no">End Time</label>
 
 <br>
    <input type="text" class="form-control" name="Etime" id="etime"  required value="<?php echo $Etime; ?>" readonly>

<br><br>

   <label class="ssr-only" for="type">Type of Vehicle</label>
  <br>
   
    <input type="text" class="form-control" name="type" id="type" required value="<?php echo $type; ?>" readonly>
     
   <br><br>
 <label class="ssr-only" for="slot">Parking Slot</label>
  <br>
   
    <input type="text" class="form-control" name="slot" id="slot" required value="<?php echo $slot; ?>" readonly>
     <br>
<label class="ssr-only" for="name">Name</label>
  <br>
   
    <input type="text" class="form-control" name="name" id="name" placeholder=" Enter Name" required value="<?php echo $name; ?>" readonly>
     <br>
     <label class="ssr-only" for="add">Address</label>
    <div class="mb-3">
    
        <textarea class="form-control" id="add" rows="3" readonly name="add"><?php echo $add; ?></textarea>
      </div>

      
 <label class="ssr-only" for="mail">Email</label>
  <br>
   
    <input type="email" class="form-control" name="email" id="mail" placeholder=" Enter Email" required value="<?php echo $email; ?>" readonly>
     <br>

     <label class="ssr-only" for="name">Phone No</label>
  <br>
   
    <input type="text" class="form-control" name="no" id="no" placeholder=" Enter Phone no" required value="<?php echo $phone; ?>" readonly>
     <br>
     <hr>
  <div class="text-center">
    <input class="btn-lg btn-success" type="submit" name="confirm" value="Confirm Reservation">
  </div>
  </hr>
  </form>
</div>
</div>
<br>
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