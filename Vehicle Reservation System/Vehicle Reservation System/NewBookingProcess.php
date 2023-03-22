<?php
if(isset($_POST['search'])) {
$id=$_GET['id'];
$Sdate=$_POST['Sdate'];
$Stime=$_POST['Stime'];
$Edate=$_POST['Edate'];
$Etime=$_POST['Etime'];
$type=$_POST['type'];
$i=0;
$Flag=true;

$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $Cdate=$date->format('Y-m-d');
 $Ctime=$date->format('H:i:s');
 if( ($Sdate>$Edate) || ($Sdate<$Cdate) || ($Edate<$Cdate)){
 echo "<script>alert(' Please Enter Correct Date and Time');</script>";
 ?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/NewBooking.php?id=<?php echo $id; ?>" />
<?php
 }
 if($Sdate==$Edate){
 if($Stime>$Etime){ 
 echo "<script>alert(' Please Enter Correct Date and Time');</script>";
 ?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/NewBooking.php?id=<?php echo $id; ?>" />
<?php
 }
 }

include 'Connect.php';
$result1 = mysqli_query($conn,"SELECT `Id`, `Parking Zone`, `Type` FROM `parking slots`");


if(mysqli_num_rows($result1)>0)

{

while($row = mysqli_fetch_assoc($result1))
{
if($type==$row['Type']) {
$str1="parking zone _".$row['Id'];

$result= mysqli_query($conn,"SELECT `Id`, `User Id`, `User Name`, `Start Date`, `Start Time`, `End Date`, `End Time`, `Booked Date and Time` FROM `$str1`");
if(mysqli_num_rows($result)>0)

{
$Flag=true;
while($row = mysqli_fetch_assoc($result))
{

if( ($Sdate==$row['Start Date']) && ($Edate==$row['End Date'])) {
   if( ($Stime==$row['Start Time']) && ($Etime==$row['End Time'])) {
   $Flag=false;
   break;
   
   }  
   elseif( ($Stime<$row['Start Time']) && ($row['Start Time']<$row['End Time']) && ($row['End Time']<$Etime)) {
 $Flag=false;
 break;
   }
   elseif( ($row['Start Time']<$Stime) && ($Stime<$Etime) && ($Etime<$row['End Time'])){
   $Flag=false;
   break;
   }
    elseif( ($Stime<$row['Start Time']) && ($row['Start Time']<$Etime) && ($Etime<$row['End Time'])) {
    $Flag=false;
   break;
   }
   elseif( ($row['Start Time']<$Stime) && ($Stime<$row['End Time']) && ($row['End Time']<$Etime)) {
   $Flag=false;
   break;
   }
  
}
 elseif( ($Sdate<$row['Start Date']) && ($row['Start Date']<$row['End Date']) && ($row['End Date']<$Edate)) {
   $Flag=false;
   break;
   }
   elseif( ($row['Start Date']<$Sdate) && ($Sdate<$Edate) && ($Edate<$row['End Date'])){
   $Flag=false;
   break;
   }
    elseif( ($Sdate<$row['Start Date']) && ($row['Start Date']<$Edate) && ($Edate<$row['End Date'])) {
    $Flag=false;
   break;
   }
   elseif( ($row['Start Date']<$Sdate) && ($Sdate<$row['End Date']) && ($row['End Date']<$Edate)) {
   $Flag=false;
   break;
   }
   
}
}
if($Flag==true){
$slots[$i]=$str1;
$i++;
}

}

}
}
 ?>
<meta http-equiv="refresh" content="0;URL=http://localhost/Vehicle Reservation System/NewBooking.php?slots=<?php  echo implode(',',$slots); ?>&id=<?php echo $id; ?>&Sdate=<?php echo $Sdate; ?>&Stime=<?php echo $Stime; ?>&Edate=<?php echo $Edate; ?>&Etime=<?php echo $Etime; ?>&type=<?php echo $type; ?>" />
<?php
}
?>