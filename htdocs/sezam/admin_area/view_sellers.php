<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <div class="row"><!-- row Begin -->
   <div class="col-lg-12"><!-- col-lg-12 Begin -->
     <ol class="breadcrumb"><!-- breadcrumb Begin -->
       <li class="active"><!-- active Begin -->

           <i class="fa fa-dashboard"></i> Dashboard / View Sellers

       </li><!-- active Finish -->
     </ol><!-- breadcrumb Finish -->
   </div><!-- col-lg-12 Finish -->
 </div><!-- row Finish -->

<div class="row"><!-- row Begin -->
  <div class="col-lg-12"><!-- col-lg-12 Begin -->
    <div class="panel panel-default"><!-- panel panel-default Begin-->
      <div class="panel-heading"><!-- panel-heading Begin-->
        <h3 class="panel-title"><!-- panel-title Begin-->

           <i class="fa fa-tags"></i> View Sellers

        </h3><!-- panel-title Finish-->
      </div><!-- panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <div class="table-responsive"><!-- table-responsive Begin-->
           <table class="table table-stripe table-bordered table-hover"><!-- table table-stripe table-bordered table-hover Begin-->

                <thead><!-- thead Begin-->
                    <tr><!-- tr Begin-->
                        <th> N0: </th>
                        <th> Name: </th>
                        <th> Image: </th>
                        <th> E-mail: </th>
                        <th> Country: </th>
                        <th> City: </th>
                        <th> Address: </th>
                        <th> Contact: </th>
                        <th> Delete: </th>
                    </tr><!-- tr Finish-->
                </thead><!-- thead Finish-->

               <tbody><!-- tbody Begin-->

                  <?php

                       $i=0;
                       $get_sellers = "select * from sellers ";
                       $run_sellers = mysqli_query($con,$get_sellers);
                       while($row_seller=mysqli_fetch_array($run_sellers)){

                            $seller_id = $row_seller['seller_id'];
                            $seller_name = $row_seller['seller_name'];
                            $seller_img = $row_seller['seller_image'];
                            $seller_email = $row_seller['seller_email'];
                            $seller_country = $row_seller['seller_country'];
                            $seller_city = $row_seller['seller_city'];
                            $seller_address = $row_seller['seller_address'];
                            $seller_contact = $row_seller['seller_contact'];

                            $i++;


                   ?>
                  <tr><!-- tr Begin-->
                      <td> <?php echo $i; ?> </td>
                      <td> <?php echo $seller_name; ?> </td>
                      <td> <img src="../seller/seller_images/<?php echo $seller_img; ?>" width="60" height="60"></td>
                      <td>  <?php echo $seller_email; ?> </td>
                      <td> <?php echo $seller_country; ?> </td>
                      <td> <?php echo $seller_city; ?> </td>
                      <td> <?php echo $seller_address; ?> </td>
                      <td> <?php echo $seller_contact; ?> </td>
                      <td>
                           <a href="index.php?delete_seller=<?php echo $seller_id;?>">

                               <i class="fa fa-trash-o"></i> Delete

                           </a>
                    </td>

                  </tr><!-- tr Finish-->

                <?php } ?>

               </tbody><!-- tbody Finish-->

           </table><!-- table table-stripe table-bordered table-hover Finish-->
         </div><!-- table-responsive Finish-->
      </div><!-- panel-body Finish-->

    </div><!-- panel panel-default Finish -->
  </div><!-- col-lg-12 Finish -->
</div><!-- row Finish -->


<?php } ?>
