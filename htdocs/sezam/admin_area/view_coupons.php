<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <div class="row"><!-- row Begin -->
   <div class="col-lg-12"><!-- col-lg-12 Begin -->
     <ol class="breadcrumb"><!-- breadcrumb Begin -->
       <li class="active"><!-- active Begin -->

           <i class="fa fa-dashboard"></i> Dashboard / View Coupons

       </li><!-- active Finish -->
     </ol><!-- breadcrumb Finish -->
   </div><!-- col-lg-12 Finish -->
 </div><!-- row Finish -->

<div class="row"><!-- row Begin -->
  <div class="col-lg-12"><!-- col-lg-12 Begin -->
    <div class="panel panel-default"><!-- panel panel-default Begin-->
      <div class="panel-heading"><!-- panel-heading Begin-->
        <h3 class="panel-title"><!-- panel-title Begin-->

           <i class="fa fa-tags"></i> View Coupons

        </h3><!-- panel-title Finish-->
      </div><!-- panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <div class="table-responsive"><!-- table-responsive Begin-->
           <table class="table table-stripe table-bordered table-hover"><!-- table table-stripe table-bordered table-hover Begin-->

                <thead><!-- thead Begin-->
                    <tr><!-- tr Begin-->
                        <th> Coupon ID </th>
                        <th> Coupon Name </th>
                        <th> Product Name </th>
                        <th> Price </th>
                        <th> Code </th>
                        <th> Limit </th>
                        <th> Used </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr><!-- tr Finish-->
                </thead><!-- thead Finish-->

               <tbody><!-- tbody Begin-->

                 <?php

                        $i=0;
                        $get_coupons = "select * from coupons";
                        $run_coupons = mysqli_query($con,$get_coupons);

                        while($row_coupons=mysqli_fetch_array($run_coupons)){

                              $coupon_id = $row_coupons['coupon_id'];
                              $coupon_pro_id = $row_coupons['Prod_id'];
                              $coupon_title = $row_coupons['coupon_title'];
                              $coupon_price = $row_coupons['coupon_price'];
                              $coupon_code = $row_coupons['coupon_code'];
                              $coupon_limit = $row_coupons['coupon_limit'];
                              $coupon_used = $row_coupons['coupon_used'];

                              $get_products = "select * from products where Prod_id = '$coupon_pro_id'";
                              $run_products = mysqli_query($con,$get_products);
                              $row_products = mysqli_fetch_array($run_products);

                              $product_title = $row_products['Prod_Title'];
                              $i++;

                  ?>

                  <tr>

                     <td><?php echo $i; ?></td>
                     <td><?php echo $coupon_title; ?></td>
                     <td><?php echo $product_title; ?></td>
                     <td>RWF <?php echo $coupon_price; ?></td>
                     <td><?php echo $coupon_code; ?></td>
                     <td><?php echo $coupon_limit; ?></td>
                     <td><?php echo $coupon_used; ?></td>
                     <td>

                            <a href="index.php?edit_coupon=<?php echo $coupon_id ?>">

                                  <i class="fa fa-pencil"></i> Edit

                            </a>
                     </td>
                     <td>
                       <a href="index.php?delete_coupon=<?php echo $coupon_id ?>">

                             <i class="fa fa-trash"></i> Delete

                       </a>

                     </td>

                  </tr>

                  <?php } ?>

               </tbody><!-- tbody Finish-->

           </table><!-- table table-stripe table-bordered table-hover Finish-->
         </div><!-- table-responsive Finish-->
      </div><!-- panel-body Finish-->

    </div><!-- panel panel-default Finish -->
  </div><!-- col-lg-12 Finish -->
</div><!-- row Finish -->


<?php } ?>
