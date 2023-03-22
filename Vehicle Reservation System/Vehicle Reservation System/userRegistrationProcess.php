<?php 

include 'Connect.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['no'];
$add=$_POST['add'];
$pwd=$_POST['pwd1'];


$result = mysqli_query($conn,"INSERT INTO `user`( `Name`, `Gender`, `Email`, `Phone no`, `Address`, `Password`) VALUES ('$name','$gender','$email','$phone','$add','$pwd')");

if($result)
   {
  $query="SELECT `Id` FROM `user` where `Email`='$email'";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
  $id=$row['Id'];
}
}
$str=$name."_".$id;
$query="CREATE TABLE `$str` (`Id` Integer PRIMARY KEY AUTO_INCREMENT,
`Parking Zone` varchar(20) NOT NULL, 
`Vehicle Type` varchar(10) NOT NULL,
`Start Date` varchar(10) NOT NULL,
`Start Time` varchar(10) NOT NULL,
`End Date` varchar(10) NOT NULL,
`End Time` varchar(10) NOT NULL,
`Booked Date and Time` timestamp(6))";

$query_run=mysqli_query($conn, $query);

     echo '<script>alert("Your are Registration is completed! ")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/HomePage.php" />

   
   <?php }
   else{
   echo '<script>alert(" Your Regitration is not submitted. Try Again! ")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserRegitration.php" />
<?php
   }



}
?>