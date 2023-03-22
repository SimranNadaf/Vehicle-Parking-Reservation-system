<?php 

$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>FeedBack Form</title>
</head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">


  <a class="navbar-brand" style="color: white" href="HomePage.php">Vehical Parking Reservation System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="HomePage.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
                <a style="color: white" href="#" class="nav-link dropdown-toggle"
                data-toggle="dropdown" id="mydropdown">Login</a>
                <div class="dropdown-menu"
                  aria-labelledby="mydropdown">
                  <a href="LoginPage.php" class="dropdown-item">User Login</a>
                   <a href="AdminLogin.php" class="dropdown-item">Admin Login</a>
                    
                  
                </div>
              </li>
      <li class="nav-item ">
      <a class="nav-link" style="color:white;" href="UserRegistration.php">User Registration<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
  <a class="nav-link" style="color:white;" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0"> 
    </form>
  </div>
</nav>
<br><br><br>
    
   

       <div class="container-fluid justify-content-center " style="margin: 30px;">
        <div class="jumbotron text-center w-50 mx-auto justify-content-center"  style="height: 100px border: radius 50px;padding:20px">
          <div class="container align-middle">
     <h3 class="text-center" >FeedBack</h3>
   
  </div>
</div>
<div class="form-group container justify-content-center" style="width:30%">
<form method="post" action="FeedbackProcess.php?id=<?php echo $id; ?>">
 
<label class="ssr-only" for="feedbackType">FeedBack Type</label>
<br>

<label class="radio-inline px-3">
      <input type="radio" name="feedbacktype" value="comment">
    </label>Comment
    
    
    <label class="radio-inline px-3">
      <input type="radio" name="feedbacktype" value="suggestion">
    </label>Suggestion


    <label class="radio-inline px-3">
      <input type="radio" name="feedbacktype" value="question">
    </label>Question

    <br>
    <br>
  <label class="ssr-only" for="gen">Describe your FeedBack</label>
<div class="mb-3">

    <textarea class="form-control" name="msg" id="FeedbackTextarea1" rows="3"></textarea>
  </div>
  <label class="ssr-only" for="name">Name</label>
  
     <br>
   
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?php echo $name; ?>" required>
     <br>

  <label class="ssr-only" for="email">Email</label>
 
     <br>
   
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
 
  <hr>
  <br>
  <div class="text-center">
    <input class="btn-lg btn-success" type="submit" name="submit" value="Submit FeedBack">
  </div>
  </hr>
  
</form>
</div>
</div>
  <footer> 
    <div class="bg-success" style="
        padding:10px;
        text-align:center;
        width:100%;
        color: white;">
     
    Vehical Parking Reservation System
  <br>Copyright @ 2021
    </div>
    </footer>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>       
</body>
</html>