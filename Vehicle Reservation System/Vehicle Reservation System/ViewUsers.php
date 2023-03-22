<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View Users</title>
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
        <div class="jumbotron text-center w-50 mx-auto justify-content-center"  style="height: 100px border: radius 50px;padding:20px">
          <div class="container align-middle">
     <h3 class="text-center" >View Users</h3>
   </div>
  </div>

<div class="container-fluid justify-content-center table-responsive">
    
 <table class="table" style=" width:80%; margin:0 auto; margin-top:30px; margin-left:110px;">
  <thead>
    <tr class="bg-success">
      <th scope="col" style="width:5%; color:white">ID</th>
      <th scope="col" style="width:10%; color:white">Name</th>
      <th scope="col" style="width:8%; color:white">Gender</th>
      <th scope="col" style="width:10%; color:white">Email</th>    
      <th scope="col" style="width:10%; color:white">Phone No. </th>
      <th scope="col" style="width:10%; color:white">Address</th>
  
    </tr>
  </thead>
  <tbody>
   
<?php 

include 'Connect.php';

  $query="SELECT * FROM `user`";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
?>
  <tr>
      <td><?php echo $row['Id'];?></td>
      <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['Gender'];?></td> 
      <td><?php echo $row['Email'];?></td>
     <td><?php echo $row['Phone no'];?></td>
     <td><?php echo $row['Address'];?></td> 
     </tr>
     <?php
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