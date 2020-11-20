<?php

if(!isset($_SESSION['seller_email'])){

    echo "<script>window.open('seller_checkout.php','_self')</script>";

}else{


 ?>

<!DOCTYPE html>
<html lang="en"
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1">
    <title>Insert Products</title>

  </head>
  <body>

    <div class="col-md-14"><!-- col-md-12 Begin -->

      <ul class="breadcrumb"><!-- breadcrumb Begin -->
        <li>

           <a href="../index.php">Home</a>

        </li>
        <li>
          Insert Your Products
        </li>

      </ul><!-- breadcrumb Finish -->

    </div><!-- col-md-12 Finish -->

<div class="row"><!-- row Begin --->

  <div class="col-lg-12"><!-- col-lg-12 Begin --->

       <div class="panel panel-default"><!--panel panel-default Begin --->

           <div class="panel-heading"><!--panel-heading Begin --->

             <h3 class="panel-title"><!--panel-title Begin --->

                  <i class="fa fa-money fa-fw"></i> Insert Product

             </h3><!--panel-title Finish --->

           </div><!--panel-heading Finish --->

           <div class="panel-body"><!--panel-body Begin --->

             <form method="post" class="form-horizontal" enctype="multipart/form-data"><!--form-horizontal Begin --->

                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Name </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="Prod_Title" type="text" class="form-control" required>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Url </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="Prod_url" type="text" class="form-control" required>

                      <p style="color:red;font-weight:bold;font-style:italic;font-size:10px;"> " For url plz use product name with no space " </p>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Shop </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                    <select name="manufacturer" class="form-control"><!--form-control Begin --->

                         <option selected disabled>Select Your Shop</option>

                          <?php

                          $get_manufacturer = "select * from manufacturers ORDER BY manufacturer_title";

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

                         <option selected disabled>Select a Category Product</option>

                          <?php

                          $get_p_cats = "SELECT * FROM products_categories ORDER BY Prod_Cat_Title";

                          $run_p_cats = mysqli_query($con,$get_p_cats);

                            while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                $Prod_cat_id = $row_p_cats['Prod_cat_id'];
                                $Prod_Cat_Title = $row_p_cats['Prod_Cat_Title'];

                                echo "<option value='$Prod_cat_id'> $Prod_Cat_Title </option>";

                            }

                          ?>

                    </select><!--form-control Finish --->

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Category </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                    <select name="cat" class="form-control"><!--form-control Begin --->

                         <option selected disabled>Select a Category</option>

                          <?php

                          $get_cat = "SELECT * FROM categories ORDER BY Cat_Title";

                          $run_cat = mysqli_query($con,$get_cat);

                            while ($row_cat=mysqli_fetch_array($run_cat)){
                                $Cat_id = $row_cat['Cat_id'];
                                $Cat_Title = $row_cat['Cat_Title'];

                                echo "<option value='$Cat_id'> $Cat_Title </option>";

                            }

                          ?>

                    </select><!--form-control Finish --->

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Image 1</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="product_img1" type="file" class="form-control" required>

                      <!-- <input name="product_img1" type="file" class="form-control" required>
                      <input type="submit" name="submit" value="Upload"> -->


                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Image 2</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="product_img2" type="file" class="form-control">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Image 3</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="product_img3" type="file" class="form-control form-height-custom">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Price</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="Prod_price" type="text" class="form-control" required>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->



                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Discount Price </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="prod_sale" type="text" class="form-control">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->

                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> MOQ </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="pro_moq" type="text" class="form-control">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->

                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Shipping Fees </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="shipping_price" type="text" class="form-control">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->




                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Seller Phone#</label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="seller_contact" type="text" class="form-control" required>

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
                              <a data-toggle="tab" href="#features" class="tab_link"> Shipping, Returns and Payments </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#videos" class="tab_link"> Videos </a>
                          </li>
                      </ul>

                      <div class="tab-content"><!-- tab-content Begin -->
                           <div class="tab-pane fade in active" id="descriptions"><!-- tab-pane Begin -->

                                <textarea name="Prod_desc" id="descriptions" class="form-control">


                                  <p class="attrLabels" style="color: black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Condition</strong> :</p>
                                  <!-- <td width="50.0%"></td> -->

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Bundled Items</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Storage</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Brand</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Processor</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Screen Size</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Camera Resolution</strong>  :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Model</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Operating System</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Contract</strong>  :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Year Manufactured</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Style</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Type</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Features</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Material</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>RAM</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Color</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>"S" Mark</strong> :</p>


                                </textarea>

                           </div><!-- tab-pane Finish -->

                           <div class="tab-pane fade in" id="features"><!-- tab-pane Begin -->

                                <textarea name="Prod_features" id="features" class="form-control">

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Ships From</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Ships To</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Delivery Time</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Returns</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Payments Methods</strong> :</p>

                                  <p class="attrLabels" style="color:black ;font-weight:normal;font-style:normal;font-size:12px;"><strong>Seller Contact</strong> :</p>

                                </textarea>

                           </div><!-- tab-pane Finish -->


                           <div class="tab-pane fade in" id="videos"><!-- tab-pane Begin -->

                                <textarea name="Prod_video" id="videos" class="form-control"></textarea>

                           </div><!-- tab-pane Finish -->



                      </div><!-- tab-content Finish -->



                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


               <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"> Product Label </label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                     <select name="prod_label">

                         <option selected disabled>Select Product Label</option>
                         <option value="new">New</option>
                         <option value="discount">Discount</option>

                       </select>

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


                 <div class="form-group"><!--form-group Begin --->

                   <label class="col-md-3 control-label"></label>

                   <div class="col-md-6"><!--col-md-6 Begin --->

                      <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

                   </div><!--col-md-6 Finish --->

                 </div><!--form-group Finish --->


             </form><!--form-horizontal Finish --->

           </div><!--panel-body Finish --->

       </div><!--panel panel-default Finish --->

  </div><!-- col-lg-12 Finish --->

