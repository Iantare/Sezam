<?php

session_start();

$active='Cart';

include("includes/db.php");
include("functions/functions.php");

 ?>
 <body>

   <div id="top"><!-- top Begin -->
      <div class="container"> <!-- container Begin -->
        <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

      <a href="#" class="btn btn-success btn-sm">

        <?php

             if(!isset($_SESSION['cust_email'])){

               echo "Welcome: Guest";

             }else{

                   echo "Welcome: " .$_SESSION['cust_email'] . "";

             }


         ?>


      </a>

      <a href="checkout.php"><?php items(); ?> items in Your Cart | Total Price: <?php total_price(); ?></a>

        </div><!-- col-md-6 offer Finish -->

          <div class="col-md-6"><!-- col-md-6 Begin -->
            <ul class="menu"><!-- menu Begin -->
              <li>
                <a href="customer_register.php">Register</a>
              </li>
              <li>
                <a href="checkout.php">My Account</a>
              </li>
              <li>
                <a href="cart.php">Go To Cart</a>
              </li>

              <li>
                <a href="checkout.php">

                   <?php

                         if(!isset($_SESSION['cust_email'])){

                            echo "<a href='checkout.php'>Login </a>";

                          }else{

                            echo "<a href='logout.php'>Log Out </a>";

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
         <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home  Begin -->
             <img src="images/e-comm-logo.JPG" alt="SEPEcw Logo" class="hidden-xs">
             <img src="images/e-comm-logo.JPG" alt="SEPEcw Logo Mobile" class="visible-xs">

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
              <li class="<?php if($active=='Home') echo"active"; ?>" >
                  <a href="index.php">Home</a>
              </li>
              <li class="<?php if($active=='Shop') echo"active"; ?>" >
                 <a href="shop.php">Shop</a>
              </li>
              <li class="<?php if($active=='Account') echo"active"; ?>" >

                <?php
                     if(!isset($_SESSION['cust_email'])){

                         echo"<a href='checkout.php'>My Account</a>";

                     }else {

                         echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

                     }

                 ?>

              </li>
              <li class="<?php if($active=='Cart') echo"active"; ?>" >
                 <a href="cart.php">Shopping Cart</a>
              </li>

              <li class="<?php if($active=='Contact') echo"active"; ?>" >
                <a href="contact.php">Contact Us</a>
              </li>
           </ul><!-- nav navbar-nav left  Finish -->
         </div><!-- padding-nav  Finish -->

              <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin -->
                 <i class="fa fa-shopping-cart"></i>


                 <?php

                     $ip_add = getRealIpUser();

                     $select_cart ="select * from basket where ip_add='$ip_add'";

                     $run_cart = mysqli_query($con, $select_cart);

                     $count = mysqli_num_rows($run_cart);


                  ?>



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
             Cart
         </li>

    </ul><!-- breadcrumb Finish -->

  </div><!-- col-md-12 Finish -->

  <div id="cart" class="col-md-9"><!-- col-md-9 Begin-->

      <div class="box"><!-- box Begin-->

          <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin-->

                <h1>Shopping Cart</h1>

                <?php

                    $ip_add = getRealIpUser();

                    $select_cart = "select * from basket where ip_add='$ip_add'";

                    $run_cart = mysqli_query($con, $select_cart);

                    $count = mysqli_num_rows($run_cart);


                 ?>

                <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your Cart</p>

                <div class="table-responsive"><!-- table-responsive Begin-->

                    <table class="table"><!-- table Begin-->

                      <thead><!-- thead Begin-->

                        <tr><!-- tr Begin-->

                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit Price</th>
                          <th>Size</th>
                          <th colspan="1">Delete</th>
                          <th colspan="2">Sub-Total</th>

                        </tr><!-- tr Finish-->

                      </thead><!-- thead Finish-->

                      <tbody><!-- tbody Begin-->

                        <?php

                           $total = 0;
                           while($row_cart = mysqli_fetch_array($run_cart)){

                             $Prod_id = $row_cart['P_id'];
                             $Prod_size = $row_cart['Size'];
                             $Prod_Qty = $row_cart['Prod_Qty'];
                             $pro_sold = $row_cart['P_price'];

                             $get_products = "select * from products where Prod_id ='$Prod_id'";

                             $run_products = mysqli_query($con,$get_products);

                             while($row_products = mysqli_fetch_array($run_products)){

                               $Prod_Title = $row_products['Prod_Title'];
                               $Prod_img1 = $row_products['Prod_img1'];
                               $only_price = $row_products['Prod_price'];
                               $sub_total = $pro_sold*$Prod_Qty;

                               $_SESSION['Prod_Qty'] = $Prod_Qty;

                               $total += $sub_total;



                         ?>

                         <tr><!-- tr Begin-->

                           <td>
                              <img class="img-responsive" src="admin_area/product_images/<?php echo $Prod_img1; ?>" alt="Product 3a">
                           </td>

                           <td>
                              <a href="details.php?Prod_id=<?php echo $Prod_id; ?>"> <?php echo $Prod_Title; ?> </a>
                           </td>

                           <td>

                                  <input type="text" name="quantity" data-product_id="<?php echo $Prod_id; ?>"
                                  value="<?php echo $_SESSION['Prod_Qty'];?>" class="quantity form-control">

                           </td>

                           <td>
                                <?php echo $pro_sold; ?>
                           </td>

                           <td>
                               <?php echo $Prod_size; ?>
                           </td>

                           <td>
                               <input type="checkbox" name="remove[]" value="<?php echo $Prod_id;  ?>">
                           </td>

                           <td>
                              $<?php echo  $sub_total; ?>
                           </td>

                         </tr><!-- tr Finish-->

                       <?php  } } ?>

                      </tbody><!-- tbody Finish-->



                    <tfoot><!-- tfoot Begin-->

                          <tr><!-- tr Begin-->

                            <th colspan="5">Total</th>
                            <th colspan="2">$<?php echo $total; ?></th>

                          </tr><!-- tr Finish-->


                      </tfoot><!-- tfoot Finish-->

                    </table><!-- table Finish-->

                </div><!-- table-responsive Finish-->

                <div class="box-footer"><!-- box-footer Begin-->

                   <div class="pull-left"><!--pull-left Begin-->

                     <a href="index.php" class="btn btn-default"><!--btn btn-default Begin-->

                         <i class="fa fa-chevron-left"></i>Continue Shopping

                     </a><!--btn btn-default Finish-->

                   </div><!--pull-left Finish-->


                   <div class="pull-right"><!--pull-right Begin-->

                     <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!--btn btn-default Begin-->

                         <i class="fa fa-refresh"></i> Update Cart

                     </button><!--btn btn-default Finish-->

                     <a href="checkout.php" class="btn btn-primary">

                       Proceed checkout <i class="fa fa-chevron-right"></i>

                     </a>

                   </div><!--pull-right Finish-->


                </div><!-- box-footer Finish-->

          </form><!-- form Finish-->

      </div><!-- box Finish-->

        <?php

            function update_cart(){

              global $con;

              if(isset($_POST['update'])){
                foreach($_POST['remove'] as $remove_id){

                  $delete_product= "delete from basket where P_id='$remove_id'";
                  $run_delete= mysqli_query($con,$delete_product);

                        if($run_delete){

                           echo "<script>window.open('cart.php','_self')</script>";

                        }

                    }

                }

            }

            echo @$up_cart = update_cart();

     ?>

      <div id="row same-heigh-row"><!-- row same-heigh-row Begin -->
        <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
          <div Class="box same-height headline"><!-- box same-height headline Begin -->

             <h3 class="text-center">Products You Maybe Like</h3>

          </div><!-- box same-height headline Finish -->

        </div><!--  col-md-3 col-sm-6 Finish -->


           <?php

              $get_products = "select * from products order by rand() LIMIT 0,3";
              $run_products = mysqli_query($con,$get_products);
              while($row_products=mysqli_fetch_array($run_products)){$pro_id = $row_products['Prod_id'];
              $pro_title = $row_products ['Prod_Title'];
              $pro_price = $row_products ['Prod_price'];
              $pro_sale_price = $row_products ['prod_sale'];
              $pro_img1 = $row_products ['Prod_img1'];
              $pro_label = $row_products ['prod_label'];
              $manufacturer_id = $row_products ['manufacturer_id'];

              $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";
              $run_manufacturer = mysqli_query($db,$get_manufacturer);
              $row_manufacturer = mysqli_fetch_array($run_manufacturer);
              $manufacturer_title = $row_manufacturer['manufacturer_title'];

              if($pro_label == "descount"){

                 $product_price = " <del> RWF $pro_price </del> ";
                 $product_sale_price = "/ RWF $pro_sale_price ";

              }else{

                $product_price = " RWF $pro_price ";
                $product_sale_price = "";

              }

              if($pro_label == ""){


              }else{

                $product_label = "

                     <a href='#' class='label $pro_label'>

                     <div class='theLabel'> $pro_label </div>
                     <div class='labelBackground'> </div>

                     </a>
                ";

              }

              echo "
               <div class='col-md-3 col-sm-6 centre-responsive'>
                 <div class='product'>
                 <a href='details.php?Prod_id=$pro_id'>

                      <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                      </a>

                      <div class= 'text'>

                      <center>

                          <p class='btn btn-primary'> $manufacturer_title </p>

                      </centre>

                          <h3>
                               <a href='details.php?Prod_id=$pro_id'>
                               $pro_title

                               </a>
                          </h3>

                          <p class='price'>

                          $product_price &nbsp;$product_sale_price

                          </p>

                          <p class='button'>

                          <a class= 'btn btn-default'  href='details.php?Prod_id=$pro_id'>

                               view Details
                          </a>

                          <a class= 'btn btn-primary'  href='details.php?Prod_id=$pro_id'>

                               <i class='fa fa-shopping-cart'></i> Add to Cart
                          </a>

                          </p>

                      </div>

                      $product_label

                 </div>

               </div>
              ";

      }

    ?>


    </div><!-- row same-heigh-row Finish -->

  </div><!-- col-md-9 Finish -->

  <div class="col-md-3"><!-- col-md-3 Begin -->

      <div id="order-summary" class="box"><!-- box Begin -->

         <div class="box-header"><!--box-header Begin -->

             <h3>Order Summary</h3>

         </div><!-- box-header Finish -->

         <p class="text-muted"><!-- text-muted Begin -->

           Shipping and additional costs are calculated based on value You've entered

         </p><!-- text-muted Finish -->

          <div class="table-responsive"><!-- table-responsive Begin -->

            <table class="table"><!-- table Begin -->

              <tbody><!-- tbody Begin -->

                <tr><!-- tr Begin -->

                   <td> Order Sub-Total</td>
                    <th> $<?php echo $total; ?> </th>

                </tr><!-- tr Finish -->

                <tr><!-- tr Begin -->

                    <td>Shipping and Handling</td>
                     <td> $0 </td>

                </tr><!-- tr Finish -->

                <tr><!-- tr Begin -->

                    <td>Tax</td>
                     <th> $0 </th>

                </tr><!-- tr Finish -->

                <tr class="total"><!-- tr Begin -->

                    <td>Total</td>
                     <th> $<?php echo $total; ?> </th>

                </tr><!-- tr Finish -->

              </tbody><!-- tbody Finish -->

            </table><!-- table Finish -->

          </div><!-- table-responsive Finish -->

      </div><!-- box Finish -->

  </div><!-- col-md-3 Finish -->

</div><!-- container Finish -->

</div><!-- content Finish -->

<?php

include("includes/footer.php");

?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

    <script>

        $(document).ready(function(data){

          $(document).on('keyup','.quantity',function(){

            var id = $ (this).data("product_id");
            var quantity = $(this).val();

            if(quantity !=''){

              $.ajax({

                    url: "change.php",
                    method: "POST",
                    data:{id:id, quantity:quantity},

                    success:function(){
                        $("body").load("cart_body.php");
                    }

              });

            }



          });

        });

    </script>


</body>
