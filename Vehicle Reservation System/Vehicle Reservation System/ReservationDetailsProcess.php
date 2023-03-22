<?php 
include 'Connect.php'; 
if(isset($_GET['slot'])){

$name=$_GET['name'];
$id=$_GET['id'];
$Sdate=$_GET['Sdate'];
$Stime=$_GET['Stime'];
$Edate=$_GET['Edate'];
$Etime=$_GET['Etime'];
$type=$_GET['type'];
$slot=$_GET['slot'];
$q="INSERT INTO `$slot` (`User Id`, `User Name`, `Start Date`, `Start Time`, `End Date`, `End Time`) VALUES ('$id','$name','$Sdate','$Stime','$Edate','$Etime')";
$p=mysqli_query($conn,$q);
if($p){
$str1=$name."_".$id;
$q="INSERT INTO `$str1` (`Parking Zone`, `Vehicle Type`, `Start Date`, `Start Time`, `End Date`, `End Time`) VALUES ('$slot','$type','$Sdate','$Stime','$Edate','$Etime')";
$p=mysqli_query($conn,$q);
if($p){
echo "<script>alert('You are Booked Successfully Parking slot! ');</script>";
?>

<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserProfile.php?id=<?php echo $id;?>" />

<?php

}
else{
echo "<script>alert(' Some thing is wrong. Try Again 1');</script>";
?>

<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/NewBooking.php?id=<?php echo $id;?>" />

<?php
}

}
else{
echo "<script>alert(' Some thing is wrong. Try Again 2 ');</script>";
?>

<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/NewBooking.php?id=<?php echo $id;?>" />

<?php
}


}


?>