</div><!-- row Finish  --->

          <script src="js/tinymce/tinymce.min.js"></script>
          <script>tinymce.init({ selector:'textarea'});</script>
  </body>
</html>

<?php

if(isset($_POST['submit'])){

    $Prod_Title = $_POST['Prod_Title'];
    $Prod_url = $_POST['Prod_url'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $manufacturer = $_POST['manufacturer'];
    $Prod_price = $_POST['Prod_price'];
    $Prod_MOQ = $_POST['pro_moq'];
    $shipping_price = $_POST['shipping_price'];
    $seller_contact = $_POST['seller_contact'];
    $Prod_desc = $_POST['Prod_desc'];
    $Prod_features = $_POST['Prod_features'];
    $Prod_video = $_POST['Prod_video'];
    $Prod_sold = $_POST['prod_sale'];
    $Prod_label = $_POST['prod_label'];

    $product_img1 = $_FILES['product_img1']['name'];

  // $product_img1 = $_FILES['product_img1']['name'];
  // $target_dir = "product_images/";
  // $target_file = $target_dir . basename($_FILES["product_img1"]["name"]);

  // Select file type
  // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //
  // // Valid file extensions
  // $extensions_arr = array("jpg","jpeg","png","gif");

  // // Check extension
  // if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64
    // $image_base64 = base64_encode(file_get_contents($_FILES['product_img1']['tmp_name']) );
    // $product_img1 = 'data:image/'.$imageFileType.';base64,'.$image_base64;


    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1,"product_images/$product_img1");
    // move_uploaded_file($_FILES['product_img1']['tmp_name'],$target_dir.$product_img1);
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");

    $insert_product = "insert into products (Prod_cat_id,Cat_id,manufacturer_id,date,Prod_Title,Prod_url,Prod_img1,Prod_img2,Prod_img3,Prod_price,MOQ,shipping_price,seller_contact,Prod_desc,
                      Prod_features,Prod_video,prod_label,prod_sale) values ('$product_cat','$cat','$manufacturer',NOW(),'$Prod_Title','$Prod_url','$product_img1','$product_img2',
                      '$product_img3','$Prod_price','$Prod_MOQ','$shipping_price','$seller_contact','$Prod_desc','$Prod_features','$Prod_video','$Prod_label','$Prod_sold')";

     $run_product = mysqli_query($con,$insert_product);

     if($run_product){
       echo "<script>alert('Product has been inserted successfully')</script>";
       echo "<script>window.open('my_account.php?my_orders','_self')</script>";


   }
}
 ?>

<?php } ?>
