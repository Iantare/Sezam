<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

<?php

  if(isset($_GET['delete_seller'])){

     $delete_id = $_GET['delete_seller'];
     $delete_seller = "delete from sellers where seller_id='$delete_id'";
     $run_delete = mysqli_query($con,$delete_seller);

      if($run_delete){

          echo "<script>alert('One of Sellers has been Deleted')</script>";
          echo "<script>window.open('index.php?view_sellers','_self')</script>";
          }
    }
 ?>

<?php } ?>
