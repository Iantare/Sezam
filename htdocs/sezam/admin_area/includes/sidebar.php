
<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>


<nav class="navbar navbar-inverse navbar-fixed-top"><!-- #navbar navbar-inverse navbar-fixed-top begin -->
     <div class="navbar-header"><!-- #navbar-header begin -->

       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse"><!-- #navbar-toggle begin -->

         <span class="sr-only">Toggle Navigation</span>

         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>

       </button><!-- #navbar-toggle Finish -->

       <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>

     </div><!-- #navbar-header Finish -->

     <ul class="nav navbar-right top-nav"><!-- #nav navbar-right top-nav begin -->

       <li class="dropdown"><!-- dropdown begin -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->

                  <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>

            </a><!-- dropdown-toggle Finish -->

            <ul class="dropdown-menu"><!-- dropdown-menu begin -->

              <li><!-- li begin -->
                  <a href="index.php?user_profile=<?php echo $admin_id;?>"><!--a href begin -->

                      <i class="fa fa-fw fa-user"></i> Profile

                  </a><!--a href Finish -->

              </li><!-- li Finish -->

              <li><!-- li begin -->
                  <a href="index.php?view_products"><!--a href begin -->

                      <i class="fa fa-fw fa-envelope"></i> Products

                      <span class="badge"><?php echo $count_products; ?></span>

                  </a><!--a href Finish -->

              </li><!-- li Finish -->


              <li><!-- li begin -->
                  <a href="index.php?view_customers"><!--a href begin -->

                      <i class="fa fa-fw fa-user"></i> Customers

                        <span class="badge"><?php echo $count_customers; ?></span>

                  </a><!--a href Finish -->

              </li><!-- li Finish -->


              <li><!-- li begin -->
                  <a href="index.php?view_cats"><!--a href begin -->

                      <i class="fa fa-fw fa-gear"></i> Product Categories

                        <span class="badge"><?php echo $count_p_categories; ?></span>

                  </a><!--a href Finish -->
              </li><!-- li Finish -->

              <li class="divider"></li>

              <li><!-- li begin -->
                  <a href="logout.php"><!--a href begin -->

                      <i class="fa fa-fw fa-power-off"></i> Log Out


                  </a><!--a href Finish -->

              </li><!-- li Finish -->


            </ul><!-- dropdown-menu Finish -->


       </li><!-- dropdown Finish -->

     </ul><!-- #nav navbar-right top-nav Finish -->

     <div class="collapse navbar-collapse navbar-exl-collapse"><!-- collapse navbar-collapse navbar-exl-collapse Begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Begin -->

          <li><!-- li Begin -->

              <a href="index.php?dashboard"><!-- href Begin -->

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

              </a><!-- href Finish -->

          </li><!-- li Finish -->

          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#products"><!-- href Begin -->

                    <i class="fa fa-fw fa-tag"></i> Products
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="products" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_product"> Insert Product </a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_products"> View Products </a>

                   </li><!-- li Finish -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->

          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#manufacturer"><!-- href Begin -->

                    <i class="fa fa-fw fa-cog"></i> Shops
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="manufacturer" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_manufacturer"> Insert Shops </a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_manufacturers"> View Shops </a>

                   </li><!-- li Finish -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->



          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- href Begin -->

                    <i class="fa fa-fw fa-edit"></i> Products Categories
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="p_cat" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_p_cat"> Insert Product Category</a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_p_cats"> View Products Categories </a>

                   </li><!-- li Begin -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->



          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#cat"><!-- href Begin -->

                    <i class="fa fa-fw fa-book"></i> Categories
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="cat" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_cat"> Insert Category</a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_cats"> View Categories </a>

                   </li><!-- li Begin -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->



          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#slides"><!-- href Begin -->

                    <i class="fa fa-fw fa-gear"></i> Slides
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="slides" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_slide"> Insert Slide </a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_slides"> View slides </a>

                   </li><!-- li Finish -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->

          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#boxes"><!-- href Begin -->

                    <i class="fa fa-fw fa-dropbox"></i> Boxes
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="boxes" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_box"> Insert Box </a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_boxes"> View Boxes </a>

                   </li><!-- li Finish -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->



          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#coupon"><!-- href Begin -->

                    <i class="fa fa-fw fa-book"></i> Coupons
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="coupon" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_coupon"> Insert Coupon </a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_coupons"> View Coupons </a>

                   </li><!-- li Finish -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->



          <li><!-- li Begin -->

              <a href="#" data-toggle="collapse" data-target="#terms"><!-- href Begin -->

                    <i class="fa fa-fw fa-table"></i> Terms
                    <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- href Finish -->

              <ul id="terms" class="collapse"><!-- collapse Begin-->

                   <li><!-- li Begin -->

                     <a href="index.php?insert_terms"> Insert terms </a>
                   </li><!-- li Finish -->
                   <li><!-- li Begin -->
                      <a href="index.php?view_terms"> View Terms </a>

                   </li><!-- li Finish -->

              </ul><!-- collapse Finish -->

          </li><!-- li Finish -->

          <li><!-- li Begin -->

               <a href="index.php?view_customers"><!-- a href Begin -->
                   <i class="fa fa-fw fa-users"></i> View Customers

               </a><!-- a href Finish -->

         </li><!-- li Finish-->

         <li><!-- li Begin -->

              <a href="index.php?view_sellers"><!-- a href Begin -->
                  <i class="fa fa-fw fa-users"></i> View Sellers

              </a><!-- a href Finish -->

        </li><!-- li Finish-->

        <li><!-- li Begin -->

             <a href="index.php?view_messages"><!-- a href Begin -->
                 <i class="fa fa-fw fa-book"></i> View Messages

             </a><!-- a href Finish -->

       </li><!-- li Finish-->


         <li><!-- li Begin -->

              <a href="index.php?view_orders"><!-- a href Begin -->
                  <i class="fa fa-fw fa-book"></i> View Orders

              </a><!-- a href Finish -->

        </li><!-- li Finish-->


        <li><!-- li Begin -->

             <a href="index.php?view_payments"><!-- a href Begin -->
                 <i class="fa fa-fw fa-money"></i> View Payments

             </a><!-- a href Finish -->

       </li><!-- li Finish-->

       <li><!-- li Begin -->

            <a href="index.php?edit_css"><!-- a href Begin -->
                <i class="fa fa-fw fa-pencil"></i> CSS Editor

            </a><!-- a href Finish -->

      </li><!-- li Finish-->


       <li><!-- li Begin -->

           <a href="#" data-toggle="collapse" data-target="#users"><!-- href Begin -->

                 <i class="fa fa-fw fa-users"></i> Users
                 <i class="fa fa-fw fa-caret-down"></i>

           </a><!-- href Finish -->

           <ul id="users" class="collapse"><!-- collapse Begin-->

                <li><!-- li Begin -->

                  <a href="index.php?insert_user"> Insert User </a>
                </li><!-- li Finish -->
                <li><!-- li Begin -->
                   <a href="index.php?view_users"> View Users </a>

                </li><!-- li Finish -->
                <li><!-- li Begin -->

                   <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit User Profile </a>

                </li><!-- li Finish -->

           </ul><!-- collapse Finish -->

       </li><!-- li Finish -->


               <li><!-- li Begin -->

                    <a href="logout.php"><!-- a href Begin -->
                        <i class="fa fa-fw fa-power-off"></i> Log Out

                    </a><!-- a href Finish -->

              </li><!-- li Finish-->


        </ul><!-- nav navbar-nav side-nav Finish -->

     </div><!-- collapse navbar-collapse navbar-exl-collapse Finish -->

</nav><!-- #navbar navbar-inverse navbar-fixed-top Finish-->


<?php } ?>
