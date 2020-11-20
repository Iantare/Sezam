<?php

$aMan = array();
$aCat = array();
$aPcat = array();

// This is for Manufacturers Begin //

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

    foreach($_REQUEST['man'] as $sKey->$sVal){

        if((int)$sVal!=0){

              $aMan[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for Manufacturers Finish //

// This is for Categories Begin //

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

    foreach($_REQUEST['cat'] as $sKey->$sVal){

        if((int)$sVal!=0){

              $aCat[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for Categories Finish //

// This is for Product Categories Begin //

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

    foreach($_REQUEST['p_cat'] as $sKey->$sVal){

        if((int)$sVal!=0){

              $aPcat[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for Product Categories Finish //

?>

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
  <div class="panel-heading"><!-- panel-heading Begin -->
    <h3 class="panel-title">
      Shops

       <div class="pull-right"><!-- pull-right Begin -->

           <a href="JavaScript:Void(0);" style="color:black;">

               <span class="nav-toggle hide-show"><!-- nav-toggle hide-show Begin -->

                      Hide

               </span><!-- nav-toggle hide-show Finish -->

           </a>

       </div><!-- pull-right Finish -->

    </h3>

  </div><!-- panel-heading Finish -->

<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Begin -->


  <div class="panel-body"><!--panel-body 1 Begin -->

      <div class="input-group"><!--input-group Begin -->

        <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer"
        data-action="filter" placeholder="Filter Shop">

           <a class="input-group-addon"><!--input-group-addon Begin -->

             <i class="fa fa-search"></i>

           </a><!--input-group-addon Finish -->

      </div> <!--input-group Finish -->

    </div><!--panel-body 1 Finish -->

       <div class="panel-body scroll-menu"> <!--panel-body 2 Begin -->

    <ul class="nav nav-pills nav-stacked category-menu " id="dev-manufacturer"><!-- nav nav-pills nav-stacked category-menu Begin -->

      <?php

          $get_manufacturer = "select * from manufacturers where manufacturer_top = 'yes' ORDER BY manufacturer_title";
          $run_manufacturer = mysqli_query($con,$get_manufacturer);

          while($row_manufacturer=mysqli_fetch_array($run_manufacturer)) {

              $manufacturer_id = $row_manufacturer['manufacturer_id'];
              $manufacturer_title = $row_manufacturer['manufacturer_title'];
              $manufacturer_image = $row_manufacturer['manufacturer_image'];

              if($manufacturer_image == ""){


              } else{

                   $manufacturer_image = "<img src='seller/images/$manufacturer_image' width='20px'>&nbsp;

                   ";

              }

              echo "
              <li style='background:#dddddd' class='checkbox checkbox-primary'>

                  <a>

                      <label>

                        <input ";

                        if(isset($aMan[$manufacturer_id])){
                               echo "checked='checked'";

                        }

                        echo " value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>

                         <span>
                         $manufacturer_image
                         $manufacturer_title
                         </span>

                      </label>

                  </a>

              </li>

              ";

          }


          $get_manufacturer = "select * from manufacturers where manufacturer_top = 'no' ORDER BY manufacturer_title";
          $run_manufacturer = mysqli_query($con,$get_manufacturer);

          while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)) {

              $manufacturer_id = $row_manufacturer['manufacturer_id'];
              $manufacturer_title = $row_manufacturer['manufacturer_title'];
              $manufacturer_image = $row_manufacturer['manufacturer_image'];

              if($manufacturer_image == ""){


              }else{

                   $manufacturer_image = "<img src='admin_area/other_images/$manufacturer_image' width='20px'>&nbsp;

                   ";

              }

              echo "

              <li class='checkbox checkbox-primary'>

                  <a>

                      <label>

                        <input ";

                        if(isset($aMan[$manufacturer_id])){
                               echo "checked='checked'";

                        }

                        echo " value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>

                         <span>
                         $manufacturer_image
                         $manufacturer_title
                         </span>

                      </label>

                  </a>

              </li>

          ";

      }

 ?>


    </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
  </div><!-- panel-body 2 Finish -->

  </div><!-- panel-collapse collapse-data Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
  <div class="panel-heading"><!-- panel-heading Begin -->
    <h3 class="panel-title">
      Categories

       <div class="pull-right"><!-- pull-right Begin -->

           <a href="JavaScript:Void(0);" style="color:black;">

               <span class="nav-toggle hide-show"><!-- nav-toggle hide-show Begin -->

                      Hide

               </span><!-- nav-toggle hide-show Finish -->

           </a>

       </div><!-- pull-right Finish -->

    </h3>

  </div><!-- panel-heading Finish -->

<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Begin -->


  <div class="panel-body"><!--panel-body 1 Begin -->

      <div class="input-group"><!--input-group Begin -->

        <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-category"
        data-action="filter" placeholder="Filter Categories">

           <a class="input-group-addon"><!--input-group-addon Begin -->

             <i class="fa fa-search"></i>

           </a><!--input-group-addon Finish -->

      </div> <!--input-group Finish -->

    </div><!--panel-body 1 Finish -->

  <div class="panel-body scroll-menu"> <!--panel-body 2 Begin -->

     <ul class="nav nav-pills nav-stacked category-menu " id="dev-category"><!-- nav nav-pills nav-stacked category-menu Begin -->

       <?php

          $get_cat = "select * from categories where cat_top = 'yes' ORDER BY Cat_Title";
          $run_cat = mysqli_query($con,$get_cat);

          while ($row_cat=mysqli_fetch_array($run_cat)){

              $Cat_id = $row_cat['Cat_id'];
              $Cat_Title = $row_cat['Cat_Title'];
              $cat_image = $row_cat['cat_image'];

              if($cat_image == ""){


              }else{

                   $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'>&nbsp;";

              }

              echo "
              <li style='background:#dddddd' class='checkbox checkbox-primary'>

                  <a>


                      <label>

                        <input ";

                        if(isset($aCat[$Cat_id])){
                               echo "checked='checked'";
                       }

                        echo " value='$Cat_id' type='checkbox' class='get_cat' name='cat'>

                         <span>
                         $cat_image
                         $Cat_Title
                         </span>

                      </label>

                </a>

          </li>

        ";

          }


          $get_cat = "select * from categories where cat_top = 'no' ORDER BY Cat_Title";
          $run_cat = mysqli_query($con,$get_cat);

          while ($row_cat=mysqli_fetch_array($run_cat)) {

              $Cat_id = $row_cat['Cat_id'];
              $Cat_Title = $row_cat['Cat_Title'];
              $cat_image = $row_cat['cat_image'];

              if($cat_image == ""){


              } else{

                   $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'>&nbsp;

                   ";

              }

              echo "

              <li class='checkbox checkbox-primary'>

                  <a>

                      <label>

                          <input ";

                             if(isset($aCat[$Cat_id])){
                                 echo "checked='checked'";
                             }

                            echo " value='$Cat_id' type='checkbox' class='get_cat' name='cat'>

                            <span>
                              $cat_image
                              $Cat_Title
                            </span>

                      </label>

                 </a>

              </li>

              ";

          }





       ?>


    </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
  </div><!-- panel-body 2 Finish -->

  </div><!-- panel-collapse collapse-data Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
  <div class="panel-heading"><!-- panel-heading Begin -->
    <h3 class="panel-title">
      Product Categories

       <div class="pull-right"><!-- pull-right Begin -->

           <a href="JavaScript:Void(0);" style="color:black;">

               <span class="nav-toggle hide-show"><!-- nav-toggle hide-show Begin -->

                      Hide

               </span><!-- nav-toggle hide-show Finish -->

           </a>

       </div><!-- pull-right Finish -->

    </h3>

  </div><!-- panel-heading Finish -->

<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Begin -->


  <div class="panel-body"><!--panel-body 1 Begin -->

      <div class="input-group"><!--input-group Begin -->

        <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-p-category"
        data-action="filter" placeholder="Filter Product Categories">

           <a class="input-group-addon"><!--input-group-addon Begin -->

             <i class="fa fa-search"></i>

           </a><!--input-group-addon Finish -->

      </div> <!--input-group Finish -->

    </div><!--panel-body 1 Finish -->

       <div class="panel-body scroll-menu"> <!--panel-body 2 Begin -->

    <ul class="nav nav-pills nav-stacked category-menu " id="dev-p-category"><!-- nav nav-pills nav-stacked category-menu Begin -->

      <?php

          $get_p_cat = "select * from products_categories where Prod_Cat_Top = 'yes' ORDER BY Prod_Cat_Title";
          $run_p_cat = mysqli_query($con,$get_p_cat);

          while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {

              $Prod_cat_id = $row_p_cat['Prod_cat_id'];
              $Prod_Cat_Title = $row_p_cat['Prod_Cat_Title'];
              $Prod_Cat_Image = $row_p_cat['Prod_Cat_Image'];

              if($Prod_Cat_Image == ""){


              }else{

                   $Prod_Cat_Image = "<img src='admin_area/other_images/$Prod_Cat_Image' width='20px'>&nbsp;";

              }

              echo "
              <li style='background:#dddddd' class='checkbox checkbox-primary'>

                  <a>


                      <label>

                          <input ";

                        if(isset($aPcat[$Prod_cat_id])){
                         echo "checked='checked'";
                       }

                      echo " value='$Prod_cat_id' type='checkbox' class='get_p_cat' name='p_cat'>

                         <span>
                         $Prod_Cat_Image
                         $Prod_Cat_Title
                         </span>

                    </label>

                  </a>

              </li>

              ";

          }

          $get_p_cat = "select * from products_categories where Prod_Cat_Top = 'no' ORDER BY Prod_Cat_Title";
          $run_p_cat = mysqli_query($con,$get_p_cat);

          while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {

              $Prod_cat_id = $row_p_cat['Prod_cat_id'];
              $Prod_Cat_Title = $row_p_cat['Prod_Cat_Title'];
              $Prod_Cat_Image = $row_p_cat['Prod_Cat_Image'];

              if($Prod_Cat_Image == ""){


              }else{

                   $Prod_Cat_Image = "<img src='admin_area/other_images/$Prod_Cat_Image' width='20px'>&nbsp;";

              }

              echo "

              <li class='checkbox checkbox-primary'>

                  <a>

                      <label>

                          <input ";

                          if(isset($aPcat[$Prod_cat_id])){
                          echo "checked='checked'";

                          }

                          echo " value='$Prod_cat_id' type='checkbox' class='get_p_cat' name='p_cat'>

                          <span>
                          $Prod_Cat_Image
                          $Prod_Cat_Title
                          </span>

                     </label>

                  </a>



              </li>

              ";

          }

       ?>

    </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
  </div><!-- panel-body 2 Finish -->

  </div><!-- panel-collapse collapse-data Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->
