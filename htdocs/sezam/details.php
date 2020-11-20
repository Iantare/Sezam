 <?php

 session_start();

 $active='Cart';

 include("includes/db.php");
 include("functions/functions.php");

  ?>

  <?php

        $Prod_id = $_GET['Prod_id'];
        $get_product = "select * from products where Prod_url='$Prod_id'";
        $run_product = mysqli_query($con,$get_product);

        $check_product = mysqli_num_rows($run_product);

            if($check_product == 0){

              echo "<script>window.open('index.php','_self')</script>";

            }else{

        $row_products = mysqli_fetch_array($run_product);
        $Prod_cat_id = $row_products ['Prod_cat_id'];
        $Prod_Title = $row_products ['Prod_Title'];
        $Prod_price = $row_products ['Prod_price'];
        $pro_sale_price = $row_products ['prod_sale'];
        $pro_MOQ = $row_products ['MOQ'];
        $Prod_desc = $row_products ['Prod_desc'];
        $pro_features = $row_products ['Prod_features'];
        $pro_video = $row_products ['Prod_video'];
        $Prod_img1 = $row_products ['Prod_img1'];
        $Prod_img2 = $row_products ['Prod_img2'];
        $Prod_img3 = $row_products ['Prod_img3'];
        $pro_label = $row_products ['prod_label'];


        if($pro_label == ""){

          $product_label = $pro_label;

       }else{

         $product_label = "

                 <a href='#' class='label $pro_label'>

                    <div class='theLabel'> $pro_label </div>
                    <div class='labelBackground'> </div>

                 </a>

           ";

         }

       $get_p_cat = "select * from products_categories where Prod_cat_id ='$Prod_cat_id'";
       $run_p_cat = mysqli_query($con,$get_p_cat);
       $row_p_cat = mysqli_fetch_array($run_p_cat);
       $Prod_Cat_Title = $row_p_cat ['Prod_Cat_Title'];


   ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=devise-width, initial-scale=1">
     <title>Sezam</title>
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

               if(!isset($_SESSION['cust_email'])){

                 echo "Welcome: Guest";

               }else{

                     echo "Welcome: " .$_SESSION['cust_email'] . "";

               }


           ?>


        </a>

        <?php

            $ip_add = getRealIpUser();

            $select_cart = "select * from basket where ip_add='$ip_add'";

            $run_cart = mysqli_query($con, $select_cart);

            $count = mysqli_num_rows($run_cart);

         ?>

         <?php


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
          ?>

        <a href="checkout.php"><?php echo $count; ?> items in Your Cart | Total Price: $<?php echo $total; ?></a>

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
                  <a href="cart.php">Shopping Cart</a>
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
                   <a href="shop.php">Shops</a>
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
                   <a href="seller/add_shop.php">Add Your Shop</a>
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

                <!-- <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                     <!-- <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                         <!-- <span class="sr-only">Toggle Search</span>
                         <i class="fa fa-search"></i>
                     </button><!-- btn btn-primary navbar-btn Finish -->

                <!-- </div><!-- navbar-collapse collapse right Finish -->

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
          shop
        </li>

        <li>
             <a href="shop.php?p_cat=<?php echo $Prod_cat_id; ?>"><?php echo $Prod_Cat_Title; ?> </a>
         </li>

          <li>

            <?php echo $Prod_Title; ?>

          </li>


      </ul><!-- breadcrumb Finish -->

    </div><!-- col-md-12 Finish -->



    <div class="col-md-12"><!-- col-md-12 Begin -->
      <div id="productMain" class="row"><!-- row Begin-->
        <div class="col-sm-6"><!-- col-sm-6 Begin -->
          <div id="mainImage"><!-- mainImage Begin -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
              <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>

              </ol><!--carousel-indicators Finish -->

              <div class="carousel-inner">
                <div class="item active">
                   <center><img class="img-responsive" src="seller/product_images/<?php echo $Prod_img1; ?>" alt="Product 1"></center>
                </div>

                <div class="item">
                   <center><img class="img-responsive" src="seller/product_images/<?php echo $Prod_img2; ?>" alt="Product 2" alt=""></center>
               </div>
               <div class="item">

                 <center><img class="img-responsive" src="seller/product_images/<?php echo $Prod_img3; ?>" alt="Product 3" alt=""></center>

               </div>

                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                </a><!-- left carousel-control Finish -->

                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                </a><!-- right carousel-control Finish -->

            </div><!-- carousel slide Finish -->

          </div><!-- mainImage Finish -->

            <?php echo $product_label; ?>



        </div><!-- col-sm-6 Finish -->

        <div class="col-sm-6"><!-- col-sm-6 Begin -->
            <div class="box"><!-- box Begin -->
              <h3 class="text-center"> <?php echo $Prod_Title; ?> </h3>

              <form class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                 <div class="form-group"><!-- form-group Begin -->
                   <label for="" class="col-md-5 control-label">Products Quantity</label>

                   <div class="col-md-7"><!-- col-md-7 Begin -->

                     <input id="qtyTextBox" class="qtyInput" type="text" aria-describedby="w1-14-_errMsg" autocomplete="off" size="4"
                       value="1" name="Product_qty" isvalid="true">


                  </div><!-- col-md-7 Finish-->

                 </div><!-- form-group Finish -->

                 <div class="form-group"><!-- form-group Begin-->
                     <label class="col-md-5 control-label">Size</label>

                      <div class="col-md-3"><!-- col-md-3 Begin -->

                           <select name="product_size" class="form-control" required oninput="setCustomValidity('')"
                           oninvalid="setCustomValidity('Must pick 1 Product Size ')"><!-- form-control Begin -->

                             <option value="" disabled selected>Select Product Size</option>
                             <option>FREE</option>
                             <option>S</option>
                             <option>M</option>
                             <option>L</option>
                             <option>XL</option>
                             <option>XXL</option>
                             <option>US-32</option>
                             <option>US-33</option>
                             <option>US-34</option>
                             <option>US-35</option>
                             <option>US-36</option>
                             <option>US-37</option>
                             <option>US-38</option>
                             <option>US-39</option>
                             <option>US-40</option>
                             <option>US-41</option>
                             <option>US-42</option>

                           </select><!-- form-control Finish -->

                      </div><!-- col-md-3 Finish -->

                 </div><!-- form-group Finish -->

                  <?php

                      if($pro_label == "discount"){

                        echo"


                            <ul class='price'>

                                  <h5>

                                         <del>RWF $Prod_price</del><br/>
                                         <strong>RWF $pro_sale_price</strong>

                                  </h5>

                            </ul>


                        ";
                      }else{

                        echo"

                        <ul class='price'>

                              <h5>

                                     <strong>RWF $Prod_price</strong>


                              </h5>

                        </ul>
                          ";


                      }



                   ?>


                 <p class="text-center buttons">
                   <button type="submit" name="add_cart" class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button>

                 </p>


               </form><!-- form-horizontal Begin -->

               <?php

                    if(isset($_POST['add_cart'])){

                       $ip_add = getRealIpUser();
                       $pro_id = $row_products['Prod_id'];
                       $P_id = $pro_id;
                       $Product_qty =  $_POST['Product_qty'];
                       $product_size =  $_POST['product_size'];
                       $pro_url = $row_products ['Prod_url'];
                       $check_product = "select * from basket where ip_add='$ip_add' ";
                       $run_check = mysqli_query($con,$check_product);

                       if(mysqli_num_rows($run_check)>0){

                       echo "<script>alert('You already Have an Item in Your Shopping Cart, Please Buy or Delete It Then Proceed')</script>";
                       echo "<script>window.open('cart.php','_self')</script>";

                       exit();

               }else{

                           $get_price = "select * from products where Prod_id='$P_id'";
                           $run_price = mysqli_query($con,$get_price);
                           $row_price = mysqli_fetch_array($run_price);
                           $pro_price = $row_price['Prod_price'];
                           $pro_sold = $row_price['prod_sale'];
                           $pro_label = $row_price['prod_label'];
                           $seller_contact = $row_price['seller_contact'];

                           if($pro_label == "discount"){

                              $pro_price = $pro_sold;

                           }else{

                              $pro_price = $pro_price;
                           }

                           $query = "insert into basket (P_id,ip_add,Prod_Qty,P_price,Size,seller_contact) values ('$P_id','$ip_add','$Product_qty','$pro_price','$product_size','$seller_contact')";

                           $run_query = mysqli_query($con,$query);

                           echo "<script>window.open('cart.php','_self')</script>";

                         }
                    }


                 ?>




            </div><!-- box Finish -->

            <div class="row" id="thumbs"><!-- row Begin -->

              <div class="col-xs-4"><!-- col-xs-4 Begin -->
                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb Begin -->
                  <img src="seller/product_images/<?php echo $Prod_img1; ?>" alt="product 1" class="img-responsive">
                </a><!-- thumb Finish -->
              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Begin -->
                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb Begin -->
                  <img src="seller/product_images/<?php echo $Prod_img2; ?>" alt="product 2" class="img-responsive">
                </a><!-- thumb Finish -->
              </div><!-- col-xs-4 Finish -->

              <div class="col-xs-4"><!-- col-xs-4 Begin -->
                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb Begin -->
                  <img src="seller/product_images/<?php echo $Prod_img3; ?>" alt="product 3" class="img-responsive">
                </a><!-- thumb Finish -->
              </div><!-- col-xs-4 Finish -->

            </div><!-- row Finish -->

        </div><!-- col-sm-6 Finish -->

      </div><!-- row Finish -->

      <div class="box" id="details"><!-- box Begin -->

                   <a data-toggle="tab" href="#descriptions" class="btn btn-primary tab">Product Desciptions</a>
                   <a data-toggle="tab" href="#features" class="btn btn-primary tab">Shipping, Returns and Payments</a>
                   <a data-toggle="tab" href="#videos" class="btn btn-primary tab">Product Videos</a>

                   <hr style="margin-top:25px;">

           <div class="tab-content"><!-- tab-content Begin -->
                <div class="tab-pane fade in active" id="descriptions"><!-- tab-pane Begin -->

                    <p class="product_descriptions">

                            <?php echo $Prod_desc; ?>

                    </p>

                </div><!-- tab-pane Finish -->

                <div class="tab-pane fade in" id="features"><!-- tab-pane Begin -->

                    <p class="product_features">

                          <?php echo $pro_features; ?>

                    </p>

                </div><!-- tab-pane Finish -->


                <div class="tab-pane fade in" id="videos"><!-- tab-pane Begin -->

                    <p class="product_videos">

                    <?php echo $pro_video; ?>

                    </p>

                </div><!-- tab-pane Finish -->



           </div><!-- tab-content Finish -->

      </div><!-- box Finish -->

      <div id="row same-heigh-row"><!-- row same-heigh-row Begin -->
        <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
          <div Class="box same-height headline"><!-- box same-height headline Begin -->

             <h3 class="text-center">Don't Miss Hot Deals</h3>

          </div><!-- box same-height headline Finish -->

        </div><!--  col-md-3 col-sm-6 Finish -->

      <?php
            $get_products = "select * from products order by rand() LIMIT 0,3";
            $run_products = mysqli_query($con,$get_products);
            while ($row_products=mysqli_fetch_array($run_products)){


              $pro_id = $row_products['Prod_id'];
              $pro_title = $row_products ['Prod_Title'];
              $pro_price = $row_products ['Prod_price'];
              $pro_sale_price = $row_products ['prod_sale'];
              $pro_MOQ = $row_products ['MOQ'];
              $pro_url = $row_products ['Prod_url'];
              $pro_img1 = $row_products ['Prod_img1'];
              $pro_label = $row_products ['prod_label'];
              $manufacturer_id = $row_products ['manufacturer_id'];

              $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";
              $run_manufacturer = mysqli_query($db,$get_manufacturer);
              $row_manufacturer = mysqli_fetch_array($run_manufacturer);
              $manufacturer_title = $row_manufacturer['manufacturer_title'];

              if($pro_label == "discount"){

                 $product_price = " <del> RWF $pro_price </del> ";
                 $product_sale_price = "/<strong> RWF $pro_sale_price </strong>";

              }else{

                $product_price = " <strong>RWF $pro_price</strong> ";
                $product_sale_price = "";

              }

              if($pro_label == ""){

                $product_label = $pro_label;

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
                 <a href='$pro_url'>

                      <img class='img-responsive' src='seller/product_images/$pro_img1'>
                      </a>

                      <div class= 'text'>

                      <center>

                          <p class='btn btn-primary'> $manufacturer_title </p>

                      </centre>

                          <h4>
                               <a href='$pro_url'>

                               $pro_title

                               </a>
                          </h4>

                          <p class='price'>

                            <h5>

                              $product_price &nbsp;$product_sale_price

                            </h5>

                          </p>

                          <p class='MOQ'>

                          MOQ: $pro_MOQ

                          </p>

                          <p class='button'>

                          <a class= 'btn btn-default'  href='$pro_url'>

                               view Details
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

  </div><!-- col-md-12 Finish -->

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
