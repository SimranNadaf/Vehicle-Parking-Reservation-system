<?php
include 'Connect.php';
if( (isset($_GET['id'])) && (isset($_GET['name'])) && (isset($_GET['slot'])) ) {

$id=$_GET['id'];
$name=$_GET['name'];
$slot=$_GET['slot'];

$str1=$name."_".$id;
$query="DELETE FROM `$slot` WHERE `User Id`=$id";

$result=mysqli_query($conn, $query);
if($result){

$query="DELETE FROM `$str1` WHERE `Parking Zone`='$slot'";

$result=mysqli_query($conn, $query);
if($result){

echo "<script>alert('Your Booking is Cancelled  Successfully!');</script>";
?>

<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/MyBooking.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" />
<?php

}
else{
echo "<script>alert('Your Booking is not Cancelled.');</script>";
?>

<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/MyBooking.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" />
<?php

}

}
else{
echo "<script>alert('Your Booking is not Cancelled.');</script>";
?>

<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/MyBooking.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" />
<?php

}

}


?>