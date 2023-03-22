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
    <title>Admin Profile</title>
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
<br>

  </form>
</div>
</div>
<main role="main">
<div class="container-fluid">
<div class="container" style="margin-top:50px;">
   <div class="pos-f-t">
  <nav class="navbar navbar-dark bg-success w-100 mt-3">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <a class="navbar-brand" style="color: white" href="HomePage.php">Vehical Parking Reservation System</a><br>  
  </nav> 
      <div class="collapse navbar-collapse overflow-scroll" id="navbarToggleExternalContent" style="height:200px;  margin-buttom:50px; width:40%;
  position: fixed;
  z-index: 1;
  transition: 0.5;">
    <div class="bg-light">
   
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 p-3" style="height:500px; overflow-x: scroll; ">
      <li class="nav-item" style="padding:10px; padding-left:20px; padding-right: 20px;">
        <a class="nav-link text-success" href="MyProfile(admin).php?id=<?php echo $id; ?>"> <img src="myprofile.png" alt="" style="padding-right:10px;"> My Profile <span class="sr-only">(current)</span></a>
  <hr>
      </li>
    
         <li class="nav-item" style="padding:10px; padding-left:20px; padding-right: 20px;">
        <a class="nav-link text-success" href="ChangePass.php?id=<?php echo $id; ?>"> <img src="changepass.png" alt="" style="padding-right:14px;">Change Password<span class="sr-only">(current)</span></a>
        <hr>
      </li>
     
         <li class="nav-item" style="padding:10px; padding-left:20px; padding-right: 20px;">
        <a class="nav-link text-success" href="AddNewAdmin.php?id=<?php echo $id; ?>"> <img src="addnewadmin.png" alt="" style="padding-right:14px;">Add New Admin<span class="sr-only">(current)</span></a>
        <hr>
      </li>
     
          <li class="nav-item" style="padding:10px; padding-left:20px; padding-right:20px;">
        <a class="nav-link text-success" href="AddNewParkingSlot.php?id=<?php echo $id; ?>"> <img src="addslot.png" alt="" style="padding-right:14px;">Add New Parking Slot<span class="sr-only">(current)</span></a>
        <hr>
      </li>
     
         <li class="nav-item" style="padding:10px; padding-left:20px; padding-right:20px;">
        <a class="nav-link text-success" href="ViewUsers.php?id=<?php echo $id; ?>"> <img src="viewuser.png" alt="" style="padding-right:14px;">View Users<span class="sr-only">(current)</span></a>
        <hr>
      </li>

      <li class="nav-item" style="padding:10px; padding-left:20px; padding-right:20px;">
        <a class="nav-link text-success" href="ParkingReservationDetail.php?id=<?php echo $id; ?>"> <img src="User Booking Detail.png" alt="" style="padding-right:14px;">Parking Reservation Detail<span class="sr-only">(current)</span></a>
        <hr>
      </li>

       <li class="nav-item" style="padding:10px; padding-left:20px; padding-right:20px;">
        <a class="nav-link text-success" href="ViewUserFeedback.php?id=<?php echo $id; ?>"> <img src="View Feedback.png" alt="" style="padding-right:14px;">View User Feedback<span class="sr-only">(current)</span></a>
        <hr>
      </li>

      <li class="nav-item" style="padding:10px; padding-left:20px; padding-right:20px;">
        <a class="nav-link text-success" href="ViewParkingSlots.php?id=<?php echo $id; ?>"> <img src="View Parking Slots.png" alt="" style="padding-right:14px;">View Parking Slots<span class="sr-only">(current)</span></a>
        <hr>
      </li>

      <li class="nav-item" style="padding:10px; padding-left:20px; padding-right:20px;">
        <a class="nav-link text-success" href="HomePage.php?msg=You are Logout Successfully!&name=<?php echo $name; ?>"> <img src="Logout.png" alt="" style="padding-right:14px;">Logout<span class="sr-only">(current)</span></a>
        
      </li>


      </ul>
    </div>
    </div>
    </div>
    <!-- Greet starts -->
    <div class="jumbotron jumbotron-fluid border border-success rounded " style="height:100px; margin:auto; padding:10px;">
  <div class="container">
    <h4 class="display-4 text-center">Hello, <?php echo $name; ?></h4>
  </div>
</div>
      <!-- Greet Ends -->
      
    <div> <!-- image starts -->
<img src="adminimage.jpeg" class="img-fluid" alt="Login Image"  width="100%" style="position:relative">
  
<img src="adminuser.jpeg" class="img-fluid" alt="user" height="250px" width="250px" style="
    position: absolute;
    left:120px;
    top:430px;
    
   "
    >

      </div> <!-- user image ends -->
      
      <div class="text-center" style="margin-top:150px;"> <!-- user details -->
      <h2> My Details <h2>
      <form>
  <div class="form-group row text-center" style="margin-top:50px; margin-left: 200px; font-size:30px;">
    <label for="name" class="col-sm-4 col-form-label">Name</label>
    <div class="col-sm-8">
      <input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $name; ?>">
    </div>
  </div>
 
  <div class="form-group row text-center" style="margin-top:50px; margin-left: 200px; font-size:30px;">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="text" readonly class="form-control-plaintext" id="email" value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="form-group row text-center" style="margin-top:50px; margin-left: 200px; font-size:30px;">
    <label for="phone no" class="col-sm-4 col-form-label">Phone No</label>
    <div class="col-sm-8">
      <input type="text" readonly class="form-control-plaintext" id="phone no" value="<?php echo $phone; ?>">
    </div>
  </div>
   
</form>
      </div>
</div><!-- container -->
</div><!-- container-fluid -->

</main>
  <footer> 
    <div class="bg-success" style="
        padding:10px;
        text-align:center;
        width:100%;
        color: white;
        margin-top:50px;
        ">
     
    Vehical Parking Reservation System
  <br>Copyright @ 2021
    </div>
    </footer>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>       
</body>
</html>