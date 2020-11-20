<?php

$active='Account';
include("includes/header.php");
 ?>

<div id="content"><!-- content Begin -->
  <div class="container"><!-- container Begin -->
    <div class="col-md-12"><!-- col-md-12 Begin -->

      <ul class="breadcrumb"><!-- breadcrumb Begin -->
        <li>

           <a href="index.php">Home</a>

        </li>
        <li>
          Register
        </li>

      </ul><!-- breadcrumb Finish -->

    </div><!-- col-md-12 Finish -->



    <div class="col-md-12"><!-- col-md-12 Begin -->

         <div class="box"><!-- box Begin -->

           <div class="box-header"><!-- box-header Begin -->

             <center><!-- center Begin -->

                 <h2> Register A New Seller Account</h2>


             </center><!-- center Finish -->

             <form action="seller_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Full Name</label>

                 <input type="text" class="form-control" name="s_name" required>

               </div><!-- form-group Finish -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Email</label>

                 <input type="text" class="form-control" name="s_email" required>

               </div><!-- form-group Finish -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Password</label>

                 <input type="password" class="form-control" name="s_pass" required>

               </div><!-- form-group Finish -->


               <div class="form-group"><!-- form-group Begin -->

                 <label>Confirm Your Password</label>

                 <input type="password" class="form-control" name="s_pass_again" required>

               </div><!-- form-group Finish -->



               <!-- <div class="form-group"><!-- form-group Begin -->

                 <!-- <label>Your Country</label>

                 <input type="text" class="form-control" name="s_country" required>

               </div><!-- form-group Finish -->



               <!-- <div class="form-group"><!-- form-group Begin -->

                 <!-- <label>Your City</label>

                 <input type="text" class="form-control" name="s_city" required>

               </div><!-- form-group Finish -->




               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Phone#</label>

                 <input type="text" class="form-control" name="s_contact" required>

               </div><!-- form-group Finish -->


               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Physical Address</label>

                 <input type="text" class="form-control" name="s_address" required>

               </div><!-- form-group Finish -->



               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Profile Picture</label>

                 <input type="file" class="form-control form-height-custom" name="s_image">

               </div><!-- form-group Finish -->

               <div class="text-center"><!-- text-center Begin -->

                 <button type="submit" name="register" class="btn btn-primary">

                 <i class="fa fa-user-md"></i> Register

                 </button>

                 <p class="prv-cnt">
                   <input type="checkbox" checked="">
                   By registering, you confirm that you have read and agree to Sezam
                   <a href="../terms.php" style="text-decoration: underline;" ng-click="showTermsConditionFun();">Terms and Conditions.</a>

                 </p>

               </div><!-- text-center Finish -->

             </form><!-- form Finish -->

           </div><!-- box-header Finish -->

         </div><!-- box Finish -->

    </div><!-- col-md-12 Finish -->

  </div><!-- container Finish -->

</div><!-- content Finish -->

<?php

include("includes/footer.php");

 ?>

      <script src="js/jquery-331.min.js"></script>
      <script src="js/bootstrap-337.min.js"></script>

  </body>
</html>


<?php

if(isset($_POST['register'])){

  $s_name = $_POST['s_name'];

  $s_email = $_POST['s_email'];
  $s_pass = $_POST['s_pass'];
  $s_pass_again = $_POST['s_pass_again'];
  // $s_country = $_POST['s_country'];
  // $s_city = $_POST['s_city'];
  $s_contact = $_POST['s_contact'];
  $s_address = $_POST['s_address'];
  $s_image = $_FILES['s_image']['name'];
  $s_image_tmp = $_FILES['s_image']['tmp_name'];
  $s_ip = getRealIpUser();

  move_uploaded_file($s_image_tmp, "seller_images/$s_images");


  $select_seller = "select * from sellers where seller_email='$s_email'";

  $run_seller = mysqli_query($con,$select_seller);

  $check_seller = mysqli_fetch_array($run_seller);

  if ($check_seller>0) {

    echo "<script>alert('This Login Name is Already Taken , Kindly Choose Another One')</script>";
    echo"<script>window.open('seller_register.php','_self')</script>";
}

    if($s_pass!=$s_pass_again){

        echo "<script>alert('Sorry, Your password is not matching')</script>";

        exit();

  }else{


  $insert_seller = "insert into sellers
  (seller_name,seller_email,seller_pass,seller_contact,seller_address,seller_image,seller_ip) values
  ('$s_name','$s_email','$s_pass','$s_contact','$s_address','$s_image','$s_ip')";

  $run_seller = mysqli_query($con,$insert_seller);

      if($run_seller>0){

         $_SESSION['seller_email']=$s_email;


           echo "<script>alert('You were successfully Registered')</script>";
           echo"<script>window.open('seller_checkout.php','_self')</script>";

        }

    }
}

 ?>
