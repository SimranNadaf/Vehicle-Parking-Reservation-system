<?php 

include 'Connect.php';

if(isset($_POST['submit'])){
$id=$_GET['id'];
$no=$_POST['no'];
$type=$_POST['type'];


$result = mysqli_query($conn,"INSERT INTO `parking slots`(`Parking Zone`, `Type`) VALUES ('$no','$type')");

if($result)
   {
  $query="SELECT `Id` FROM `parking slots` where `Parking Zone`='$no'";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
  $id2=$row['Id'];
}
}
$str="Parking Zone "."_".$id2;
$query="CREATE TABLE `$str` (`Id` Integer PRIMARY KEY AUTO_INCREMENT,
`User Id` Integer(10) NOT NULL, 
`User Name` varchar(50) NOT NULL,
`Start Date` varchar(10) NOT NULL,
`Start Time` varchar(10) NOT NULL,
`End Date` varchar(10) NOT NULL,
`End Time` varchar(10) NOT NULL,
`Booked Date and Time` timestamp(6))";

$query_run=mysqli_query($conn, $query);

     echo '<script>alert("Parking Slot is add successfully!")</script>'; 
     
?>
  <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />

  
   <?php }
   else{
   echo '<script>alert(" Parking Slot is not add. Try Again! ")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />
<?php
   }



}
?>