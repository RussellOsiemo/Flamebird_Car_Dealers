<?php
 require_once "connection.php";
 // Initialize the session
// session_start();
 
// // Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: admin_login.php");
//     exit;
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Database Control</title>
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
    <link rel="canonical" href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\dashboard">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\assets\dist\css\bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\dashboard\dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">FlameBird Car Sales
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="admin_logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
             Car Sales Report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <center><h1 class="h2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Sales Anaysis</h1></center> -->
         <div class="btn-toolbar mb-2 mb-md-0">
         <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
           <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div> 

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cars Stock</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              
              <th scope="col">Car ID</th>
              <th scope="col">Car Name</th>
              <th scope="col">fuel</th>
              <th scope="col">Price</th>
              <th scope="col">Number</th> 
               <th scope="col">Edit</th> 
              <th scope="col">Remove</th>
            </tr>
          </thead>
          <tbody>
          <?php
$res=mysqli_query($conn,"SELECT * FROM `inventory`");
while ($row=mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>";echo $row ["car_id"];echo "</td>";
echo "<td>";echo $row ["car_Name"];echo "</td>";
echo "<td>";echo $row ["fuel"];echo "</td>";
echo "<td>";echo $row ["cost"];echo "</td>";
echo "<td>";echo $row ["Numbers"];echo "</td>";
echo "<td>";?><a href="edit.php?id=<?php echo $row["car_id"]; ?>"><button type="submit" class="btn btn-success" name="edit" value="edit">Edit</button></a><?php echo "</td>";
echo "<td>";?><a href="remove.php?id=<?php echo $row["car_id"]; ?>"><button type="submit" class="btn btn-danger" name="remove" value="remove">Remove</button></a><?php echo "</td>";
echo "</tr>";
}
?>

          </tbody>
        </table>
        <section>
        <center>
        <div clas="col-md-4">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
  <div class="mb-3">
    <label for="Car Name" class="form-label">Car Name</label>
    <input type="text" class="form-control" id="car_name" name="car_name" aria-describedby="textHelp">
    </div>
    <div class="mb-3">
    <label for="Fuel Type" class="form-label">Fuel Type</label>
    <input type="text" class="form-control" id="fuel" name="fuel" aria-describedby="textHelp">
    </div>
    <div class="mb-3">
    <label for="Car Cost" class="form-label">Car Cost</label>
    <input type="text" class="form-control" id="cost" name="cost" aria-describedby="textHelp">
    </div>
    <div class="mb-3">
    <label for="Car Numbers" class="form-label">Car Numbers</label>
    <input type="text" class="form-control" id="Numbers" name="numbers" aria-describedby="textHelp">
    </div>

  

  
  <button type="submit" class="btn btn-success" name="insert" value="insert">Insert</button>
        <button type="submit" class="btn btn-danger" name="delete" value="delete">Remove</button> 
        <button type="submit" class="btn btn-info" name="update" value="update">Update</button>       
</form>
       
     
<?php

  if (isset($_POST["insert"]))
  {
  mysqli_query($conn,"INSERT INTO `inventory`(`car_Name`, `fuel`, `cost`, `Numbers`) VALUES ('$_POST[car_name]','$_POST[fuel]','$_POST[cost]','$_POST[numbers]')")or die(mysqli_error($conn));
  }
  
  if (isset($_POST["delete"])){
    mysqli_query($conn,"DELETE FROM inventory WHERE car_Name='$_POST[car_name]'")or die(mysqli_error($conn));
  }

  if (isset($_POST["delete"])){
    mysqli_query($conn,"UPDATE inventory WHERE numbers='$_POST[numbers]'")or die(mysqli_error($conn));
  }
  ?>


  
      </section>
      <section>

      <div class="table-responsive">
      <form action="" method="post" enctype="multipart/form-data">
      <table class="table table-striped table-sm">
      <thead>
            <tr>
              
              <th scope="col">Sell ID</th>
              <th scope="col">Car Name</th>
              <th scope="col">Car Description</th>
              <th scope="col">Image</th>
              <th scope="col"> Phone Number</th> 
               <!-- <th scope="col">Accept</th>  -->
              <th scope="col">Deny</th>

            </tr> 
          </thead>
          <?php 
          require_once "connection.php";
          $sql="SELECT * FROM `user_sell` ";
          $sql_run=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($sql_run))
          {
            ?>
           
            <tr>
            
            <td><?php echo $row['sell_id'];?></td>
            <td><?php echo $row['car_name'];?></td>
            <td><?php echo $row['Car_description'];?></td>
              <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="width: 100px; height:100px"/>';?></td>
              <td><?php echo $row['Phone_no'];?></td>
              <td><a href="deny.php?id=<?php echo $row["sell_id"]; ?>"><button type="submit" class="btn btn-danger" name="remove" value="add">Deny</button></a></td>;
            </tr>
           
            <?php
          }
          ?>
      </table>
      </form>
      </div>
      </section>
    </main>
  </div>
</div>

    <script src="bootstrap-5.0.2\bootstrap-5.0.2\dist\js\bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="bootstrap-5.0.2-examples\bootstrap-5.0.2-examples\dashboard\dashboard.js"></script>
  </body>
 
</html>
