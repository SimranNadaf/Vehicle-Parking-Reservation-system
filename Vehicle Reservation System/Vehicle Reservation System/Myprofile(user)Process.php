<?php 

include 'Connect.php';

if(isset($_POST['confirm'])){
$id=$_GET['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['no'];
$add=$_POST['add'];
$pwd=$_POST['pwd'];
$name1=$_GET['name'];

$old=$name1."_".$id;
$new=$name."_".$id;


$result = mysqli_query($conn,"UPDATE `user` SET `Name`='$name',`Gender`='$gender',`Email`='$email',`Phone no`='$phone',`Address`='$add',`Password`='$pwd' WHERE `Id`='$id'");
if($result)
   {
 $result = mysqli_query($conn,"ALTER TABLE `$old`
  RENAME TO `$new`");
if($result)
   {
     echo '<script>alert("You are Record is Updated Successfully")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserProfile.php?id=<?php echo $id; ?>" />

   
   <?php }
   }
   else{
   echo '<script>alert("You are Record is Not Updated")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserProfile.php?id=<?php echo $id; ?>" />
<?php
   }



}
?>