<div class="box"><!-- box Begin -->

    <div class="box-header"><!-- box-header Begin -->

      <center><!-- center Begin -->

          <h4> Login </h4>

             <p class="lead"><h5> Already Have A Seller Account..? </h5></p>

             <p class="text-muted"> Welcome, Please Login </p>

      </center><!-- center Begin -->

    </div><!-- box-header Finish-->

      <form method="post" action="seller_checkout.php"><!-- form Begin-->

            <div class="form-group"><!-- form-group Begin-->

                <label> Email </label>

                  <input name="s_email" type="text" class="form-control" required>

            </div><!-- form-group Finish-->


            <div class="form-group"><!-- form-group Begin-->

                <label> Password </label>

                  <input name="s_pass" type="password" class="form-control" required>

            </div><!-- form-group Finish-->

             <div class="text-center"><!-- text-center Begin-->

                <button name="login"class="btn btn-primary">

                     <i class="fa fa-sign-in"></i> Login

                </button>

             </div><!-- text-center Finish-->

      </form><!-- form Finish-->

      <center><!-- center Begin-->

        <p class="lead"><h5> Don't have an account? </h5></p>

          <a href="seller_register.php">

            <button name="login"class="btn btn-primary">

                 <i class="fa fa-sign-in"></i> Create Account

            </button>
          </a>

        <p class="text-muted"> Create account for FREE! </p>

      </center><!--center Finish-->


</div><!-- box Finish -->

<?php

if(isset($_POST['login'])){

     $seller_email = $_POST['s_email'];

     $seller_pass = $_POST['s_pass'];

     $select_seller = "Select * from sellers where seller_email = '$seller_email' AND seller_pass = '$seller_pass'";

     $run_seller = mysqli_query($con,$select_seller);

     $check_seller = mysqli_fetch_array($run_seller);

     if ($check_seller==0) {

         echo "<script>alert('Your mail or password is wrong')</script>";


     }else{

       $_SESSION['seller_email']=$seller_email;

       echo "<script>alert('You were successfully logged in')</script>";

       echo "<script>window.open('insert_product.php', '_self')</script>";

     }
}

 ?>
