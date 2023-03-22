[3:48 am, 19/06/2021] Simran: <?php 

include 'Connect.php';

if(isset($_POST['login'])){


$email=$_POST['email'];
$pwd=$_POST['pwd'];
$result = mysqli_query($conn,"SELECT * FROM `user` WHERE `Email`='$email' and `Password`='$pwd'");

if(mysqli_num_rows($result)>0)
   {
   
   while($row = mysqli_fetch_assoc($result))
             {    
                  $id=$row["Id"];
                  
              }
         echo '<script>alert("your Login Successfully!")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/UserProfile.php?id=<?php echo $id; ?>" />

   
   <?php }


else{
echo "<script>alert('Please enter valid email and password! ');</script>";
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/LoginPage.php" />
 
   
   <?php
}
}

?>