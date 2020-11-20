<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->

  <div class="panel-heading"><!--panel-heading Begin -->

    <?php

         $seller_session = $_SESSION['seller_email'];

         $get_seller = " select * from sellers where seller_email = '$seller_session'";

         $run_seller = mysqli_query($con, $get_seller);

         $row_seller = mysqli_fetch_array($run_seller);

         $seller_image = $row_seller['seller_image'];

          $seller_name = $row_seller['seller_name'];

          if(!isset($_SESSION['seller_email'])){

          }else{

            echo "
                 <center>

                    <img src='../images/$seller_image' class='img-responsive'>

                 </center>

                 <br/>

                 <h3 class='panel-title' align='center'>

                     Name: $seller_name

                     </h3>


            ";


          }


     ?>

  </div><!--panel-heading Finish -->

  <div class="panel-body"><!--panel-body Begin -->

    <ul class="nav-pills nav-stacked nav"><!--nav-pills nav-stacked nav Begin -->

      <li class="<?php if(isset($_GET['my_orders'])){ echo"active";} ?>">

        <a href="my_account.php?my_orders">

          <i class="fa fa-list"></i> My Products

        </a>

      </li>


      <li class="<?php if(isset($_GET['add_product'])){ echo"active";} ?>">

        <a href="insert_product.php">

          <i class="fa fa-bolt"></i> Add New Products

        </a>

      </li>

      <li class="<?php if(isset($_GET['edit_account'])){ echo"active";} ?>">

        <a href="my_account.php?edit_account">

          <i class="fa fa-pencil"></i> Edit Account

        </a>

      </li>


      <li class="<?php if(isset($_GET['change_pass'])){ echo"active";} ?>">

        <a href="my_account.php?change_pass">

          <i class="fa fa-user"></i> Change Password

        </a>

      </li>

      <li class="<?php if(isset($_GET['delete_account'])){ echo"active";} ?>">

        <a href="my_account.php?delete_account">

          <i class="fa fa-trash-o"></i> Delete Account

        </a>

      </li>


      <li>

        <a href="logout.php">

          <i class="fa fa-sign-out"></i> Log Out

        </a>

      </li>


    </ul><!--nav-pills nav-stacked nav Finish -->

  </div><!--panel-body Finish -->

</div><!--panel panel-default sidebar-menu Finish -->
