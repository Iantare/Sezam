<div class="box"><!-- box Begin -->

    <div class="box-header"><!-- box-header Begin -->

      <center><!-- center Begin -->

          <h4> Login </h4>

             <p class="lead"><h5> Already Have A Customer Account..? </5></p>

             <p class="text-muted"> Welcome, Please Login </p>

      </center><!-- center Begin -->

    </div><!-- box-header Finish-->

      <form method="post" action="checkout.php"><!-- form Begin-->

            <div class="form-group"><!-- form-group Begin-->

                <label> Email </label>

                  <input name="c_email" type="text" class="form-control" required>

            </div><!-- form-group Finish-->


            <div class="form-group"><!-- form-group Begin-->

                <label> Password </label>

                  <input name="c_pass" type="password" class="form-control" required>

            </div><!-- form-group Finish-->

             <div class="text-center"><!-- text-center Begin-->

                <button name="login"class="btn btn-primary">

                     <i class="fa fa-sign-in"></i> Login

                </button>

             </div><!-- text-center Finish-->

      </form><!-- form Finish-->

      <center><!-- center Begin-->

        <p class="lead"><h5> Don't have an account? </h5></p>

          <a href="customer_register.php">

            <button name="login"class="btn btn-primary">

                 <i class="fa fa-sign-in"></i> Create Account

            </button>
          </a>

        <!-- <p class="text-muted"> Create account for FREE! </p> -->

        <a href="guest.php">

          <button name="login"class="btn btn-primary">

               <i class="fa fa-sign-in"></i> Buy as Guest

          </button>
        </a>


      </center><!--center Finish-->


</div><!-- box Finish -->

<?php

if(isset($_POST['login'])){

     $cust_email = $_POST['c_email'];

     $cust_pass = $_POST['c_pass'];

     $select_customer = "Select * from customers where cust_email = '$cust_email' AND cust_pass = '$cust_pass'";

     $run_customer = mysqli_query($con,$select_customer);

     $get_ip = getRealIpUser();

     $check_customer = mysqli_num_rows($run_customer);

     $select_cart = "select * from basket where ip_add = '$get_ip'";

     $run_cart = mysqli_query($con,$select_cart);

     $check_cart = mysqli_num_rows($run_cart);

     if ($check_customer==0) {

         echo "<script>alert('Your mail or password is wrong')</script>";

         exit();
     }

     if($check_customer==1 AND $check_cart==0){

        $_SESSION['cust_email']=$cust_email;

        echo "<script>alert('You were successfully logged in')</script>";

        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

     }else {

       $_SESSION['cust_email']=$cust_email;

       echo "<script>alert('You were successfully logged in')</script>";

       echo "<script>window.open('checkout.php','_self')</script>";

     }
}

 ?>
