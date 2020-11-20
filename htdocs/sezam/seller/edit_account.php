<?php
$seller_session = $_SESSION['seller_email'];
$get_seller = "select * from sellers where seller_email='$seller_session'";
$run_seller = mysqli_query($con,$get_seller);
$row_seller = mysqli_fetch_array ($run_seller);
$seller_id = $row_seller['seller_id'];
$seller_name = $row_seller['seller_name'];
$seller_email = $row_seller['seller_email'];
$seller_country = $row_seller['seller_country'];
$seller_city = $row_seller['seller_city'];
$seller_contact = $row_seller['seller_contact'];
$seller_address = $row_seller['seller_address'];
$seller_image = $row_seller['seller_image'];

 ?>

<h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form Begin -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Seller Name</label>

       <input type="text" name="s_name" class="form-control" value="<?php echo $seller_name; ?>" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Seller Email</label>

       <input type="text" name="s_email" class="form-control" value="<?php echo $seller_email; ?>" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Seller Country</label>

       <input type="text" name="s_country" class="form-control" value="<?php echo $seller_country; ?>" required>

   </div><!-- form-group Finish -->


   <div class="form-group"><!-- form-group Begin -->

       <label> Seller City</label>

       <input type="text" name="s_city" class="form-control" value="<?php echo $seller_city; ?>" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Seller Contact</label>

       <input type="text" name="s_contact" class="form-control" value="<?php echo $seller_contact; ?>" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Seller Address</label>

       <input type="text" name="s_address" class="form-control" value="<?php echo $seller_address; ?>" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Seller Image</label>

       <input type="file" name="s_image" class="form-control form-height-custom">

       <img class="img-responsive" src="seller/images/<?php echo $seller_image; ?>" alt="Customer Image">

   </div><!-- form-group Finish -->

     <div class="text-center"><!-- text-center Begin -->

         <button name="update" class="btn btn-primary"><!-- btn btn-primary Begin -->

             <i class="fa fa-user-md"></i> Update Now

         </button><!-- btn btn-primary Finish -->

     </div><!-- text-center Finish -->


</form><!-- form Finish -->


<?php

if(isset($_POST['update'])){

  $update_id = $seller_id;
  $s_name = $_POST['s_name'];
  $s_email = $_POST['s_email'];
  $s_country = $_POST['s_country'];
  $s_city = $_POST['s_city'];
  $s_address = $_POST['s_address'];
  $s_contact = $_POST['s_contact'];
  $s_image = $_FILES['s_image']['name'];
  $s_image_tmp = $_FILES ['s_image']['tmp_name'];

  move_uploaded_file ($c_image_tmp,"seller_images/$s_image");

  $update_seller = "update sellers set seller_name='$s_name', seller_email='$s_email', seller_country='$s_country', seller_city='$s_city',
                    seller_address='$s_address', seller_contact='$s_contact', seller_image='$s_image' where seller_id = '$update_id'";

  $run_seller = mysqli_query($con,$update_seller);

  if($run_seller){

      echo "<script>alert('Your account has been edited, to complete the precess, please Relogin')</script>";

      echo "<script>window.open('logout.php','_self')</script>";

  }

}

 ?>
