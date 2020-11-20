<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

<?php

        $file = "../styles/style.css";

        if(file_exists($file)){

            $data = file_get_contents($file);


        }

?>

  <div class="row"><!-- row Begin -->
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
      <ol class="breadcrumb"><!-- breadcrumb Begin -->
        <li class="active"><!-- active Begin -->

            <i class="fa fa-dashboard"></i> Dashboard / CSS Editor

        </li><!-- active Finish -->
      </ol><!-- breadcrumb Finish -->
    </div><!-- col-lg-12 Finish -->
  </div><!-- row Finish -->


  <div class="row"><!-- row Begin -->
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
      <div class="panel panel-default"><!-- panel panel-default Begin-->
        <div class="panel-heading"><!-- panel-heading Begin-->
          <h3 class="panel-title"><!-- panel-title Begin-->

             <i class="fa fa-pencil"></i> CSS Editor

          </h3><!-- panel-title Finish-->
        </div><!-- panel-heading Finish-->

         <div class="panel-body"><!-- panel-body Begin-->

              <form action="" class="form-horintal" method="post"><!--form-horintal Begin-->
                 <div class="form-group"><!--form-group Begin-->

                      <div class="col-lg-12"><!--col-lg-12 Begin-->
                          <textarea name="newdata" id="" rows="15" class="form-control">

                                <?php echo $data; ?>

                          </textarea>
                      </div><!--col-lg-12 finish-->

                 </div><!--form-group finish-->

                 <div class= "form-group"><!--form-group begin-->

                      <label class="control-label col-md-3"></label>

                      <div class="col-md-6"><!--col-md-6 begin-->

                        <input type="submit" name="update" value="Update CSS" class="form-control btn btn-primary">

                      </div><!--col-md-6 Finish-->

                 </div><!--form-group finish-->

             </form><!--form-horintal Finish-->


        </div><!-- panel-body Finish-->

      </div><!-- panel panel-default Finish -->
    </div><!-- col-lg-12 Finish -->
  </div><!-- row Finish -->


  <?php

    if(isset($_POST['update'])){

       $newdata = $_POST['newdata'];
       $handle = fopen($file, "w");
       fwrite($handle, $newdata);
       fclose($handle);

       echo "<script>alert('Your CSS Has Been Update')</script>";
       echo "<script>window.open('index.php?edit_css','_self')</script>";
    }


  ?>


<?php } ?>
