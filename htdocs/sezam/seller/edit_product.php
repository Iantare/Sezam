<?php

if(!isset($_SESSION['seller_email'])){

    echo "<script>window.open('edit_products.php','_self')</script>";

}else{


 ?>

 <?php

   if(isset($_GET['edit_product'])){

     $edit_id = $_GET['edit_product'];
     $get_p = "select * from products where Prod_id='$edit_id'";
     $run_edit = mysqli_query($con,$get_p);
     $row_edit = mysqli_fetch_array($run_edit);
     $p_id = $row_edit['Prod_id'];
     $p_title = $row_edit['Prod_Title'];
     $p_url = $row_edit['Prod_url'];
     $p_cat_id = $row_edit['Prod_cat_id'];
     $cat_id = $row_edit['Cat_id'];
     $manufacturer_id = $row_edit['manufacturer_id'];
     $p_img1 = $row_edit['Prod_img1'];
     $p_img2 = $row_edit['Prod_img2'];
     $p_img3 = $row_edit['Prod_img3'];
     $p_price = $row_edit['Prod_price'];
     $Prod_sold = $row_edit['prod_sale'];
     $seller_contact = $row_edit['seller_contact'];
     $p_desc = $row_edit['Prod_desc'];
     $p_features = $row_edit['Prod_features'];
     $p_video = $row_edit['Prod_video'];
     $Prod_label = $row_edit['prod_label'];

   }
   $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
   $run_manufacturer = mysqli_query($con,$get_manufacturer);
   $row_manufacturer = mysqli_fetch_array($run_manufacturer);
   $manufacturer_id = $row_manufacturer['manufacturer_id'];
   $manufacturer_title = $row_manufacturer['manufacturer_title'];

   $get_p_cat = "select * from products_categories where Prod_cat_id='$p_cat_id'";
   $run_p_cat = mysqli_query($con,$get_p_cat);
   $row_p_cat = mysqli_fetch_array($run_p_cat);
   $p_cat_title = $row_p_cat['Prod_Cat_Title'];

   $get_cat = "select * from categories where Cat_id='$cat_id'";
   $run_cat = mysqli_query($con,$get_cat);
   $row_cat = mysqli_fetch_array($run_cat);
   $cat_title = $row_cat['Cat_Title'];


  ?>

<!DOCTYPE html>
<html lang="en"
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1">
    <title>Edit Products</title>

  </head>
  <body>

<div class="row"><!-- row Begin --->

    <div class="col-lg-12"><!-- col-lg-12 Begin --->

      <ol class="breadcrumb"><!-- breadcrumb Begin --->

         <li class="active"><!-- active Begin --->

              <i class="fa fa-dashboard"></i> Dashboard / Edit Products

         </li><!-- active Finish --->

      </ol><!-- breadcrumb Finish --->

    </div><!-- col-lg-12 Finish --->

</div><!-- row Finish --->

<div class="row"><!-- row Begin --->

  <div class="col-lg-12"><!-- col-lg-12 Begin --->

       <div class="panel panel-default"><!--panel panel-default Begin --->

           <div class="panel-heading"><!--panel-heading Begin --->

             <h3 class="panel-title"><!--panel-title Begin --->

                  <i class="fa fa-money fa-fw"></i> Edit Product

             </h3><!--panel-title Finish --->

           </div><!--panel-heading Finish --->

           <div class="panel-body"><!--panel-body Begin --->

             <form method="post" class="form-horizontal" enctype="multipart/form-data"><!--form-horizontal Begin --->

                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Title </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="Prod_Title" type="text" class="form-control" required value="<?php echo $p_title; ?>">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Url </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="Prod_url" type="text" class="form-control" required value="<?php echo $p_url; ?>">

                      <br>

                      <p style="font-weight:bold;font-style:italic;font-size:10px;"> Use Dash '-' for url </p>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->





                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Shop </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                    <select name="manufacturer" class="form-control"><!--form-control Begin --->

                        <option disabled value="Select Manufacturer">Select Your Shop</option>

                         <option selected value="<?php echo $manufacturer_id; ?>"> <?php echo $manufacturer_title; ?> </option>

                          <?php

                          $get_manufacturer = "select * from manufacturers";

                          $run_manufacturer = mysqli_query($con,$get_manufacturer);

                            while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)){
                                $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                $manufacturer_title = $row_manufacturer['manufacturer_title'];

                                echo "<option value='$manufacturer_id'> $manufacturer_title </option>";

                            }

                          ?>

                    </select><!--form-control Finish --->

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->

                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Category </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                    <select name="product_cat" class="form-control"><!--form-control Begin --->

                      <option disabled value="Select Product Category">Select Product Category</option>

                         <option value="<?php echo  $p_title; ?>"> <?php echo $p_cat_title; ?> </option>

                          <?php

                          $get_p_cats = "SELECT * FROM products_categories";

                          $run_p_cats = mysqli_query($con,$get_p_cats);

                            while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                $p_cat_id = $row_p_cats['Prod_cat_id'];
                                $p_cat_title = $row_p_cats['Prod_Cat_Title'];

                                echo "<option value='$p_cat_id'> $p_cat_title </option>";

                            }

                          ?>

                    </select><!--form-control Finish --->

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Category </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                    <select name="cat" class="form-control"><!--form-control Begin --->

                      <option disabled value="Select Category">Select Category</option>

                         <option value="<?php echo $cat_id ?>"><?php echo $cat_title ?></option>


                          <?php

                          $get_cat = "SELECT * FROM categories";

                          $run_cat = mysqli_query($con,$get_cat);

                            while ($row_cat=mysqli_fetch_array($run_cat)){

                                $cat_id = $row_cat['Cat_id'];
                                $cat_title = $row_cat['Cat_Title'];

                                echo "<option value='$cat_id'> $cat_title </option>";

                            }

                          ?>

                    </select><!--form-control Finish --->

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Image 1</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="product_img1" type="file" class="form-control">

                      <br>
                      <img width="70" height="70"src="product_images/<?php echo $p_img1; ?>" alt="<?php echo $p_img1; ?>">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Image 2</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="product_img2" type="file" class="form-control">

                      <br>
                      <img width="70" height="70"src="product_images/<?php echo $p_img2; ?>" alt="<?php echo $p_img2; ?>">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Image 3</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="product_img3" type="file" class="form-control form-height-custom">

                      <br>
                      <img width="70" height="70"src="product_images/<?php echo $p_img3; ?>" alt="<?php echo $p_img3; ?>">


                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Price </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="Prod_price" type="text" class="form-control" required value="<?php echo $p_price; ?>">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Discount Price </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="prod_sale" type="text" class="form-control"  value="<?php echo $Prod_sold; ?>">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->




                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Seller Contact </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="seller_contact" type="text" class="form-control" required value="<?php echo $seller_contact; ?>">

                      <br>
                      <p style="color:red;font-weight:bold;font-style:italic;font-size:10px;"> "Please insert same Phone# used while registering" </p>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Descriptions</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <ul class="nav nav-tabs">
                          <li class="active">
                              <a data-toggle="tab" href="#descriptions" class="tab_link"> Descriptions </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#features" class="tab_link"> Features </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#videos" class="tab_link"> Videos </a>
                          </li>
                      </ul>

                      <div class="tab-content"><!-- tab-content Begin -->
                           <div class="tab-pane fade in active" id="descriptions"><!-- tab-pane Begin -->

                                <textarea  name="Prod_desc" id="desc_editor" class="form-control">

                                     <?php echo $p_desc; ?>

                                </textarea>

                           </div><!-- tab-pane Finish -->

                           <div class="tab-pane fade in" id="features"><!-- tab-pane Begin -->

                                <textarea  name="Prod_features" id="features_editor" class="form-control">

                                     <?php echo $p_features; ?>

                                </textarea>

                           </div><!-- tab-pane Finish -->


                           <div class="tab-pane fade in" id="videos"><!-- tab-pane Begin -->

                                <textarea rows="9" name="Prod_video" id="videos" class="form-control">

                                     <?php echo $p_video; ?>

                                </textarea>

                           </div><!-- tab-pane Finish -->



                      </div><!-- tab-content Finish -->



                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Label </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                     <select name="prod_label">
                         <option value="new">New Product</option>
                         <option value="discount">Product Discount</option>

                       </select>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"></label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


             </form><!--form-horizontal Finish --->

           </div><!--panel-body Finish --->

       </div><!--panel panel-default Finish --->

  </div><!-- col-lg-12 Finish --->

