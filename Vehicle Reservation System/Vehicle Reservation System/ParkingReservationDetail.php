<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Parking Reservation Detail</title>
    <style>
      th, td{
        text-align:center;
      }
    </style>
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
   
               
      <div class="container-fluid justify-content-center" style="margin: 30px; width:100%">
        <div class="jumbotron text-center w-50 mx-auto justify-content-center"  style="height: 100px border:radius 50px;padding:20px">
          <div class="container align-middle">
     <h3 class="text-center" >Booking Details</h3>
   </div>
  </div>

<div class="container-fluid justify-content-center" style="width: 100%">
    
 <table class="table justify-content-center table-responsive" style=" width:90%; margin: auto; margin-top:50px; margin-right: 35px; margin-left:35px">
  <thead>
    <tr class="bg-success">
      <th scope="col" style="width:10%; color:white">User Id</th> 
      <th scope="col" style="width:10%; color:white">User Name</th> 
       <th scope="col" style="width:10%; color:white">Start Date</th> 
        <th scope="col" style="width:10%; color:white">Start Time</th>
      <th scope="col" style="width:10%; color:white">End Date</th>
      <th scope="col" style="width:10%; color:white">End Time</th>
      <th scope="col" style="width:10%; color:white">Booked Date and Time</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
  $date = date('Y-m-d');
  $time = date('H:i');
  include 'Connect.php';
$query="SELECT * FROM `parking slots`";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
$str="parking zone _".$row['Id'];

?>
<tr><td colspan="8"><h4><?php echo $str; ?></h4></td></tr>
<?php
$query1="SELECT * FROM `$str`";

$query_run1=mysqli_query($conn, $query1);

if(mysqli_num_rows($query_run1)>0)
{
while($row=mysqli_fetch_array($query_run1))
{
if( ($date<=$row['Start Date']) && ($date<=$row['End Date']) ) {
?>
<tr>
          <td><?php echo $row['User Id'];?></td>
         <td><?php echo $row['User Name'];?></td>
          <td><?php echo $row['Start Date'];?></td>
          <td><?php echo $row['Start Time'];?></td> 
      <td><?php echo $row['End Date'];?></td> 
     <td><?php echo $row['End Time'];?></td> 
     <td><?php echo $row['Booked Date and Time'];?></td>  
          
</tr>
<?php
}
}
}
}
}
?>
  </tbody>
</table>

</div>
  
  
  
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