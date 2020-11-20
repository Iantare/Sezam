<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <?php
    if(isset($_GET['edit_box'])){

     $edit_box_id = $_GET['edit_box'];
     $edit_box_query = "select * from boxes_section where box_id = '$edit_box_id'";
     $run_edit_box = mysqli_query($con,$edit_box_query);
     $row_edit_box = mysqli_fetch_array($run_edit_box);

     $box_id = $row_edit_box['box_id'];
     $box_title = $row_edit_box['box_title'];
     $box_desc = $row_edit_box['box_desc'];

    }



  ?>
<div class="row"><!-- row 1 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <ol class="breadcrumb"><!-- breadcrumb Begin-->
      <li>

           <i class="fa fa-dashboard"></i> Dashboard / Edit Box

      </li>
    </ol><!-- breadcrumb Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 1 Finish-->

<div class="row"><!-- row 2 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <div class="panel panel-default"><!--panel panel-default Begin-->
      <div class="panel-heading"><!--panel-heading Begin-->
        <h3 class="panel-title"><!--panel-title Begin-->

              <i class="fa fa-pencil fa-fw"></i> Edit Box

        </h3><!--panel-title Finish-->
      </div><!--panel-heading Finish-->

      <div class="panel-body"><!-- panel-body Begin-->
        <form action="" class="form-horizontal" method="post"><!-- form-horizontal Begin-->
            <div class="form-group"><!-- form-group Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Box Title

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                  <input value="<?php echo $box_title; ?>" name="box_title" type="text" class="form-control">

                </div><!--col-md-6 Finish-->
            </div><!-- form-group Finish-->

            <div class="form-group"><!-- form-group Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Box Description

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                <textarea type='text' name="box_desc" class="form-control"><?php echo $box_desc; ?></textarea>

                </div><!--col-md-6 Finish-->
            </div><!-- form-group Finish-->



            <div class="form-group"><!-- form-group Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->


                  </label><!--control-label col-md-3 Finish-->
                  <div class="col-md-6"><!--col-md-6 Begin-->

                        <input value="Update Box" name="update_box" type="submit" class="form-control btn btn-primary" >

                  </div><!--col-md-6 Finish-->
              </div><!-- form-group Finish-->

        </form><!-- form-horizontal Finish-->
     </div><!-- panel-body Finish-->

    </div><!--panel panel-default Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 2 Finish-->

<?php

   if(isset($_POST['update_box'])){

       $box_title = $_POST['box_title'];
       $box_desc = $_POST['box_desc'];

      $update_box = "update boxes_section set box_id='$box_id', box_title= '$box_title', box_desc= '$box_desc' where box_id='$box_id'";
      $run_box = mysqli_query($con,$update_box);

      if($run_box){

              echo "<script>alert('Your Boxes has been updated Successfully')</script>";
              echo "<script>window.open('index.php?view_boxes','_self')</script>";
      }




   }

 ?>

<?php } ?>
