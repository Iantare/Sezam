
<?php

session_start();
include("includes/db.php");

if(!isset($_SESSION['seller_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

     $seller_session = $_SESSION['seller_email'];
     $get_seller = "select * from sellers where seller_email='$seller_session'";
     $run_seller = mysqli_query($con,$get_seller);
     $row_seller = mysqli_fetch_array($run_seller);
     $seller_id = $row_seller['seller_id'];
     $seller_name = $row_seller['seller_name'];
     $seller_email = $row_seller['seller_email'];
     $seller_image = $row_seller['seller_image'];
     $seller_country = $row_seller['seller_country'];
     $seller_city = $row_seller['seller_city'];
     $seller_contact = $row_seller['seller_contact'];
     $seller_address = $row_seller['seller_address'];
     $get_products = "select * from products";
     $run_products = mysqli_query($con,$get_products);
     $count_products = mysqli_num_rows($run_products);
     $get_customers = "select * from customers";
     $run_customers = mysqli_query($con,$get_customers);
     $count_customers = mysqli_num_rows($run_customers);
     $get_p_categories = "select * from products_categories";
     $run_p_categories = mysqli_query($con,$get_p_categories);
     $count_p_categories = mysqli_num_rows($run_p_categories);
     $get_pending_orders = "select * from pending_orders";
     $run_pending_orders = mysqli_query($con,$get_pending_orders);
     $count_pending_orders = mysqli_num_rows($run_pending_orders);


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1">
    <title>SEPEcw Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

     <div id="wrapper"><!-- #wrapper begin -->

      <?php include("includes/sidebar.php"); ?>

       <div id="page-wrapper"><!-- #page-wrapper begin -->
         <div class="container-fluid"><!-- #container-fluid begin -->

            <?php


              if(isset($_GET['delete_product'])){

                   include("delete_product.php");
            }

            if(isset($_GET['edit_product'])){

                 include("edit_product.php");
          }
          

        ?>

         </div><!-- #container-fluid Finish -->
       </div><!-- #page-wrapper Finish -->
     </div><!-- #wrapper Finish -->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

  </body>
  </html>

<?php } ?>
