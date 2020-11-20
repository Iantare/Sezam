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
          Guest
        </li>

      </ul><!-- breadcrumb Finish -->

    </div><!-- col-md-12 Finish -->


    <div class="col-md-9"><!-- col-md-9 Begin -->

         <div class="box"><!-- box Begin -->

           <div class="box-header"><!-- box-header Begin -->

             <center><!-- center Begin -->

                 <h3> Your Shipping Address</h3>


             </center><!-- center Finish -->

             <form action="guest.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Full Name#</label>

                 <input type="text" class="form-control" name="c_name" required>

               </div><!-- form-group Finish -->


               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Phone#</label>

                 <input type="text" class="form-control" name="c_contact" required>

               </div><!-- form-group Finish -->


               <div class="form-group"><!-- form-group Begin -->

                 <label>Your Physical Address</label>

                 <input type="text" class="form-control" name="c_address" required>

               </div><!-- form-group Finish -->


               <div class="text-center"><!-- text-center Begin -->

                 <button type="submit" name="register" class="btn btn-primary">

                 <i class="fa fa-user-md"></i> Proceed

                 </button>

                 <p class="prv-cnt">
                   <input type="checkbox" checked="">
                   By proceeding, you confirm that you have read and agree to Sezam
                   <a href="terms.php" style="text-decoration: underline;" ng-click="showTermsConditionFun();">Terms and Conditions.</a>

                 </p>

               </div><!-- text-center Finish -->

             </form><!-- form Finish -->

           </div><!-- box-header Finish -->

         </div><!-- box Finish -->

    </div><!-- col-md-9 Finish -->

    <div class="col-md-3"><!-- col-md-3 Begin -->

      <h2 class="text-center">Products You Maybe Like</h2>


        <?php

      getProSide();

       ?>

    </div><!-- col-md-3 Finish -->

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

  $c_name = $_POST['c_name'];

  // $c_email = $_POST['c_email'];
  // $c_pass = $_POST['c_pass'];
  // $c_pass_again = $_POST['c_pass_again'];
  // $c_country = $_POST['c_country'];
  // $c_city = $_POST['c_city'];
  $c_contact = $_POST['c_contact'];
  $c_address = $_POST['c_address'];
  // $c_image = $_FILES['c_image']['name'];
  // $c_image_tmp = $_FILES['c_image']['tmp_name'];
  $c_ip = getRealIpUser();

  // move_uploaded_file($c_image_tmp, "customer/customer_images/$c_images");

  // $select_customer = "select * from customers where cust_email='$c_email'";
  //
  // $run_customer = mysqli_query($con,$select_customer);
  //
  // $check_customer = mysqli_fetch_array($run_customer);
  //
  // if ($check_customer>0) {
  //
  //   echo "<script>alert('This Login Name is Already Taken , Kindly Choose Another One')</script>";
  //   echo"<script>window.open('customer_register.php','_self')</script>";

  // }
  //
  //   if($c_pass!=$c_pass_again){
  //
  //       echo "<script>alert('Sorry, Your password is not matching')</script>";
  //
  //       exit();
  //
  // }else{


  $insert_customer = "insert into customers
  (cust_name,cust_contact,cust_address,cust_ip) values ('$c_name','$c_contact','$c_address','$c_ip')";

  $run_customer = mysqli_query($con,$insert_customer);
  $sel_cart = "select * from basket where ip_add='$c_ip'";
  $run_cart = mysqli_query($con,$sel_cart);
  $check_cart = mysqli_num_rows($run_cart);

      if($check_cart==0){
          // $_SESSION['cust_email']=$c_email;

          /// if registering client has items in basket///

           echo "<script>alert('There is no Item in Your Shopping Cart!  ')</script>";
           echo"<script>window.open('shop.php','_self')</script>";


      }else{

         echo"<script>window.open('guest_checkout.php','_self')</script>";
      //
      //   /// if registering client has no items in basket///
      //
      //   $_SESSION['cust_email']=$c_email;
      //
      //    echo "<script>alert('You were successfully Registered')</script>";
      //    echo"<script>window.open('index.php','_self')</script>";

       }

    }




 ?>
