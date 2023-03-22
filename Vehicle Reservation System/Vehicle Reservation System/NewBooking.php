<?php 

if(isset($_GET['slots'])) {
$slots=$_GET['slots'];
$Sdate=$_GET['Sdate'];
$Stime=$_GET['Stime'];
$Edate=$_GET['Edate'];
$Etime=$_GET['Etime'];
$type=$_GET['type'];

}
else{
$Stime="0:00";
$Etime="0:00";
$type="";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>New Booking</title>
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
   <h3 class="text-center" >New Parking Reservation</h3>
   
  </div>
</div>
<div class="form-group container justify-content-center" style="width:30%">
<form method="post" action="NewBookingProcess.php?id=<?php echo $_GET['id']; ?>">
  <label class="ssr-only" for="name">Start Date</label>

  <br>

   <input type="date" class="form-control" name="Sdate" id="date" placeholder="Enter date" required value="<?php echo $Sdate; ?>">
     <br>
     <label class="ssr-only" for="no">Start Time</label>
 
     <br>
  <select style="width: 100%; height: 40px;" name="Stime">
 <option <?php
if($Stime=="0:00"){
echo "selected";
} ?>
>0:00</option>
 <option <?php
if($Stime=="0:30"){
echo "selected";
} ?>>0:30</option>
 <option <?php
if($Stime=="1:00"){
echo "selected";
} ?>>1:00</option>
 <option <?php
if($Stime=="1:30"){
echo "selected";
} ?>>1:30</option>
 <option <?php
if($Stime=="2:00"){
echo "selected";
} ?>>2:00</option>
 <option <?php
if($Stime=="2:30"){
echo "selected";
} ?>>2:30</option>
 <option <?php
if($Stime=="3:00"){
echo "selected";
} ?>>3:00</option>
 <option <?php
if($Stime=="3:30"){
echo "selected";
} ?>>3:30</option>
 <option <?php
if($Stime=="4:00"){
echo "selected";
} ?>>4:00</option>
 <option <?php
if($Stime=="4:30"){
echo "selected";
} ?>>4:30</option>
 <option <?php
if($Stime=="5:00"){
echo "selected";
} ?>>5:00</option>
 <option <?php
if($Stime=="5:30"){
echo "selected";
} ?>>5:30</option>
 <option <?php
if($Stime=="6:00"){
echo "selected";
} ?>>6:00</option>
 <option <?php
if($Stime=="6:30"){
echo "selected";
} ?>>6:30</option>
 <option <?php
if($Stime=="7:00"){
echo "selected";
} ?>>7:00</option>
 <option <?php
if($Stime=="7:30"){
echo "selected";
} ?>>7:30</option>
 <option <?php
if($Stime=="8:00"){
echo "selected";
} ?>>8:00</option>
 <option <?php
if($Stime=="8:30"){
echo "selected";
} ?>>8:30</option>
 <option <?php
if($Stime=="9:00"){
echo "selected";
} ?>>9:00</option>
 <option <?php
if($Stime=="9:30"){
echo "selected";
} ?>>9:30</option>
 <option <?php
if($Stime=="10:00"){
echo "selected";
} ?>>10:00</option>
 <option <?php
if($Stime=="10:30"){
echo "selected";
} ?>>10:30</option>
 <option <?php
if($Stime=="11:00"){
echo "selected";
} ?>>11:00</option>
 <option <?php
if($Stime=="11:30"){
echo "selected";
} ?>>11:30</option>
 <option <?php
if($Stime=="12:30"){
echo "selected";
} ?>>12:30</option>
 <option <?php
if($Stime=="13:00"){
echo "selected";
} ?>>13:00</option>
 <option <?php
if($Stime=="13:30"){
echo "selected";
} ?>>13:30</option>
 <option <?php
if($Stime=="14:00"){
echo "selected";
} ?>>14:00</option>
 <option <?php
if($Stime=="14:30"){
echo "selected";
} ?>>14:30</option>
 <option <?php
if($Stime=="15:00"){
echo "selected";
} ?>>15:00</option>
 <option <?php
if($Stime=="15:30"){
echo "selected";
} ?>>15:30</option>
 <option <?php
if($Stime=="16:00"){
echo "selected";
} ?>>16:00</option>
 <option <?php
if($Stime=="16:30"){
echo "selected";
} ?>>16:30</option>
 <option <?php
if($Stime=="17:00"){
echo "selected";
} ?>>17:00</option>
 <option <?php
if($Stime=="17:30"){
echo "selected";
} ?>>17:30</option>
 <option <?php
if($Stime=="18:00"){
echo "selected";
} ?>>18:00</option>
 <option <?php
if($Stime=="18:30"){
echo "selected";
} ?>>18:30</option>
 <option <?php
if($Stime=="19:00"){
echo "selected";
} ?>>19:00</option>
 <option <?php
if($Stime=="19:30"){
echo "selected";
} ?>>19:30</option>
 <option <?php
if($Stime=="20:00"){
echo "selected";
} ?>>20:00</option>
 <option <?php
if($Stime=="20:30"){
echo "selected";
} ?>>20:30</option>
 <option <?php
if($Stime=="21:00"){
echo "selected";
} ?>>21:00</option>
 <option <?php
if($Stime=="21:30"){
echo "selected";
} ?>>21:30</option>
 <option <?php
if($Stime=="22:00"){
echo "selected";
} ?>>22:00</option>
 <option <?php
if($Stime=="22:30"){
echo "selected";
} ?>>22:30</option>
 <option <?php
if($Stime=="23:00"){
echo "selected";
} ?>>23:00</option>
 <option <?php
if($Stime=="23:30"){
echo "selected";
} ?>>23:30</option>
 <option <?php
if($Stime=="24:00"){
echo "selected";
} ?>>24:00</option>
 <option <?php
if($Stime=="24:30"){
echo "selected";
} ?>>24:30</option>



</select>

    <br>
    <br>

<label class="ssr-only" for="name">End Date</label>

  <br>

   <input type="date" class="form-control" name="Edate" id="date" placeholder="Enter date" required value="<?php echo $Edate; ?>">
     <br>
    
    <label class="ssr-only" for="no">End Time</label>
 
     <br>
  <select style="width: 100%; height: 40px;" name="Etime">
  <option <?php
if($Etime=="0:00"){
echo "selected";
} ?>
>0:00</option>
 <option <?php
if($Etime=="0:30"){
echo "selected";
} ?>>0:30</option>
 <option <?php
if($Etime=="1:00"){
echo "selected";
} ?>>1:00</option>
 <option <?php
if($Etime=="1:30"){
echo "selected";
} ?>>1:30</option>
 <option <?php
if($Etime=="2:00"){
echo "selected";
} ?>>2:00</option>
 <option <?php
if($Etime=="2:30"){
echo "selected";
} ?>>2:30</option>
 <option <?php
if($Etime=="3:00"){
echo "selected";
} ?>>3:00</option>
 <option <?php
if($Etime=="3:30"){
echo "selected";
} ?>>3:30</option>
 <option <?php
if($Etime=="4:00"){
echo "selected";
} ?>>4:00</option>
 <option <?php
if($Etime=="4:30"){
echo "selected";
} ?>>4:30</option>
 <option <?php
if($Etime=="5:00"){
echo "selected";
} ?>>5:00</option>
 <option <?php
if($Etime=="5:30"){
echo "selected";
} ?>>5:30</option>
 <option <?php
if($Etime=="6:00"){
echo "selected";
} ?>>6:00</option>
 <option <?php
if($Etime=="6:30"){
echo "selected";
} ?>>6:30</option>
 <option <?php
if($Etime=="7:00"){
echo "selected";
} ?>>7:00</option>
 <option <?php
if($Etime=="7:30"){
echo "selected";
} ?>>7:30</option>
 <option <?php
if($Etime=="8:00"){
echo "selected";
} ?>>8:00</option>
 <option <?php
if($Etime=="8:30"){
echo "selected";
} ?>>8:30</option>
 <option <?php
if($Etime=="9:00"){
echo "selected";
} ?>>9:00</option>
 <option <?php
if($Etime=="9:30"){
echo "selected";
} ?>>9:30</option>
 <option <?php
if($Etime=="10:00"){
echo "selected";
} ?>>10:00</option>
 <option <?php
if($Etime=="10:30"){
echo "selected";
} ?>>10:30</option>
 <option <?php
if($Etime=="11:00"){
echo "selected";
} ?>>11:00</option>
 <option <?php
if($Etime=="11:30"){
echo "selected";
} ?>>11:30</option>
 <option <?php
if($Etime=="12:30"){
echo "selected";
} ?>>12:30</option>
 <option <?php
if($Etime=="13:00"){
echo "selected";
} ?>>13:00</option>
 <option <?php
if($Etime=="13:30"){
echo "selected";
} ?>>13:30</option>
 <option <?php
if($Etime=="14:00"){
echo "selected";
} ?>>14:00</option>
 <option <?php
if($Etime=="14:30"){
echo "selected";
} ?>>14:30</option>
 <option <?php
if($Etime=="15:00"){
echo "selected";
} ?>>15:00</option>
 <option <?php
if($Etime=="15:30"){
echo "selected";
} ?>>15:30</option>
 <option <?php
if($Etime=="16:00"){
echo "selected";
} ?>>16:00</option>
 <option <?php
if($Etime=="16:30"){
echo "selected";
} ?>>16:30</option>
 <option <?php
if($Etime=="17:00"){
echo "selected";
} ?>>17:00</option>
 <option <?php
if($Etime=="17:30"){
echo "selected";
} ?>>17:30</option>
 <option <?php
if($Etime=="18:00"){
echo "selected";
} ?>>18:00</option>
 <option <?php
if($Etime=="18:30"){
echo "selected";
} ?>>18:30</option>
 <option <?php
if($Etime=="19:00"){
echo "selected";
} ?>>19:00</option>
 <option <?php
if($Etime=="19:30"){
echo "selected";
} ?>>19:30</option>
 <option <?php
if($Etime=="20:00"){
echo "selected";
} ?>>20:00</option>
 <option <?php
if($Etime=="20:30"){
echo "selected";
} ?>>20:30</option>
 <option <?php
if($Etime=="21:00"){
echo "selected";
} ?>>21:00</option>
 <option <?php
if($Etime=="21:30"){
echo "selected";
} ?>>21:30</option>
 <option <?php
if($Etime=="22:00"){
echo "selected";
} ?>>22:00</option>
 <option <?php
if($Etime=="22:30"){
echo "selected";
} ?>>22:30</option>
 <option <?php
if($Etime=="23:00"){
echo "selected";
} ?>>23:00</option>
 <option <?php
if($Etime=="23:30"){
echo "selected";
} ?>>23:30</option>
 <option <?php
if($Etime=="24:00"){
echo "selected";
} ?>>24:00</option>
 <option <?php
if($Etime=="24:30"){
echo "selected";
} ?>>24:30</option>



</select>

 <br><br>
 <label class="ssr-only" for="type">Type of Vehicle</label>
 <br>
    <select class="form-select" aria-label="Disabled select example" style="width:100%; height: 40px;" name="type">
        <option <?php if($type==""){ echo "selected"; } ?>></option>
        <option value="4 Wheeler" <?php if($type=="4 Wheeler"){ echo "selected"; } ?>>4 Wheeler</option>
        <option value="2 Wheeler" <?php if($type=="2 Wheeler"){ echo "selected"; } ?>>2 Wheeler</option>
      </select>
   <br><br>
  <hr>
  <br>
  <div class="text-center">
    <input class="btn-lg btn-success" type="submit" name="search" value="Search">
  </div>
  </hr>
  </form>
</div>
</div>

<?php
if(isset($_GET['slots'])) {
$slots=$_GET['slots'];
$slots1= explode(",", $slots);
$len=sizeof($slots1);

for($i=0;$i<$len;$i++) {


?>

  
  <div id=<?php echo $slots1[$i]; ?> >
<div class="text-center" style="margin:50px;">
  <br>
<a class=" bg-light text-success" style="border-style: solid;text-decoration:none; padding:20px; font-size: 20px;" href="ReservationDetails.php?id=<?php echo $_GET['id']; ?>&slot=<?php echo $slots1[$i]; ?>&Sdate=<?php echo $Sdate; ?>&Stime=<?php echo $Stime; ?>&Edate=<?php echo $Edate; ?>&Etime=<?php echo $Etime; ?>&type=<?php echo $type; ?>">
  <img src="parkingzone1.png" alt="Parking zone" height="50px">
 <?php echo $slots1[$i]; ?>
 </a>
  </div>
  </div>
  
  <?php
  
  }
  }
?>



<div class="text-center">

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