</div><!-- row Finish  --->

          <script src="js/tinymce/tinymce.min.js"></script>
          <script>tinymce.init({ selector:'#desc_editor, #features_editor'});</script>
  </body>
</html>

<?php

if(isset($_POST['update'])){

    $p_title = $_POST['Prod_Title'];
    $p_url = $_POST['Prod_url'];
    $p_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $manufacturer_id = $_POST['manufacturer'];
    $p_price = $_POST['Prod_price'];
    $Prod_sold = $_POST['prod_sale'];
    $seller_contact = $_POST['seller_contact'];
    $p_desc = $_POST['Prod_desc'];
    $p_features = $_POST['Prod_features'];
    $p_video = $_POST['Prod_video'];
    $Prod_label = $_POST['prod_label'];

    if(is_uploaded_file($_FILES['file']['tmp_name'])){


      $p_img1 = $_FILES['product_img1']['name'];
      $p_img2 = $_FILES['product_img2']['name'];
      $p_img3 = $_FILES['product_img3']['name'];

      $temp_name1 = $_FILES['product_img1']['tmp_name'];
      $temp_name2 = $_FILES['product_img2']['tmp_name'];
      $temp_name3 = $_FILES['product_img3']['tmp_name'];

      move_uploaded_file($temp_name1,"product_images/$p_img1");
      move_uploaded_file($temp_name2,"product_images/$p_img2");
      move_uploaded_file($temp_name3,"product_images/$p_img3");

      $update_product = "update products set
      Prod_cat_id='$p_cat', Cat_id='$cat',manufacturer_id='$manufacturer_id', date=NOW(), Prod_Title='$p_title',Prod_url='$p_url', Prod_img1='$p_img1', Prod_img2='$p_img2',
      Prod_img3='$p_img3', Prod_price='$p_price', seller_contact='$seller_contact',Prod_desc='$p_desc',Prod_features='$p_features',Prod_video='$p_video',prod_label='$Prod_label',prod_sale='$Prod_sold' where Prod_id='$p_id'";

      $run_product = mysqli_query($con,$update_product);
      if($run_product){
                   echo "<script>alert('Your Product has been updated Successfully')</script>";

                   echo "<script>window.open('index.php?view_products','_self')</script>";

      }

    }else {

      $update_product = "update products set
      Prod_cat_id='$p_cat', Cat_id='$cat',manufacturer_id='$manufacturer_id', date=NOW(), Prod_Title='$p_title',Prod_url='$p_url',
      Prod_price='$p_price', seller_contact='$seller_contact',Prod_desc='$p_desc',Prod_features='$p_features',Prod_video='$p_video',prod_label='$Prod_label',prod_sale='$Prod_sold' where Prod_id='$p_id'";

      $run_product = mysqli_query($con,$update_product);
      if($run_product){
                   echo "<script>alert('Your Product has been updated Successfully')</script>";

                   echo "<script>window.open('my_account.php?my_orders','_self')</script>";

      }

    }
}
 ?>

<?php } ?>
