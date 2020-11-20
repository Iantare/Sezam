<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <div class="row"><!-- row Begin -->
   <div class="col-lg-12"><!-- col-lg-12 Begin -->
     <ol class="breadcrumb"><!-- breadcrumb Begin -->
       <li class="active"><!-- active Begin -->

           <i class="fa fa-dashboard"></i> Dashboard / View Shops

       </li><!-- active Finish -->
     </ol><!-- breadcrumb Finish -->
   </div><!-- col-lg-12 Finish -->
 </div><!-- row Finish -->

<div class="row"><!-- row Begin -->
  <div class="col-lg-12"><!-- col-lg-12 Begin -->
    <div class="panel panel-default"><!-- panel panel-default Begin-->
      <div class="panel-heading"><!-- panel-heading Begin-->
        <h3 class="panel-title"><!-- panel-title Begin-->

           <i class="fa fa-tags"></i> View Shops

        </h3><!-- panel-title Finish-->
      </div><!-- panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <div class="table-responsive"><!-- table-responsive Begin-->
           <table class="table table-stripe table-bordered table-hover"><!-- table table-stripe table-bordered table-hover Begin-->

                <thead><!-- thead Begin-->
                    <tr><!-- tr Begin-->
                        <th>  ID </th>
                        <th> Business Name </th>
                        <th> Physical Address </th>
                        <th> Business Account </th>
                        <th> Business TIN # </th>
                        <th> Business Contact </th>
                        <th> Business Top </th>
                        <th> Business Logo </th>
                        <th> Business Delete </th>
                        <th> Business Edit </th>
                    </tr><!-- tr Finish-->
                </thead><!-- thead Finish-->

               <tbody><!-- tbody Begin-->

                  <?php

                       $i=0;
                       $get_manufacturer = "select * from manufacturers ORDER BY manufacturer_title ";
                       $run_manufacturer = mysqli_query($con,$get_manufacturer);
                       while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

                            $manufacturer_id = $row_manufacturer['manufacturer_id'];
                            $manufacturer_title = $row_manufacturer['manufacturer_title'];
                            $manufacturer_address = $row_manufacturer['manufacturer_address'];
                            $manufacturer_account = $row_manufacturer['manufacturer_account'];
                            $manufacturer_TIN = $row_manufacturer['manufacturer_TIN'];
                            $manufacturer_contact = $row_manufacturer['manufacturer_contact'];
                            $manufacturer_top = $row_manufacturer['manufacturer_top'];
                            $manufacturer_image = $row_manufacturer['manufacturer_image'];

                            $i++;

                   ?>
                  <tr><!-- tr Begin-->
                      <td> <?php echo $i; ?> </td>
                      <td> <?php echo $manufacturer_title; ?> </td>
                      <td> <?php echo $manufacturer_address; ?> </td>
                      <td> <?php echo $manufacturer_account; ?> </td>
                      <td> <?php echo $manufacturer_TIN; ?> </td>
                      <td> <?php echo $manufacturer_contact; ?> </td>
                      <td>  <?php echo $manufacturer_top; ?> </td>
                      <td> <img src="../seller/images/<?php echo $manufacturer_image; ?>" width="60" height="60"></td>

                      <td>
                           <a href="index.php?delete_manufacturer=<?php echo $manufacturer_id;?>">

                               <i class="fa fa-trash-o"></i> Delete

                           </a>
                    </td>
                      <td>
                          <a href="index.php?edit_manufacturer=<?php echo $manufacturer_id;?>">

                               <i class="fa fa-pencil"></i> Edit

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
