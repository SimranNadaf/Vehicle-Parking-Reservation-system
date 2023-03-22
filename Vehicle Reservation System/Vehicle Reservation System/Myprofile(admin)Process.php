<?php 

include 'Connect.php';

if(isset($_POST['confirm'])){
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['no'];
$pwd=$_POST['pwd'];


$result = mysqli_query($conn,"UPDATE `admin` SET `Name`='$name',`Email`='$email',`Phone no`='$phone',`Password`='$pwd' WHERE `Id`='$id'");
if($result)
   {
 
     echo '<script>alert("You are Record is Updated Successfully")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />

   
   <?php }
   else{
   echo '<script>alert("You are Record is Not Updated")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation SystemAdminProfile.php?id=<?php echo $id; ?>" />
<?php
   }



}
?>