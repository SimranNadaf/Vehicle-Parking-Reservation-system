<?php 

include 'Connect.php';

if(isset($_POST['submit'])){

$msg=$_POST['msg'];
$email=$_POST['email'];
$name=$_POST['name'];
$result = mysqli_query($conn,"INSERT INTO `feedback`(`Name`, `Email`, `Message`, `Type`) VALUES ('$name','$email','$msg','Contact')");

if($result)
   {
   
     echo '<script>alert("We will contact you as soon as possible! ")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/contact.php" />

   
   <?php }
   else{
   echo '<script>alert(" Your Response is not submitted. Try Again! ")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/contact.php" />
<?php
   }

}


?>