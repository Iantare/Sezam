<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <?php
    if(isset($_GET['edit_cat'])){

     $edit_cat_id = $_GET['edit_cat'];
     $edit_cat_query = "select * from categories where cat_id = '$edit_cat_id '";
     $run_edit = mysqli_query($con,$edit_cat_query);
     $row_edit = mysqli_fetch_array($run_edit);

     $cat_id = $row_edit['Cat_id'];
     $cat_title = $row_edit['Cat_Title'];
     $cat_top = $row_edit['cat_top'];
     $cat_image = $row_edit['cat_image'];

    }



  ?>
<div class="row"><!-- row 1 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <ol class="breadcrumb"><!-- breadcrumb Begin-->
      <li>

           <i class="fa fa-dashboard"></i> Dashboard / Edit Category

      </li>
    </ol><!-- breadcrumb Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 1 Finish-->

<div class="row"><!-- row 2 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <div class="panel panel-default"><!--panel panel-default Begin-->
      <div class="panel-heading"><!--panel-heading Begin-->
        <h3 class="panel-title"><!--panel-title Begin-->

              <i class="fa fa-pencil fa-fw"></i> Edit Category

        </h3><!--panel-title Finish-->
      </div><!--panel-heading Finish-->

      <div class="panel-body"><!-- panel-body Begin-->

        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Begin-->
            <div class="form-group"><!-- form-group Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                 Category Title

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                  <input value="<?php echo $cat_title; ?>" name="Cat_Title" type="text" class="form-control">

                </div><!--col-md-6 Finish-->
            </div><!-- form-group Finish-->

            <div class="form-group"><!-- form-group 2 Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                 Top Category

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                <input name="cat_top" type="radio" value="yes"

                    <?php
                          if($cat_top=='no'){}else{echo "checked='checked'";}

                    ?>
                >
                    <label>Yes</label>

                <input name="cat_top" type="radio" value="no"

                    <?php
                          if($cat_top=='no'){echo"checked='checked'";}

                    ?>
                 >

                    <label>No</label>

                </div><!--col-md-6 Finish-->
            </div><!-- form-group 2 Finish-->

            <div class="form-group"><!-- form-group 3 Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                 Category Image

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                <input type="file" name="cat_image" class="form-control">

                <br>
                <img width="70" height="70" src="other_images/<?php echo $cat_image;?>" alt="<?php echo $cat_image;?>">

                </div><!--col-md-6 Finish-->
            </div><!-- form-group 3 Finish-->



            <div class="form-group"><!-- form-group Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->


                  </label><!--control-label col-md-3 Finish-->
                  <div class="col-md-6"><!--col-md-6 Begin-->

                        <input value="Update Category" name="update" type="submit" class="form-control btn btn-primary" >

                  </div><!--col-md-6 Finish-->
              </div><!-- form-group Finish-->

        </form><!-- form-horizontal Finish-->


     </div><!-- panel-body Finish-->

    </div><!--panel panel-default Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 2 Finish-->

<?php

   if(isset($_POST['update'])){

       $cat_title = $_POST['Cat_Title'];
       $cat_top = $_POST['cat_top'];

       if(is_uploaded_file($_FILES['cat_image']['tmp_name'])){

         $cat_image = $_FILES['cat_image']['name'];
         $temp_name = $_FILES['cat_image']['tmp_name'];

        $update_cat = "update categories set Cat_Title= '$cat_title', cat_top= '$cat_top', cat_image= '$cat_image' where Cat_id='$cat_id'";
        $run_cat = mysqli_query($con,$update_cat);

        if($run_cat){

                echo "<script>alert('Your Category has been updated Successfully')</script>";
                echo "<script>window.open('index.php?view_cats','_self')</script>";


            }

          }else{
            $update_cat = "update categories set Cat_Title= '$cat_title', cat_top= '$cat_top' where Cat_id='$cat_id'";
            $run_cat = mysqli_query($con,$update_cat);

            if($run_cat){

                    echo "<script>alert('Your Category has been updated Successfully')</script>";
                    echo "<script>window.open('index.php?view_cats','_self')</script>";


                }
        }


   }

 ?>

<?php } ?>
