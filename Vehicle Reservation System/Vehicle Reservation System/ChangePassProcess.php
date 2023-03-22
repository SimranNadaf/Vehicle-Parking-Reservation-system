<?php 

include 'Connect.php';
$id=$_GET['id'];

$query="SELECT `Password` FROM `admin` WHERE `Id`='$id'";

$query_run=mysqli_query($conn, $query);

if(mysqli_num_rows($query_run)>0)
{
while($row=mysqli_fetch_array($query_run))
{
$pwd=$row['Password'];
echo $pwd;
}
}

if(isset($_POST['submit'])){

$old=$_POST['pwd'];
$new=$_POST['pwd1'];

if($old==$pwd){

$result = mysqli_query($conn,"UPDATE `admin` SET `Password`='$new' WHERE `Id`='$id'");
if($result)
   {
 
     echo '<script>alert("You are Password is Changed!")</script>'; 
     
?>
 <meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />
<?php
}

   else{
   echo '<script>alert("You are Password is Not  Changed! ")</script>'; 
     
?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/AdminProfile.php?id=<?php echo $id; ?>" />
<?php
   }

}

else{
  echo '<script>alert("You are Password is not Correct. Try Again!")</script>'; 
}

}
?>