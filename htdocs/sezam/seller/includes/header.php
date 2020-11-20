<?php

 session_start();
 include("includes/db.php");
 include("../functions/functions.php");

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1">
    <title>SEZAM</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css">
  </head>
  <body>

    <div id="top"><!-- top Begin -->
       <div class="container"> <!-- container Begin -->
         <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

       <a href="#" class="btn btn-success btn-sm">

         <?php
              if(!isset($_SESSION['seller_email'])){

                echo "Welcome: Guest";

              }else{

                echo "Welcome: " . $_SESSION['seller_email'] . "";

              }
          ?>

       </a>




         </div><!-- col-md-6 offer Finish -->

           <div class="col-md-6"><!-- col-md-6 Begin -->
             <ul class="menu"><!-- menu Begin -->
               <li>
                 <a href="seller_register.php">Register</a>
               </li>
               <li>
                 <a href="my_account.php">My Account</a>
               </li>
               <li>
                 <a href="my_account.php?my_orders">My Product</a>
               </li>

               <li>
                 <a href="seller_checkout.php">

                   <?php

                        if(!isset($_SESSION['seller_email'])){

                          echo "<a href='seller_checkout.php'> Login </a>";

                        }else {
                          echo "<a href='logout.php'> Log Out </a>";
                        }

                     ?>

                 </a>
               </li>
             </ul><!-- menu Finish -->
           </div><!-- col-md-6 Finish -->

       </div> <!-- container Finish -->
    </div> <!-- top Finish -->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default  Begin -->
  <div class="container"><!-- container  Begin -->
      <div class="navbar-header"><!-- navbar-header  Begin -->
          <a href="../index.php" class="navbar-brand home"> <!-- navbar-brand home  Begin -->
              <img src="images/e-comm-logo.JPG" alt="SEPEcw Logo" class="hidden-xs">
              <img src="images/e-comm-logo.JPG" alt="SEPEcw Logo Mobile" class="visible-xs">

          </a><!-- navbar-brand home  Finish-->
          <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
             <span class="sr-only">Toggle navigation</span>
             <i class="fa fa-align-justify"></i>

            </button>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
               <span class="sr-only">Toggle Search</span>
               <i class="fa fa-search"></i>

              </button>
      </div><!-- navbar-header  Finish -->

      <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse  beggin-->
          <div class="padding-nav"> <!-- padding-nav  Begin -->

            <ul class="nav navbar-nav left"> <!-- nav navbar-nav left  Begin -->
               <li>
                   <a href="../index.php">Home</a>
               </li>
               <li>
                  <a href="../shop.php">Shops</a>
               </li>
               <li  class="active">
                 <a href="my_account.php">My Account</a>
               </li>
               <li>
                  <a href="add_shop.php">Add Your Shop</a>
               </li>

               <li>
                 <a href="../contact.php">Contact Us</a>
               </li>
            </ul><!-- nav navbar-nav left  Finish -->
          </div><!-- padding-nav  Finish -->



               <!-- <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                    <!-- <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                        <!-- <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button><!-- btn btn-primary navbar-btn Finish -->

               <!-- </div><!-- navbar-collapse collapse right Finish --> 


            <div class="collapse clearfix" id="Search"><!-- collapse clearfix Begin --><!-- Class "collapse clearfix"to be double checked --->

                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form  Begin -->

                       <div class="input-group"><!-- input-group  Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn"><!-- input-group-btn  Begin -->

                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary  Begin -->

                              <i class="fa fa-search"></i>

                           </button><!-- btn btn-primary  Finish-->

                           </span><!-- input-group-btn   Finish -->

                       </div><!-- input-group  Finish -->

                    </form><!-- navbar-form  Finish -->

                  </div><!-- collapse clearfix  Finish --> <!-- Class "collapse clearfix"to be double checked --->

      </div><!-- navbar-collapse collapse  Finish -->

  </div><!-- container  Finish -->

</div><!-- navbar navbar-default Finish -->
