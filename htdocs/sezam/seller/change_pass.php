<h1 align="center">Change Password</h1>

<form action="" method="post"><!-- form Begin -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Your Old Password: </label>

       <input type="text" name="old_pass" class="form-control" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Your New Password:</label>

       <input type="text" name="new_pass" class="form-control" required>

   </div><!-- form-group Finish -->

   <div class="form-group"><!-- form-group Begin -->

       <label> Confirm Your New Password:</label>

       <input type="text" name="new_pass_again" class="form-control" required>

   </div><!-- form-group Finish -->
     <div class="text-center"><!-- text-center Begin -->

         <button type="submit" name="submit" class="btn btn-primary"><!-- btn btn-primary Begin -->

             <i class="fa fa-user-md"></i> Update Now

         </button><!-- btn btn-primary Finish -->

     </div><!-- text-center Finish -->

</form><!-- form Finish -->

<?php

if(isset($_POST['submit'])){

    $s_email = $_SESSION['seller_email'];

    $s_old_pass = $_POST['old_pass'];

    $s_new_pass = $_POST['new_pass'];

    $s_new_pass_again = $_POST['new_pass_again'];

    $select_s_old_pass = "select * from sellers where seller_pass ='$s_old_pass'";

    $run_s_old_pass = mysqli_query($con,$select_s_old_pass);

    $check_s_old_pass = mysqli_fetch_array($run_s_old_pass);

    if($check_s_old_pass==0){

       echo "<script>alert('sorry, Your Password in invalid; Please try again')</script>";

       exit();

    }

    if($s_new_pass!=$s_new_pass_again){

        echo "<script>alert('Sorry, Your new password is not matching')</script>";

        exit();

    }

    $update_s_pass = "update sellers set seller_pass='$s_new_pass' where seller_email='$s_email'";

    $run_s_pass = mysqli_query($con,$update_s_pass);

    if($run_s_pass){

          echo "<script>alert('Your password has been updated')</script>";

          echo "<script>window.open('my_account.php?my_orders','_self')</script>";

    }

  }

 ?>
