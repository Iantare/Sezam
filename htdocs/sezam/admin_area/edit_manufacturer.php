<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <?php

        if(isset($_GET['edit_manufacturer'])){

            $edit_manufacturer = $_GET['edit_manufacturer'];
            $get_manufacturer = "select * from manufacturers where manufacturer_id = '$edit_manufacturer'";
            $run_manufacturer = mysqli_query($con,$get_manufacturer);
            $row_manufacturer = mysqli_fetch_array($run_manufacturer);

            $manufacturer_id = $row_manufacturer['manufacturer_id'];
            $manufacturer_title = $row_manufacturer['manufacturer_title'];
            $manufacturer_address = $row_manufacturer['manufacturer_address'];
            $manufacturer_account = $row_manufacturer['manufacturer_account'];
            $manufacturer_TIN = $row_manufacturer['manufacturer_TIN'];
            $manufacturer_contact = $row_manufacturer['manufacturer_contact'];
            $manufacturer_top = $row_manufacturer['manufacturer_top'];
            $manufacturer_image = $row_manufacturer['manufacturer_image'];

        }


 ?>


 <div class="row"><!-- row 1 Begin-->
   <div class="col-lg-12"><!-- col-lg-12 Begin-->
     <ol class="breadcrumb"><!-- breadcrumb Begin-->
       <li>

            <i class="fa fa-dashboard"></i> Dashboard / Update Shops

       </li>
     </ol><!-- breadcrumb Finish-->
   </div><!-- col-lg-12 Finish-->
 </div><!-- row 1 Finish-->

 <div class="row"><!-- row 2 Begin-->
   <div class="col-lg-12"><!-- col-lg-12 Begin-->
     <div class="panel panel-default"><!--panel panel-default Begin-->
       <div class="panel-heading"><!--panel-heading Begin-->
         <h3 class="panel-title"><!--panel-title Begin-->

               <i class="fa fa-money fa-fw"></i> Update Shop

         </h3><!--panel-title Finish-->
       </div><!--panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Begin-->
             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business Name

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_name" type="text" class="form-control" value="<?php echo $manufacturer_title;?>">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Physical Address

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_address" type="text" class="form-control" value="<?php echo $manufacturer_address;?>">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business Account

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_account" type="text" class="form-control" value="<?php echo $manufacturer_account;?>">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business TIN #

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_TIN" type="text" class="form-control" value="<?php echo $manufacturer_TIN;?>">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->


             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business Contact

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_contact" type="text" class="form-control" value="<?php echo $manufacturer_contact;?>">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 2 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Top Business

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="manufacturer_top" type="radio" value="yes"

                   <?php

                       if($manufacturer_top=='no'){}else{echo "checked='checked'";}


                    ?>

                   >

                   <label>Yes</label>

                   <input name="manufacturer_top" type="radio" value="no"

                   <?php

                       if($manufacturer_top=='no'){echo "checked='checked'";}


                    ?>

                   >
                   <label>No</label>

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group 2 Finish-->

             <div class="form-group"><!-- form-group 3 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Business Logo

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                 <input type="file" name="manufacturer_logo" class="form-control">

                 <br>
                 <img width="70" height="70" src="other_images/<?php echo $manufacturer_image; ?>" alt="<?php echo $manufacturer_image; ?>">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group 3 Finish-->



             <div class="form-group"><!-- form-group 4 Begin-->
                   <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin--> </label><!--control-label col-md-3 Finish-->

                   <div class="col-md-6"><!--col-md-6 Begin-->

                       <input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">

                   </div><!--col-md-6 Finish-->
               </div><!-- form-group 4 Finish-->

         </form><!-- form-horizontal Finish-->
      </div><!-- panel-body Finish-->

     </div><!--panel panel-default Finish-->
   </div><!-- col-lg-12 Finish-->
 </div><!-- row 2 Finish-->

 <?php

    if(isset($_POST['update'])){

      $manufacturer_name = $_POST['manufacturer_name'];

      $manufacturer_address = $_POST['manufacturer_address'];

      $manufacturer_account = $_POST['manufacturer_account'];

      $manufacturer_TIN = $_POST['manufacturer_TIN'];

      $manufacturer_contact = $_POST['manufacturer_contact'];

      $manufacturer_top = $_POST['manufacturer_top'];

      if(is_uploaded_file($_FILES['manufacturer_logo']['tmp_name'])){


        $manufacturer_logo = $_FILES['manufacturer_logo']['name'];

        $temp_name = $_FILES['manufacturer_logo']['tmp_name'];

        move_uploaded_file($temp_name,"other_images/$manufacturer_logo");

        $update_manufacturer = "update manufacturers set manufacturer_title='$manufacturer_name',manufacturer_address='$manufacturer_address',manufacturer_account='$manufacturer_account', manufacturer_TIN='$manufacturer_TIN',manufacturer_contact='$manufacturer_contact',
                               manufacturer_top='$manufacturer_top',manufacturer_image='$manufacturer_logo'
                               where manufacturer_id = '$manufacturer_id' " ;

        $run_manufacturer = mysqli_query($con,$update_manufacturer);

        if ($run_manufacturer){

              echo "<script>alert('One of Shops has been Updated successfully')</script>";

              echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

        }

      }else{

        $update_manufacturer = "update manufacturers set manufacturer_title='$manufacturer_name',manufacturer_address='$manufacturer_address',manufacturer_account='$manufacturer_account',manufacturer_TIN='$manufacturer_TIN',manufacturer_contact='$manufacturer_contact',
                               manufacturer_top='$manufacturer_top' where manufacturer_id ='$manufacturer_id' " ;


        $run_manufacturer = mysqli_query($con,$update_manufacturer);

        if ($run_manufacturer){

               echo "<script>alert('One of Shops has been Updated successfully')</script>";

               echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

            }

        }



    }

  ?>

<?php } ?>
