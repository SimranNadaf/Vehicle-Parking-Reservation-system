<?php 

include 'Connect.php';

if(isset($_POST['submit'])){
$id=$_GET['id'];
$ft=$_POST['feedbacktype'];
$msg=$_POST['msg'];
$email=$_POST['email'];
$name=$_POST['name'];


$result = mysqli_query($conn,"INSERT INTO `feedback`(`Name`, `Email`, `Message`, `Type`) VALUES ('$name','$email','$msg','$ft')");
if($result)
   {
 
     echo '<script>alert("Thanks for You are Feedback!")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserProfile.php?id=<?php echo $id; ?>" />

   
   <?php }
   else{
   echo '<script>alert("You are feedback is Not Submitted")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserProfile.php?id=<?php echo $id; ?>" />
<?php
   }



}
?>