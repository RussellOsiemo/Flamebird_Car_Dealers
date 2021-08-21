<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\sidebars\sidebars.css">
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
<script src="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\sidebars\sidebars.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="cars.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
          Cars
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cars.php">Sports Cars</a></li>
            <li><a class="dropdown-item" href="cars.php">Luxury Cars</a></li>
            <li><a class="dropdown-item" href="cars.php">Off-road Cars</a></li>
            <li><a class="dropdown-item" href="cars.php">Cormmercial Cars</a></li>
            <li><a class="dropdown-item" href="cars.php">Trucks</a></li>
            <li><a class="dropdown-item" href="cars.php">Used Cars</a></li>
            
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
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="reset.php">Reset Password</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
</nav>

</head>
<body >
<span class="border border-info">
<div class="flex-shrink-0 p-3 bg-white" style="width: 280px; height=100%; ">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <i class="fa fa-user"></i>
      <span class="fs-5 fw-semibold"> &nbsp;<?php echo htmlspecialchars($_SESSION["username"]); ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-tachometer"></i></span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Branch
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="home.php" class="link-dark rounded">Home</a></li>
            <li><a href="maseno.php" class="link-dark rounded">Maseno</a></li>
            <li><a href="nairobi.php" class="link-dark rounded">Nairobi</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <!-- <li><a href="book.php" class="link-dark rounded">Book Car</a></li> -->
            <li><a href="sell.php" class="link-dark rounded">Sell Car</a></li>
            <!-- <li><a href="auction.php" class="link-dark rounded">Auction</a></li> -->
            <!-- <li><a href="service.php" class="link-dark rounded">Test Drive</a></li> -->
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Orders
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">New</a></li>
            <li><a href="#" class="link-dark rounded">Processed</a></li>
            <li><a href="#" class="link-dark rounded">Shipped</a></li>
            <li><a href="#" class="link-dark rounded">Returned</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="admin_login.php" class="link-dark rounded">Administrator</a></li>
            <li><a href="salesagent_login.php" class="link-dark rounded">Sales Agent</a></li>
            <li><a href="reset.php" class="link-dark rounded">Reset Password</a></li>
            <li><a href="logout.php" class="link-dark rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  

</span>


<section>
     <!-- Footer Start -->
     <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-about">
                            <h3>About Us</h3>
                            <p>
                              This is a Bussiness Website managing online shopping for cars situated in our branches  
                            </p>
                            <div class="footer-social">
                                <a href="https://twitter.com"><i class="fa fa-facebook"></i></a>
                                <a href="https://facebook.com"><i class="fa fa-twitter" ></i></a>
                                <a href="https://youtube.com"><i class="fa fa-youtube"></i></i></a>
                                <a href="https://instagram.com"><i class="fa fa-instagram"></i></i></a>
                                <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h3>Get In Touch</h3>
                            <p><i class="fa fa-street-view"></i>Jamuhuri Street, Nakuru, KENYA</p>
                            <p><i class="fa fa-phone"></i>+254 733 458005</p>
                            <p><i class="fa fa-envelope"></i>flamebird@gmail.com</p>
                            <p><i class="fa fa-clock-o"></i>Mon - Fri, 9AM - 10PM</p>
                            <p><i class="fa fa-clock-o"></i>Sat - Sun, 2PM - 10PM</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-links">
                            <h3>Our Global Patners</h3>
                            <a href="https://www.motorbiscuit.com" class="link-danger">Motorbiscuit.com</a>
                            <a href="https://www.drom.ru">Drom.ru</a>
                            <a href="https://www.auto.ru">Auto.ru</a>
                            <a href="https://www.mobile.de">Mobile.de</a>
                            <a href="https://www.drive2.ru">Drive2.ru</a>
                            <a href="https://www.kbb.com">Kbb.com</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-project">
                            <h3>Latest Imports</h3>
                            <a href=""><img src="Images/1.jpg" alt="Image"></a>
                            <a href=""><img src="Images/3.jpg" alt="Image"></a>
                            <a href=""><img src="Images/2.jpg" alt="Image"></a>
                            <a href=""><img src="Images/4.jpg" alt="Image"></a>
                            <a href=""><img src="Images/5.jpg" alt="Image"></a>
                            <a href=""><img src="Images/teslamodels.jpg" alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-newsletter">
                <p>
                   We offer our customers a digital newsletter every month and a digital car magazine 
                </p>
                <div class="row form">
                    <div class="col-sm-4">
                        <input class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" placeholder="Your Email" >
                    </div>
                    <div class="col-sm-4">
                        <button class="btn">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copy-text">
                                <p>&copy; <a href="#">2021 Maseno Tech Firm</a>.  All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copy-menu">
                                <a href="about.php">About</a>
                                <a href="terms.php">Terms</a>
                                <a href="privacy.php">Privacy</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


