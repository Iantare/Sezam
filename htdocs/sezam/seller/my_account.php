
<?php

session_start();

if(!isset($_SESSION['seller_email'])){

    echo "<script>window.open('seller_checkout.php','_self')</script>";

}else {

include("includes/db.php");
include("../functions/functions.php");

 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=devise-width, initial-scale=1">
     <title>SEZAM</title>
     <link rel="stylesheet" href="styles/bootstrap-337.min.css">
     <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
     <link rel="stylesheet" href="styles/style.css">
   </head>
   <body>

     <div id="top"><!-- top Begin -->
        <div class="container"> <!-- container Begin -->
          <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

        <a href="#" class="btn btn-success btn-sm">

          <?php
               if(!isset($_SESSION['seller_email'])){

                 echo "Welcome: Guest";

               }else{

                 echo "Welcome: " . $_SESSION['seller_email'] . "";

               }
           ?>

        </a>



        <!-- <?php

            $order_id = ['order_id'];

            $select_sales ="select * from seller_orders where ip_add='$ip_add'";

            $run_cart = mysqli_query($con, $select_cart);

            $count = mysqli_num_rows($run_cart);

         ?> -->

         <!-- <?php


         $total = 0;
         while($row_cart = mysqli_fetch_array($run_cart)){

           $Prod_id = $row_cart['P_id'];
           $Prod_size = $row_cart['Size'];
           $Prod_Qty = $row_cart['Prod_Qty'];

           $get_products = "select * from products where Prod_id ='$Prod_id'";

           $run_products = mysqli_query($con, $get_products);

           while($row_products = mysqli_fetch_array($run_products)){

             $Prod_Title = $row_products['Prod_Title'];
             $Prod_img1 = $row_products['Prod_img1'];
             $only_price = $row_products['Prod_price'];
             $sub_total = $row_products['Prod_price']*$Prod_Qty;
             $total += $sub_total;

                }

             }
          ?> -->



        <!-- <a href="checkout.php"><?php echo $count; ?> items in Your Cart | Total Price: $<?php echo $total; ?></a> -->


          </div><!-- col-md-6 offer Finish -->

            <div class="col-md-6"><!-- col-md-6 Begin -->
              <ul class="menu"><!-- menu Begin -->
                <li>
                  <a href="../customer_register.php">Register</a>
                </li>
                <li>
                  <a href="my_account.php">My Account</a>
                </li>
                <li>
                  <a href="my_account.php?my_orders">My Product</a>
                </li>

                <li>
                  <a href="../checkout.php">

                    <?php

                         if(!isset($_SESSION['seller_email'])){

                           echo "<a href='checkout.php'> Login </a>";

                         }else {
                           echo "<a href='logout.php'> Log Out </a>";
                         }

                      ?>

                  </a>
                </li>
              </ul><!-- menu Finish -->
            </div><!-- col-md-6 Finish -->

        </div> <!-- container Finish -->
     </div> <!-- top Finish -->

 <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default  Begin -->
   <div class="container"><!-- container  Begin -->
       <div class="navbar-header"><!-- navbar-header  Begin -->
           <a href="../index.php" class="navbar-brand home"> <!-- navbar-brand home  Begin -->
               <img src="../images/e-comm-logo.JPG" alt="SEPEcw Logo" class="hidden-xs">
               <img src="../images/e-comm-mob-logo.JPG" alt="SEPEcw Logo Mobile" class="visible-xs">

           </a><!-- navbar-brand home  Finish-->
           <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-align-justify"></i>

             </button>

             <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>

               </button>
       </div><!-- navbar-header  Finish -->

       <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse  beggin-->
           <div class="padding-nav"> <!-- padding-nav  Begin -->

             <ul class="nav navbar-nav left"> <!-- nav navbar-nav left  Begin -->
                <li>
                    <a href="../index.php">Home</a>
                </li>
                <li>
                   <a href="../shop.php">Shops</a>
                </li>
                <li  class="active">
                  <a href="my_account.php">My Account</a>
                </li>
                <li>
                   <a href="add_shop.php">Add Your Shop</a>
                </li>

                <li>
                  <a href="../contact.php">Contact Us</a>
                </li>
             </ul><!-- nav navbar-nav left  Finish -->
           </div><!-- padding-nav  Finish -->

                <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin -->
                   <i class="fa fa-shopping-cart"></i>
                   <span><?php echo $count; ?> Items In Your Cart</span>

                </a><!-- btn navbar-btn btn-primary right  Finish -->

                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                     <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                         <span class="sr-only">Toggle Search</span>
                         <i class="fa fa-search"></i>
                     </button><!-- btn btn-primary navbar-btn Finish -->

                </div><!-- navbar-collapse collapse right Finish -->


             <div class="collapse clearfix" id="Search"><!-- collapse clearfix Begin --><!-- Class "collapse clearfix"to be double checked --->

                     <form method="get" action="results.php" class="navbar-form"><!-- navbar-form  Begin -->

                        <div class="input-group"><!-- input-group  Begin -->

                             <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                             <span class="input-group-btn"><!-- input-group-btn  Begin -->

                            <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary  Begin -->

                               <i class="fa fa-search"></i>

                            </button><!-- btn btn-primary  Finish-->

                            </span><!-- input-group-btn   Finish -->

                        </div><!-- input-group  Finish -->

                     </form><!-- navbar-form  Finish -->

                   </div><!-- collapse clearfix  Finish --> <!-- Class "collapse clearfix"to be double checked --->

       </div><!-- navbar-collapse collapse  Finish -->

   </div><!-- container  Finish -->

 </div><!-- navbar navbar-default Finish -->


<div id="content"><!-- content Begin -->
  <div class="container"><!-- container Begin -->
    <div class="col-md-12"><!-- col-md-12 Begin -->

      <ul class="breadcrumb"><!-- breadcrumb Begin -->
        <li>

           <a href="index.php">Home</a>

        </li>
        <li>
           My Account
        </li>

      </ul><!-- breadcrumb Finish -->

    </div><!-- col-md-12 Finish -->

    <div class="col-md-3"><!-- col-md-3 Begin -->

      <?php

      include("includes/sidebar.php");

       ?>

    </div><!-- col-md-3 Finish -->

    <div class="col-md-9"><!-- col-md-9 Begin-->

      <div class="box"><!-- box Begin -->

          <?php

             if (isset($_GET['my_orders'])){
                 include("my_orders.php");
             }
          ?>

          <?php

             if (isset($_GET['pay_offline'])){
                 include("pay_offline.php");
             }
          ?>

          <?php

             if (isset($_GET['edit_account'])){
                 include("edit_account.php");
             }
          ?>

          <?php

             if (isset($_GET['change_pass'])){
                 include("change_pass.php");
             }
          ?>

          <?php

             if (isset($_GET['delete_account'])){
                 include("delete_account.php");
             }
          ?>

      </div><!--box Finish -->

    </div><!-- col-md-9 Finish -->

  </div><!-- container Finish -->

</div><!-- content Finish -->

<?php

include("includes/footer.php");

 ?>

      <script src="js/jquery-331.min.js"></script>
      <script src="js/bootstrap-337.min.js"></script>


  </body>
</html>

<?php } ?>
