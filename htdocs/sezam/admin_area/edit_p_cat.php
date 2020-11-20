<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <?php
    if(isset($_GET['edit_p_cat'])){

     $edit_p_cat_id = $_GET['edit_p_cat'];
     $edit_p_cat_query = "select * from products_categories where Prod_cat_id = '$edit_p_cat_id '";
     $run_edit = mysqli_query($con,$edit_p_cat_query);
     $row_edit = mysqli_fetch_array($run_edit);

     $p_cat_id = $row_edit['Prod_cat_id'];
     $p_cat_title = $row_edit['Prod_Cat_Title'];

     $p_cat_top = $row_edit['Prod_Cat_Top'];

     $p_cat_image = $row_edit['Prod_Cat_Image'];

    }



  ?>
<div class="row"><!-- row 1 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <ol class="breadcrumb"><!-- breadcrumb Begin-->
      <li>

           <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category

      </li>
    </ol><!-- breadcrumb Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 1 Finish-->

<div class="row"><!-- row 2 Begin-->
  <div class="col-lg-12"><!-- col-lg-12 Begin-->
    <div class="panel panel-default"><!--panel panel-default Begin-->
      <div class="panel-heading"><!--panel-heading Begin-->
        <h3 class="panel-title"><!--panel-title Begin-->

              <i class="fa fa-pencil fa-fw"></i> Edit Product Category

        </h3><!--panel-title Finish-->
      </div><!--panel-heading Finish-->

      <div class="panel-body"><!-- panel-body Begin-->
        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Begin-->
            <div class="form-group"><!-- form-group Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                  Product Category Title

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                  <input value="<?php echo $p_cat_title; ?>" name="Prod_Cat_Title" type="text" class="form-control">

                </div><!--col-md-6 Finish-->
            </div><!-- form-group Finish-->

            <div class="form-group"><!-- form-group 2 Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                 Top Product Category

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                <input name="Prod_Cat_Top" type="radio" value="yes"

                    <?php
                          if($p_cat_top=='no'){}else{echo "checked='checked'";}

                    ?>
                >
                    <label>Yes</label>

                <input name="Prod_Cat_Top" type="radio" value="no"

                    <?php
                          if($p_cat_top=='no'){echo"checked='checked'";}

                    ?>
                 >

                    <label>No</label>

                </div><!--col-md-6 Finish-->
            </div><!-- form-group 2 Finish-->

            <div class="form-group"><!-- form-group 3 Begin-->
                 <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->

                 Product Category Image

                </label><!--control-label col-md-3 Finish-->
                <div class="col-md-6"><!--col-md-6 Begin-->

                <input type="file" name="Prod_Cat_Image" class="form-control">

                <br>
                <img width="70" height="70" src="other_images/<?php echo $p_cat_image;?>" alt="<?php echo $p_cat_image;?>">

                </div><!--col-md-6 Finish-->
            </div><!-- form-group 3 Finish-->


            <div class="form-group"><!-- form-group Begin-->
                  <label for="" class="control-label col-md-3"><!--control-label col-md-3 Begin-->


                  </label><!--control-label col-md-3 Finish-->
                  <div class="col-md-6"><!--col-md-6 Begin-->

                        <input value="Update" name="update" type="submit" class="form-control btn btn-primary" >

                  </div><!--col-md-6 Finish-->
              </div><!-- form-group Finish-->

        </form><!-- form-horizontal Finish-->
     </div><!-- panel-body Finish-->

    </div><!--panel panel-default Finish-->
  </div><!-- col-lg-12 Finish-->
</div><!-- row 2 Finish-->

<?php

   if(isset($_POST['update'])){

       $p_cat_title = $_POST['Prod_Cat_Title'];
       $p_cat_top = $_POST['Prod_Cat_Top'];

      if(is_uploaded_file($_FILES['Prod_Cat_Image']['tmp_name'])){



        $p_cat_image = $_FILES['Prod_Cat_Image']['name'];

        $temp_name = $_FILES['Prod_Cat_Image']['tmp_name'];

        $update_p_cat = "update products_categories set  Prod_Cat_Title= '$p_cat_title', Prod_Cat_Top='$p_cat_top',Prod_Cat_Image='$p_cat_image' where Prod_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$update_p_cat);

        if($run_p_cat){

                echo "<script>alert('Your Product Category has been updated')</script>";
                echo "<script>window.open('index.php?view_p_cats','_self')</script>";
        }

      }else{

        $update_p_cat = "update products_categories set  Prod_Cat_Title= '$p_cat_title', Prod_Cat_Top='$p_cat_top' where Prod_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$update_p_cat);

        if($run_p_cat){

                echo "<script>alert('Your Product Category has been updated')</script>";
                echo "<script>window.open('index.php?view_p_cats','_self')</script>";
        }

      }




   }

 ?>

<?php } ?>