</section> 
<style>
    .footer {
    position: relative;
    padding-top: 45px;
    background: #121518;
}

.footer .footer-about,
.footer .footer-contact,
.footer .footer-links,
.footer .footer-project {
    position: relative;
    margin-bottom: 45px;
    color: #999999;
}

.footer .footer-about h3,
.footer .footer-contact h3,
.footer .footer-links h3,
.footer .footer-project h3 {
    position: relative;
    margin-bottom: 20px;
    padding-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
    color: #eeeeee;
}

.footer .footer-about h3::after,
.footer .footer-contact h3::after,
.footer .footer-links h3::after,
.footer .footer-project h3::after {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    left: 0;
    bottom: 0;
    background: #eeeeee;
}

.footer .footer-social {
    position: relative;
    margin-top: 20px;
}

 .footer .footer-social a {
    display: inline-block;
    width: 35px;
    height: 35px;
    padding: 6px 0;
    text-align: center;
    color: #999999;
    font-size: 14px;
    border: 1px solid #999999;
    border-radius: 35px;
} 

.footer .footer-social a:hover {
    color: #ffffff;
    background: #0085ff;
    border-color: #0085ff;
}

.footer .footer-contact p {
    margin-bottom: 10px;
    font-size: 16px;
    color: #999999;
}

.footer .footer-contact i {
    margin-right: 10px;
    font-size: 16px;
    color: #999999;
}

.footer .footer-contact a:last-child i {
    margin: 0;
}

.footer .footer-contact a:hover i {
    color: #0085ff;
}

.footer .footer-links a {
    display: block;
    margin-bottom: 6px;
    padding-left: 15px;
    color: #999999;
}

.footer .footer-links a:last-child {
    margin: 0;
}

.footer .footer-links a:hover {
    color: #0085ff;
}

.footer .footer-links a::before {
    position: absolute;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    left: 0;
}

.footer .footer-project {
    float: left;
    font-size: 0;
}

.footer .footer-project a {
    padding: 0 8px 8px 0;
    display: block;
    width: 33.33%;
    float: left;
}

.footer .footer-project a img {
    width: 100%;
}

.footer .footer-newsletter {
    margin-bottom: 35px;
    max-width: 700px;
    text-align: center;
    color: #999999;
}

.footer .footer-newsletter input {
    height: 35px;
    border: none;
    border-radius: 5px;
    background: rgba(256, 256, 256, .15);
    margin-bottom: 15px;
}

.footer .footer-newsletter .btn {
    display: block;
    width: 100%;
    height: 35px;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: #ffffff;
    background: #e9414a;
    border-radius: 5px;
    border: none;
    transition: .3s;
}

.footer .footer-newsletter .btn:hover {
    color: #0085ff;
    background: #ffffff;
}

.footer .footer-newsletter .btn:focus {
    box-shadow: none;
}


.footer .copyright {
    position: relative;
    padding: 25px 0;
    background: #000000;
}

.footer .copyright .copy-text p {
    margin: 0;
    font-size: 16px;
    font-weight: 400;
    color: #999999;
}

.footer .copyright .copy-text p a {
    color: #0085ff;
    text-decoration: none;
}

.footer .copyright .copy-text p a:hover {
    color: #ff008c;
}

.footer .copyright .copy-menu {
    position: relative;
    font-size: 0;
    text-align: right;
}

.footer .copyright .copy-menu a {
    color: #999999;
    font-size: 16px;
    font-weight: 400;
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .3);
}

.footer .copyright .copy-menu a:hover {
    color: #0085ff;
}

.footer .copyright .copy-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

@media (max-width: 767.98px) {
    .footer .copyright .copy-text,
    .footer .copyright .copy-menu {
        text-align: center;
    }

    .footer .copyright .copy-text p {
        margin-bottom: 5px;
    }

}
</style>
</body>
</html>