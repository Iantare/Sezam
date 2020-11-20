<?php

if(!isset($_SESSION['seller_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>
 <div class="row"><!-- row 1 Begin-->
   <div class="col-lg-12"><!-- col-lg-12 Begin-->
     <ol class="breadcrumb"><!-- breadcrumb Begin-->
       <li>

            <i class="fa fa-dashboard"></i> Dashboard / Insert Shops

       </li>
     </ol><!-- breadcrumb Finish-->
   </div><!-- col-lg-12 Finish-->
 </div><!-- row 1 Finish-->

 <div class="row"><!-- row 2 Begin-->
   <div class="col-lg-12"><!-- col-lg-12 Begin-->
     <div class="panel panel-default"><!--panel panel-default Begin-->
       <div class="panel-heading"><!--panel-heading Begin-->
         <h3 class="panel-title"><!--panel-title Begin-->

               <i class="fa fa-money fa-fw"></i> Insert Shops

         </h3><!--panel-title Finish-->
       </div><!--panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Begin-->
             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business Name

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_name" type="text" class="form-control" required>

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Physical Address

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_address" type="text" class="form-control" required>

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <!-- <div class="form-group"><!-- form-group 1 Begin-->
                  <!-- <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  <!-- Business Account -->

                 <!-- </label><!--control-label col-md-3 Finish-->
                 <!-- <div class="col-md-6"><!--col-md-6 Begin-->

                   <!-- <input name="manufacturer_account" type="text" class="form-control"> -->

                 <!-- </div><!--col-md-6 Finish-->
             <!-- </div><!-- form-group  1 Finish-->


             <!-- <div class="form-group"><!-- form-group 1 Begin-->
                  <!-- <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  <!-- Business TIN # -->

                 <!-- </label><!--control-label col-md-3 Finish-->
                 <!-- <div class="col-md-6"><!--col-md-6 Begin-->

                   <!-- <input name="manufacturer_TIN" type="text" class="form-control"> -->

                 <!-- </div><!--col-md-6 Finish-->
             <!-- </div><!-- form-group  1 Finish-->


             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Your Phone #

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_contact" type="text" class="form-control" required>

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 2 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Top Business

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_top" type="radio" value="yes">
                   <label>Yes</label>

                   <input name="manufacturer_top" type="radio" value="no">
                   <label>No</label>

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group 2 Finish-->

             <div class="form-group"><!-- form-group 3 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business Logo

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                 <input type="file" name="manufacturer_logo" class="form-control">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group 3 Finish-->



             <div class="form-group"><!-- form-group 4 Begin-->
                   <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin--> </label><!--control-label col-md-3 Finish-->

                   <div class="col-md-6"><!--col-md-6 Begin-->

                       <input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">

                   </div><!--col-md-6 Finish-->
               </div><!-- form-group 4 Finish-->

         </form><!-- form-horizontal Finish-->
      </div><!-- panel-body Finish-->

     </div><!--panel panel-default Finish-->
   </div><!-- col-lg-12 Finish-->
 </div><!-- row 2 Finish-->

 <?php

    if(isset($_POST['submit'])){

      $manufacturer_name = $_POST['manufacturer_name'];

      $manufacturer_address = $_POST['manufacturer_address'];

      // $manufacturer_account = $_POST['manufacturer_account'];

      // $manufacturer_TIN = $_POST['manufacturer_TIN'];

      $manufacturer_contact = $_POST['manufacturer_contact'];

      $manufacturer_top = $_POST['manufacturer_top'];

      $manufacturer_logo = $_FILES['manufacturer_logo']['name'];

      $temp_name = $_FILES['manufacturer_logo']['tmp_name'];

      move_uploaded_file($temp_name,"images/$manufacturer_logo");



      $insert_manufacturer = "insert into manufacturers (manufacturer_title,manufacturer_address,manufacturer_contact,manufacturer_top,manufacturer_image) values ('$manufacturer_name','$manufacturer_address','$manufacturer_contact','$manufacturer_top','$manufacturer_logo')";

      $run_manufacturer = mysqli_query($con,$insert_manufacturer);

      echo "<script>alert('Your Shop Is Successfully Created You Can Start Selling NOW')</script>";

      echo "<script>window.open('../index.php','_self')</script>";



    }

  ?>

<?php } ?>
