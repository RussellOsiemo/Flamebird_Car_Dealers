<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM inventory WHERE car_id=$id");
?>
<script type="text/javascript">
window.location="control.php";
</script>