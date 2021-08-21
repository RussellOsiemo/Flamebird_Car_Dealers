<?php
include "connection.php";
if (isset($_POST['submit'])){
  $username=$_POST['username'];
  $pass=$_POST["pass"];
  //to prevent injection
  $username=stripcslashes($username);
  $pass=stripslashes($pass);
  $username=mysqli_real_escape_string($conn,$username);
  $pass=mysqli_real_escape_string($conn,$pass);

  $sql="SELECT * FROM admin_login WHERE username='$username' AND pass='$pass'";
  $result=mysqli_query($conn,$sql);
  $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);

  if($count==1){
    echo "<h1><center><b>Successful Login.....</b></center></h1>";
    header("location:control.php");

  }else{
    echo "<h1><center><b>Failed Login check username Or password if you dont have one visit the system administrator.....</b></center></h1>";
  }

}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <style>
      @media (max-width :700px){
      body{
      font-size :10px;
     font-weight: 50;
     max-width: 100%;
     flex-direction: column;
     width: fit-content;

    }
    .card-text{
      font-size: 10px;
      font-weight: 50;
           }
    .card-title{
      text-align: center;
      text-decoration: bold;
      font-size: 12px;
    }
    .card.shadow-sm{
      max-width: 100%;
    }
    }
  </style>
    <title>FlameBird</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FlameBird</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="cars.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Cars
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="sportscar.php">Sports Cars</a></li>
            <li><a class="dropdown-item" href="Luxurycar.php">Luxury Cars</a></li>
            <li><a class="dropdown-item" href="offroad.php">Off-road Cars</a></li>
            <li><a class="dropdown-item" href="commercial.php">Cormmercial Cars</a></li>
            <li><a class="dropdown-item" href="Trucks.php">Trucks</a></li>
            <li><a class="dropdown-item" href="Luxurycar.php">Used Cars</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sell.php">Sell</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="book.php">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new.php">New</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <!-- <li><a class="dropdown-item" href="reset.php">Reset Password</a></li> -->
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
</nav>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="Images/show.jpg">
<section class="row">
    <center><div class="col-md-9">
<form action="admin_login.php" method="post">
            <h3 class="formtitle">LOGIN</h3>
            <?php if (isset($_GET["error"])) {?>
            <p class=error> <?php echo $_GET["error"];?></p>
          
           <p class=error> <?php echo $_GET["error"];?></p>
           <?php }?>
           <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
          <label for="password">Password</label>
          <input type="password" name="pass" placeholder="Password">
          <button type="submit"  name="submit" class="btn btn-success">Login</button>
          <!-- <p><a href="register.php">I Don't Have an Account</a></p> -->
        </form>
        </div></center>
  
</body>
</html>