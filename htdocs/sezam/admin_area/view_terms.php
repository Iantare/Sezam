<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>
<div class="row"><!-- row 1 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <ol class="breadcrumb"><!-- breadcrumb Begin-->
      <li>

           <i class="fa fa-dashboard"></i> Dashboard / View Terms

      </li>
    </ol><!-- breadcrumb Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 1 Finish-->

<div class="row"><!-- row 2 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <div class="panel panel-default"><!--panel panel-default Begin-->
      <div class="panel-heading"><!--panel-heading Begin-->
        <h3 class="panel-title"><!--panel-title Begin-->

              <i class="fa fa-tags fa-fw"></i> View Terms

        </h3><!--panel-title Finish-->
      </div><!--panel-heading Finish-->

      <div class="panel-body"><!-- panel-body Begin-->

           <?php

               $get_terms = "select * from terms";

               $run_terms = mysqli_query($con,$get_terms);

               while($run_terms_section=mysqli_fetch_array($run_terms)){

                    $term_id = $run_terms_section['term_id'];
                    $term_title = $run_terms_section['term_title'];
                    $term_desc = substr ($run_terms_section['term_desc'],0,400);


            ?>

            <div class="col-lg-4 col-md-4"><!-- col-lg-4 col-md-4 Begin-->
              <div class="panel panel-primary"><!-- panel panel-primary Begin-->
                <div class="panel-heading"><!-- panel-heading Begin-->
                   <h3 class="panel-title" align="center"><!-- panel-title Begin-->

                     <?php echo $term_title; ?>

                   </h3><!-- panel-title Finish-->
                </div><!-- panel-heading Finish-->

                <div class="panel-body"><!-- panel-body Begin-->

                   <?php echo $term_desc; ?>

                </div><!-- panel-body Finish-->

                <div class="panel-footer"><!-- panel-footer Begin-->
                     <center><!-- center Begin-->

                         <a href="index.php?delete_term=<?php echo $term_id; ?>" class="pull-right"><!-- pull-right Begin-->

                               <i class="fa fa-trash"></i> Delete

                         </a><!-- pull-right Finish-->

                         <a href="index.php?edit_term=<?php echo $term_id; ?>" class="pull-left"><!-- pull-left Begin-->

                               <i class="fa fa-pencil"></i> Edit

                         </a><!-- pull-left Finish-->

                         <div class="clearfix"></div>


                     </center><!-- center Finish-->

                </div><!-- panel-footer Finish-->

              </div><!-- panel panel-primary Finish-->
          </div><!-- col-lg-4 col-md-4 Finish-->

          <?php } ?>

     </div><!-- panel-body Finish-->

    </div><!--panel panel-default Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 2 Finish-->


<?php } ?>
