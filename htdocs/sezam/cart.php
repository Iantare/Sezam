<?php

$active='Cart';
include("includes/header.php");
 ?>

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

                  <h4>Shopping Cart</h4>

                  <?php

                      $ip_add = getRealIpUser();

                      $select_cart = "select * from basket where ip_add='$ip_add'";

                      $run_cart = mysqli_query($con, $select_cart);

                      $count = mysqli_num_rows($run_cart);

                      if($count ==0){

                      echo "<script>alert('You Have No Item(s) In Your Shopping Cart')</script>";
                      echo "<script>window.open('shop.php','_self')</script>";

                     }

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
                                 $shipping_price = $row_products['shipping_price'];
                                 $pro_url = $row_products['Prod_url'];
                                 $sub_total = $pro_sold*$Prod_Qty;
                                 $tax = $sub_total*0 ;

                                 $_SESSION['Prod_Qty'] = $Prod_Qty;

                                 $total += $sub_total + $tax + $shipping_price;



                           ?>

                           <tr><!-- tr Begin-->

                             <td>
                                <img class="img-responsive" src="seller/product_images/<?php echo $Prod_img1; ?>" alt="Product 1a">
                             </td>

                             <td>
                                <a href="<?php echo $pro_url; ?>"><?php echo $Prod_Title; ?> </a>
                             </td>

                             <td>

                                    <input id="qtyTextBox" class="qtyInput" type="text" name="quantity" data-product_id="<?php echo $Prod_id; ?>"
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
                                RWF <?php echo  $sub_total; ?>
                             </td>

                           </tr><!-- tr Finish-->

                         <?php  } }  ?>

                        </tbody><!-- tbody Finish-->



                      <tfoot><!-- tfoot Begin-->

                            <tr><!-- tr Begin-->

                              <th colspan="5">Total</th>
                              <th colspan="3">Rwf <?php echo $total; ?></th>

                            </tr><!-- tr Finish-->


                        </tfoot><!-- tfoot Finish-->

                      </table><!-- table Finish-->


                     <div class="form-inline pull-right"><!-- form-inline pull-right Begin-->
                         <div class="form-group"><!-- form-group Begin-->

                           <label> Coupon Code: </label>
                           <input type="text" name="code" class="form-control">
                           <input type="submit" class="btn btn-primary" value="Use Coupon" name="use_coupon">

                       </div><!--form-group Finish-->
                     </div><!-- form-inline pull-right Finish-->




                  </div><!-- table-responsive Finish-->

                  <div class="box-footer"><!-- box-footer Begin-->

                     <div class="pull-left"><!--pull-left Begin-->

                       <a href="shop.php" class="btn btn-default"><!--btn btn-default Begin-->

                           <i class="fa fa-chevron-left"></i>Continue Shopping

                       </a><!--btn btn-default Finish-->

                     </div><!--pull-left Finish-->


                     <div class="pull-right"><!--pull-right Begin-->

                       <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!--btn btn-default Begin-->

                           <i class="fa fa-trash-o"></i> Delete Cart

                       </button><!--btn btn-default Finish-->

                       <a href="checkout.php" class="btn btn-primary">

                         Buy Now <i class="fa fa-chevron-right"></i>

                       </a>

                     </div><!--pull-right Finish-->


                  </div><!-- box-footer Finish-->

            </form><!-- form Finish-->

        </div><!-- box Finish-->

        <?php

            if(isset($_POST['use_coupon'])){

               $code = $_POST['code'];

               if($code == ""){

              }else{

                $get_coupons = "select * from coupons where coupon_code='$code'";
                $run_coupons = mysqli_query($con,$get_coupons);
                $check_coupons = mysqli_num_rows($run_coupons);

                if($check_coupons == "1"){

                  $row_coupons = mysqli_fetch_array($run_coupons);

                  $coupon_pro_id = $row_coupons['Prod_id'];
                  $coupon_price = $row_coupons['coupon_price'];
                  $coupon_limit = $row_coupons['coupon_limit'];
                  $coupon_used = $row_coupons['coupon_used'];

                  if($coupon_limit == $coupon_used){

                         echo "<script>alert('Your Coupon is Already expired')</script>";

                  }else{

                       $get_cart = "select * from basket where P_id='$coupon_pro_id' AND ip_add='$ip_add'";
                       $run_cart = mysqli_query($con,$get_cart);
                       $check_cart = mysqli_num_rows($run_cart);

                       if($check_cart == "1"){

                             $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
                             $run_used = mysqli_query($con,$add_used);
                             $update_cart = "update basket set P_price='$coupon_price' where P_id='$coupon_pro_id' AND ip_add='$ip_add'";
                             $run_update_cart = mysqli_query($con,$update_cart);

                             echo "<script>alert('Your Coupon Has Been Applied')</script>";
                             echo "<script>window.open('cart.php','_self')</script>";

                       }else{

                           echo "<script>alert('Your Product Do not Exist')</script>";

                       }



                  }

                }else{

                     echo "<script>alert('Your Coupon Is Not Valid')</script>";

                  }

               }


            }




        ?>

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

               <h4 class="text-center">Don't Miss Hot Deals</h4>

            </div><!-- box same-height headline Finish -->

          </div><!--  col-md-3 col-sm-6 Finish -->


             <?php


                $get_products = "select * from products order by rand() LIMIT 0,3";
                $run_products = mysqli_query($con,$get_products);
                while($row_products=mysqli_fetch_array($run_products)){
                $pro_id = $row_products['Prod_id'];
                $pro_title = $row_products['Prod_Title'];
                $pro_price = $row_products['Prod_price'];
                $pro_sale_price = $row_products['prod_sale'];
                $pro_url = $row_products['Prod_url'];
                $pro_img1 = $row_products['Prod_img1'];
                $pro_label = $row_products['prod_label'];
                $manufacturer_id = $row_products['manufacturer_id'];

                $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";
                $run_manufacturer = mysqli_query($db,$get_manufacturer);
                $row_manufacturer = mysqli_fetch_array($run_manufacturer);
                $manufacturer_title = $row_manufacturer['manufacturer_title'];

                if($pro_label == "discount"){

                   $product_price = " <del> RWF $pro_price </del> <br/>";
                   $product_sale_price = "<strong>RWF $pro_sale_price</strong>";

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

    </div><!-- col-md-9 Finish -->

    <div class="col-md-3"><!-- col-md-3 Begin -->

        <div id="order-summary" class="box"><!-- box Begin -->

           <div class="box-header"><!--box-header Begin -->

               <h4>Order Summary</h4>

           </div><!-- box-header Finish -->

           <p class="text-muted"><!-- text-muted Begin -->

             Shipping and additional costs are calculated based on value You've entered

           </p><!-- text-muted Finish -->

            <div class="table-responsive"><!-- table-responsive Begin -->

              <table class="table"><!-- table Begin -->

                <tbody><!-- tbody Begin -->

                  <tr><!-- tr Begin -->

                     <td> Order Sub-Total</td>
                      <th>Rwf <?php echo $sub_total; ?> </th>

                  </tr><!-- tr Finish -->

                  <tr><!-- tr Begin -->

                      <td>Shipping and Handling</td>
                       <td> Rwf <?php echo $shipping_price; ?></td>

                  </tr><!-- tr Finish -->

                  <tr><!-- tr Begin -->

                      <td>T V A</td>
                       <th> Rwf <?php echo $tax; ?></th>

                  </tr><!-- tr Finish -->

                  <tr class="total"><!-- tr Begin -->

                      <td>Total</td>
                       <th>Rwf <?php echo $total; ?></th>

                  </tr><!-- tr Finish -->

                </tbody><!-- tbody Finish -->

              </table><!-- table Finish -->

            </div><!-- table-responsive Finish -->

        </div><!-- box Finish -->

    </div><!-- col-md-3 Finish -->

    <div class="col-md-3"><!-- col-md-3 Begin -->

        <div id="order-summary" class="box"><!-- box Begin -->

           <div class="box-header"><!--box-header Begin -->

               <h4>Order Precaution</h4>

             </div><!-- box-header Finish -->

                       <p class="text-muted"><!-- text-muted Begin -->

                      <strong>Before Making Any Payment:</strong><br/>
                        - Meet Seller (in public Area) <br/>
                        - Receive purchased Item first <br/>
                        - Double check properly the Item <br/>


                       </p><!-- text-muted Finish -->
        </div>

    </div>


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
</html>
