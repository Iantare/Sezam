<?php

if(!isset($_SESSION['seller_email'])){

    echo "<script>window.open('delete_my_products.php','_self')</script>";

}else{

 ?>

<?php

  if(isset($_GET['delete_product'])){

     $delete_id = $_GET['delete_product'];
     $delete_pro = "delete from products where Prod_id='$delete_id'";
     $run_delete = mysqli_query($con,$delete_pro);

      if($run_delete){

          echo "<script>alert('One of Your Products has been Deleted')</script>";
          echo "<script>window.open('my_account.php?my_orders','_self')</script>";
          }
    }
 ?>


<?php } ?>
