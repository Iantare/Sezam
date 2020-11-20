<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>
 <div class="row"><!-- row 1 Begin-->
   <div class="col-lg-12"><!-- col-lg-12 Begin-->
     <ol class="breadcrumb"><!-- breadcrumb Begin-->
       <li>

            <i class="fa fa-dashboard"></i> Dashboard / Insert New Box

       </li>
     </ol><!-- breadcrumb Finish-->
   </div><!-- col-lg-12 Finish-->
 </div><!-- row 1 Finish-->

 <div class="row"><!-- row 2 Begin-->
   <div class="col-lg-12"><!-- col-lg-12 Begin-->
     <div class="panel panel-default"><!--panel panel-default Begin-->
       <div class="panel-heading"><!--panel-heading Begin-->
         <h3 class="panel-title"><!--panel-title Begin-->

               <i class="fa fa-money fa-fw"></i> Insert Box

         </h3><!--panel-title Finish-->
       </div><!--panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Begin-->
             <div class="form-group"><!-- form-group 1 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Box Title

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <input name="box_title" type="text" class="form-control">

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group  1 Finish-->

             <div class="form-group"><!-- form-group 2 Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Box Description

                 </label><!--control-label col-md-3 Finish-->
                 <div class="col-md-6"><!--col-md-6 Begin-->

                   <textarea name="box_desc" type="text" class="form-control" rows="6" cols="18"></textarea>

                 </div><!--col-md-6 Finish-->
             </div><!-- form-group 2 Finish-->


             <div class="form-group"><!-- form-group 4 Begin-->
                   <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin--> </label><!--control-label col-md-3 Finish-->

                   <div class="col-md-6"><!--col-md-6 Begin-->

                       <input type="submit" name="submit" value="Insert Box" class="btn btn-primary form-control">

                   </div><!--col-md-6 Finish-->
               </div><!-- form-group 4 Finish-->

         </form><!-- form-horizontal Finish-->
      </div><!-- panel-body Finish-->

     </div><!--panel panel-default Finish-->
   </div><!-- col-lg-12 Finish-->
 </div><!-- row 2 Finish-->

 <?php

    if(isset($_POST['submit'])){

      $box_title = $_POST['box_title'];

      $box_desc = $_POST['box_desc'];

      $insert_box = "insert into boxes_section (box_title,box_desc) values ('$box_title','$box_desc')";
      $run_box = mysqli_query($con,$insert_box);

      echo "<script>alert('New Box has been inserted')</script>";
      echo "<script>window.open('index.php?view_boxes','_self')</script>";

    }

  ?>

<?php } ?>
