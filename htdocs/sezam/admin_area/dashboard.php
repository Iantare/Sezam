<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>


<div class="row"><!-- row Begin -->
    <div class="col-lg-12"><!-- col-lg-12 Begin -->

      <h1 class="page-header"> Dashboard </h1>

      <ol class="breadcrumb"><!-- breadcrumb Begin -->
          <li class="active"><!-- Active Begin -->

             <i class="fa fa-dashboard"></i> Dashboard

          </li><!-- Active Finish -->
      </ol><!-- breadcrumb Finish-->
    </div><!-- col-lg-12 Finish -->
</div><!-- row Finish -->

<div class="row"><!-- row no: 2 Begin -->

    <div class="col-lg-2 col-md-4"><!-- col-lg-3 col-md-6 Begin -->
      <div class="panel panel-green"><!-- panel panel-green Begin -->

         <div class="panel-heading"><!-- panel-heading Begin -->
             <div class="row"><!-- row Begin -->
                <div class="col-xs-3"><!-- col-xs-3 Begin -->

                      <i class="fa fa-users fa-3x"></i>

                  </div><!-- col-xs-3 Finish -->

                  <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                     <div class="huge"><?php echo $count_customers;?></div>

                       <div> Customers </div>

                  </div><!-- col-xs-9 text-right Finish -->
             </div><!-- row Finish -->
         </div><!-- panel-heading Finish -->

         <a href="index.php?view_customers"><!--a href Begin -->

             <div class="panel-footer"><!--panel-footer Begin -->

                <span class="pull-left"> <!--pull-left Begin -->
                     View Details
                </span><!--pull-left Finish -->
                <span class="pull-right"><!--pull-righ Begin -->
                  <i class="fa fa-arrow-circle-right"></i>
                </span><!--pull-righ Finish -->

                <div class="clearfix">

                </div>

            </div><!--panel-footer Finish -->

         </a><!-- a href Finish -->

       </div><!-- panel panel-green Finish -->

    </div><!-- col-lg-3 col-md-6 Finish -->



    <div class="col-lg-3 col-md-4"><!-- col-lg-3 col-md-6 Begin -->
      <div class="panel panel-primary"><!-- panel panel-primary Begin -->

         <div class="panel-heading"><!-- panel-heading Begin -->
             <div class="row"><!-- row Begin -->
                <div class="col-xs-3"><!-- col-xs-3 Begin -->

                      <i class="fa fa-tasks fa-3x"></i>

                  </div><!-- col-xs-3 Finish -->

                  <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                     <div class="huge"> <?php echo $count_products;?> </div><!-- huge Finish -->

                       <div> Products </div>

                  </div><!-- col-xs-9 text-right Finish -->
             </div><!-- row Finish -->
         </div><!-- panel-heading Finish -->

         <a href="index.php?view_products"><!--a href Begin -->

             <div class="panel-footer"><!--panel-footer Begin -->

                <span class="pull-left"> <!--pull-left Begin -->
                     View Details
                </span><!--pull-left Finish -->
                <span class="pull-right"><!--pull-righ Begin -->
                  <i class="fa fa-arrow-circle-right"></i>
                </span><!--pull-righ Finish -->

                <div class="clearfix">

                </div>

            </div><!--panel-footer Finish -->

         </a><!-- a href Finish -->

       </div><!-- panel panel-primary Finish -->

    </div><!-- col-lg-3 col-md-6 Finish -->


    <div class="col-lg-2 col-md-4"><!-- col-lg-3 col-md-6 Begin -->
      <div class="panel panel-yellow"><!-- panel panel-green Begin -->

         <div class="panel-heading"><!-- panel-heading Begin -->
             <div class="row"><!-- row Begin -->
                <div class="col-xs-3"><!-- col-xs-3 Begin -->

                      <i class="fa fa-users fa-3x"></i>

                  </div><!-- col-xs-3 Finish -->

                  <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                     <div class="huge"><?php echo $count_sellers;?></div>

                       <div> Sellers </div>

                  </div><!-- col-xs-9 text-right Finish -->
             </div><!-- row Finish -->
         </div><!-- panel-heading Finish -->

         <a href="index.php?view_sellers"><!--a href Begin -->

             <div class="panel-footer"><!--panel-footer Begin -->

                <span class="pull-left"> <!--pull-left Begin -->
                     View Details
                </span><!--pull-left Finish -->
                <span class="pull-right"><!--pull-righ Begin -->
                  <i class="fa fa-arrow-circle-right"></i>
                </span><!--pull-righ Finish -->

                <div class="clearfix">

                </div>

            </div><!--panel-footer Finish -->

         </a><!-- a href Finish -->

       </div><!-- panel panel-green Finish -->

    </div><!-- col-lg-3 col-md-6 Finish -->


    <div class="col-lg-3 col-md-4"><!-- col-lg-3 col-md-6 Begin -->
      <div class="panel panel-orange"><!-- panel panel-orange" Begin -->

         <div class="panel-heading"><!-- panel-heading Begin -->
             <div class="row"><!-- row Begin -->
                <div class="col-xs-3"><!-- col-xs-3 Begin -->

                      <i class="fa fa-book fa-3x"></i>

                  </div><!-- col-xs-3 Finish -->

                  <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                     <div class="huge"><?php echo $count_messages;?></div>

                       <div> Client Messages </div>

                  </div><!-- col-xs-9 text-right Finish -->
             </div><!-- row Finish -->
         </div><!-- panel-heading Finish -->

         <a href="index.php?view_messages"><!--a href Begin -->

             <div class="panel-footer"><!--panel-footer Begin -->

                <span class="pull-left"> <!--pull-left Begin -->
                     View Details
                </span><!--pull-left Finish -->
                <span class="pull-right"><!--pull-righ Begin -->
                  <i class="fa fa-arrow-circle-right"></i>
                </span><!--pull-righ Finish -->

                <div class="clearfix">

                </div>

            </div><!--panel-footer Finish -->

         </a><!-- a href Finish -->

       </div><!-- panel panel-orange Finish -->

    </div><!-- col-lg-3 col-md-6 Finish -->

    <div class="col-lg-2 col-md-4"><!-- col-lg-3 col-md-6 Begin -->
      <div class="panel panel-red"><!-- panel panel-red Begin -->

         <div class="panel-heading"><!-- panel-heading Begin -->
             <div class="row"><!-- row Begin -->
                <div class="col-xs-3"><!-- col-xs-3 Begin -->

                      <i class="fa fa-shopping-cart fa-3x"></i>

                  </div><!-- col-xs-3 Finish -->

                  <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Begin -->
                     <div class="huge"> <?php echo $count_pending_orders;?> </div>

                       <div> Orders </div>

                  </div><!-- col-xs-9 text-right Finish -->
             </div><!-- row Finish -->
         </div><!-- panel-heading Finish -->

         <a href="index.php?view_orders"><!--a href Begin -->

             <div class="panel-footer"><!--panel-footer Begin -->

                <span class="pull-left"> <!--pull-left Begin -->
                     View Details
                </span><!--pull-left Finish -->
                <span class="pull-right"><!--pull-righ Begin -->
                  <i class="fa fa-arrow-circle-right"></i>
                </span><!--pull-righ Finish -->

                <div class="clearfix">

                </div>

            </div><!--panel-footer Finish -->

         </a><!-- a href Finish -->

       </div><!-- panel panel-red Finish -->

    </div><!-- col-lg-3 col-md-6 Finish -->

  </div><!-- row no: 2 Finish-->

