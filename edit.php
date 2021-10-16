<?php
 include "connection.php";

$id=$_GET['id'];
$qry=mysqli_query($conn,"SELECT * FROM inventory WHERE car_id=$id");//select query
$data=mysqli_fetch_array($qry);
if(isset($_GET['update'])){
$car_Name=$_GET['car_Name'];
$fuel=$_GET['fuel'];
$cost=$_GET['cost'];
$Nubers=$_GET['Numbers'];
$edit=mysqli_query($conn, "UPDATE invetory SET car_Name='$car_Name' fuel='$fuel' cost='$cost' WHERE id=$id ");
while($row=mysqli_fetch_array($edit)){
      $car_Name=$row["car_Name"];
      $fuel=$row["fuel"];
      $cost=$row["cost"];
      $Numbers=$row["Numbers"];
}
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Update Record</title>
    
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <center><h2 class="mt-5">Update Record</h2></center>
                    <p>Please edit the input values and submit to update the Inventory record.</p>
                    <form action="edit.php" method="get">
                        <div class="form-group">
                            <center><label class="form-control" style="border-radius: 100%; background-color: lightsteelblue;">Car Name</label></center>
                            <input type="text"  name="car_Name" class="form-control " value="<?php echo $car_Name; ?>">
                            
                        </div>
                        <div class="form-group">
                            <center><label class="form-control" style="border-radius: 100%; background-color: lightsteelblue;">Fuel</label></center>
                            <input name="fuel" class="form-control" value="<?php echo $fuel; ?>"></input>
                           
                        </div>
                        <div class="form-group">
                           <center><label class="form-control" style="border-radius: 100%; background-color: lightsteelblue;">Price</label></center>
                            <input type="text" name="cost" class="form-control " value="<?php echo $cost; ?>">
                           
                        </div>
                        <div class="form-group">
                            <center><label class="form-control" style="border-radius: 100%; background-color: lightsteelblue;">Numbers</label></center>
                            <input name="Numbers" class="form-control " value="<?php echo $Numbers; ?>"></input>
                                                    </div>
                       <center>
                        <button type="submit" class="btn btn-danger" name="submit" value="delete">Submit</button> 
        <button type="submit" class="btn btn-info" name="update" value="Cancel"><a href="control.php" style="text-decoration: none; font-family: sans-serif;">Cancel</a></button>
        </center>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>