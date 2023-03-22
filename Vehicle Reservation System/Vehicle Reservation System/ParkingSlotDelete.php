<?php 

include 'Connect.php';


$id=$_GET['id'];

  $query="DELETE FROM `parking slots` WHERE `Id`='$id'";

$result=mysqli_query($conn, $query);

if($result)
   {
 
     echo '<script>alert("Parking Slot Deleted Successfully!")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/ViewParkingSlots.php?id=<?php echo $id; ?>" />

   
   <?php }
   else{
   echo '<script>alert("Parking slot is not Deleted. Try Again!")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/ViewParkingSlots.php?id=<?php echo $id; ?>" />
<?php
   }




?>