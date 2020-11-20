<center><!-- center Begin -->

  <h1> Do You Realy want to delete Your Account ??</h1>
  <form action="" method="post"><!-- form Finish-->

    <input type="submit" name="Yes" value="Yes, I want To Delete" class="btn btn-danger">
    <input type="submit" name="No" value="No, I don't want To Delete" class="btn btn-primary">

  </form><!-- form Finish-->

</center><!-- center Finish-->

<?php

$s_email = $_SESSION['seller_email'];

if(isset($_POST['Yes'])){


$delete_seller = "delete from sellers where seller_email ='$s_email'";

$run_delete_seller = mysqli_query($con,$delete_seller);

if($run_delete_seller){

    session_destroy();

    echo "<script>alert('You have Successfully deleted your account')</script>";

    echo "<script>window.open('../index.php','_self')</script>";

       }


    }


if(isset($_POST['No'])){

     echo "<script>window.open('my_account.php?my_orders','_self')</script>";


}

 ?>
