<?php 

include 'Connect.php';


if(isset($_POST['submit'])){

$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['no'];
$pwd=$_POST['pwd'];
$query="INSERT INTO `admin`(`Name`, `Email`, `Phone no`, `Password`) VALUES ('$name','$email','$phone','$pwd')";

$result = mysqli_query($conn,$query);
if($result)
   {
 
     echo '<script>alert("New Admin is add Successfully!")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />
<?php
}

   else{
   echo '<script>alert("New Admin is not add. Try Again! ")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />
<?php
   }

}




?>