<?php

session_start();

$active='Cart';

include("includes/db.php");
include("functions/functions.php");

 ?>

 <?php

      $ip_add = getRealIpUser();

      if(isset($_POST['id'])){

        $id = $_POST['id'];
        $qty = $_POST['quantity'];
        $update_qty = "update basket set Prod_Qty='$qty' where P_id='$id' AND ip_add='$ip_add'";

        $run_qty = mysqli_query($con,$update_qty);



      }

 ?>