<div class="row"><!-- row no:3 Begin -->

   <div class="col-lg-8"><!-- col-lg-8 Begin -->
       <div class="panel panel-primary"><!-- panel panel-primary Begin -->
          <div class="panel-heading"><!-- panel-heading Begin -->
              <h3 class="panel-title"><!-- panel-title Begin -->

                   <i class="fa fa-money fa-fw"></i> New Orders

              </h3><!-- panel-title Finish -->
          </div><!-- panel-heading Finish -->

          <div class="panel-body"><!-- panel-body Begin -->
             <div class="table-responsive"><!-- table-responsive Begin -->
                <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered Begin -->

                      <thead><!-- thead Begin -->

                      <tr><!-- tr Begin -->
                         <th>Order no:</th>
                         <th>Customer Email:</th>
                         <th>Invoice No:</th>
                         <th>Product ID:</th>
                         <th>Product Qty</th>
                         <th>Category</th>
                         <th>Status</th>

                       </tr><!-- tr Finish-->

                      </thead><!-- thead Finish -->

                      <tbody><!-- tbody Begin -->

                        <?php

                          $i=0;

                          $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,4";
                          $run_order = mysqli_query($con,$get_order);

                          while($row_order=mysqli_fetch_array($run_order)){
                              $order_id = $row_order['order_id'];
                              $c_id = $row_order['cust_id'];
                              $invoice_no = $row_order['invoice_no'];
                              $Prod_id = $row_order['Prod_id'];
                              $qty = $row_order['Qty'];
                              $Cat_Title = $row_order['size'];
                              $order_status = $row_order['order_status'];

                               $i++;

                         ?>
                             <tr><!-- tr Begin -->
                                  <td><?php echo $order_id;?></td>
                                  <td>
                                        <?php

                                           $get_customer = "select * from customers where cust_id='$c_id'";

                                           $run_customer = mysqli_query($con,$get_customer);
                                           $row_customer = mysqli_fetch_array($run_customer);
                                           $customer_email = $row_customer['cust_email'];

                                           echo $customer_email;

                                         ?>

                                  </td>
                                  <td><?php echo   $invoice_no;?></td>
                                  <td><?php echo   $Prod_id;?></td>
                                  <td><?php echo   $qty;?></td>
                                  <td><?php echo   $Cat_Title;?></td>
                                  <td>



                                    <?php
                                           if($order_status=='Pending'){

                                               echo $order_status='Pending';

                                             }else{

                                               echo $order_status='Complete';

                                           }
                                     ?>

                                  </td>
                             </tr><!-- tr Finish -->

                    <?php } ?>

                      </tbody><!-- tbody Finish -->


                </table><!-- table table-hover table-striped table-bordered Finish -->

             </div><!-- table-responsive Finish -->

             <div class="text-right"><!-- text-right Begin -->

                <a href="index.php?view_orders"><!-- href Begin-->

                     View All Orders <i class="fa fa-arrow-circle-right"></i>

                </a><!-- href Finish -->

             </div><!-- text-right Begin -->

          </div><!-- panel-body Finish -->

       </div><!-- panel panel-primary Finish -->
   </div><!-- col-lg-8 Finish -->

   <div class="col-md-4"><!-- col-md-4 Begin -->
      <div class="panel"><!-- panel Begin -->
         <div class="panel-body"><!-- panel-body Begin -->
            <div class="mb-md thumb-info"><!-- mb-md thumb-info Begin -->

           <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">

           <div class="thumb-info-title"><!-- thumb-info-title Begin -->
                <span class="thumb-info-inner"><?php echo $admin_name; ?></span>
                <span class="thumb-info-inner"><?php echo $admin_job; ?></span>
           </div><!-- thumb-info-title Finish -->
           </div><!-- mb-md thumb-info Finish -->

             <div class="mb-md"><!-- mb-md Begin -->
                <div class="widget-content-expanded"><!-- widget-content-expanded Begin -->
                    <i class="fa fa-user"></i> <span> Email: </span><?php echo $admin_email; ?> <br/>
                    <i class="fa fa-flag"></i> <span> Country </span><?php echo $admin_country; ?><br/>
                    <i class="fa fa-envelope"></i> <span> Contact </span><?php echo $admin_contact; ?><br/>

                </div><!-- widget-content-expanded Finish -->

                <hr class="dotted short">

                <h5 class="text-muted"> About Me</h5>

                <p><!-- p Begin -->

                  <?php echo $admin_about; ?>

                  </p><!-- p Finish -->

             </div><!-- mb-md Finish -->

         </div><!-- panel-body Finish -->
     </div><!-- panel Finish -->
 </div><!-- col-md-4 Finish -->

</div><!-- row no:3 Finish -->

<?php } ?>