<?php

$db = mysqli_connect("localhost","root","","sezam");

/// Begin getRealIpUser functions ///

function getRealIpUser(){

    switch(true){

           case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
           case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
           case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

           default : return $_SERVER['REMOTE_ADDR'];

    }

}

/// Finish getRealIpUser functions ///


/// Begin getPro functions ///

function getPro(){

  global $db;
  $get_products = " select * from products order by rand() LIMIT 0,12";
  $run_products = mysqli_query($db,$get_products);

  while($row_products=mysqli_fetch_array($run_products)){

    $pro_id = $row_products['Prod_id'];
    $pro_title = $row_products ['Prod_Title'];
    $pro_url = $row_products ['Prod_url'];
    $pro_price = $row_products ['Prod_price'];
    $pro_sale_price = $row_products ['prod_sale'];
    $pro_MOQ = $row_products ['MOQ'];
    $pro_img1 = $row_products ['Prod_img1'];
    $pro_label = $row_products ['prod_label'];
    $manufacturer_id = $row_products ['manufacturer_id'];

    $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";
    $run_manufacturer = mysqli_query($db,$get_manufacturer);
    $row_manufacturer = mysqli_fetch_array($run_manufacturer);
    $manufacturer_title = $row_manufacturer['manufacturer_title'];

    if($pro_label == "discount"){

       $product_price = " <del> RWF $pro_price </del> "  ;
       $product_sale_price = "/ <strong> RWF $pro_sale_price </strong> ";

    }else{

      $product_price = " <strong>RWF $pro_price</strong> ";
      $product_sale_price = "";

    }

    if($pro_label == ""){

    $product_label = $pro_label;

    }else{

      $product_label = "

           <a href='#' class='label $pro_label'>

           <div class='theLabel'> $pro_label </div>
           <div class='labelBackground'> </div>

           </a>
      ";

    }

    echo "
     <div class='col-md-3 col-sm-6 center-responsive'>
       <div class='product'>

       <a href='$pro_url'>

            <img class='img-responsive' src='seller/product_images/$pro_img1'>
            </a>

            <div class= 'text'>

            <center>

                <p class='btn btn-primary'> $manufacturer_title </p>

            </center>

            <center>
                <h5>
                     <a href='$pro_url'>

                     $pro_title

                     </a>
                </h5>



                <ul class='price'>

                $product_price &nbsp;$product_sale_price

                </ul>

            </center>

                <p class='button'>

                <a class= 'btn btn-default'  href='shop.php'>

                     Find More
                </a>


                </p>

            </div>

            $product_label

       </div>

     </div>
    ";
  }
}

/// Finish getPro functions ///


/// Begin getProSide functions ///

function getProSide(){

  global $db;
  $get_products = " select * from products order by rand() LIMIT 0,2";
  $run_products = mysqli_query($db,$get_products);

  while($row_products=mysqli_fetch_array($run_products)){

    $pro_id = $row_products['Prod_id'];
    $pro_title = $row_products ['Prod_Title'];
    $pro_url = $row_products ['Prod_url'];
    $pro_price = $row_products ['Prod_price'];
    $pro_sale_price = $row_products ['prod_sale'];
    $pro_MOQ = $row_products ['MOQ'];
    $pro_img1 = $row_products ['Prod_img1'];
    $pro_label = $row_products ['prod_label'];
    $manufacturer_id = $row_products ['manufacturer_id'];

    $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";
    $run_manufacturer = mysqli_query($db,$get_manufacturer);
    $row_manufacturer = mysqli_fetch_array($run_manufacturer);
    $manufacturer_title = $row_manufacturer['manufacturer_title'];

    if($pro_label == "discount"){

      $product_price = " <del> RWF $pro_price </del> ";
      $product_sale_price = "/ <strong>RWF $pro_sale_price</strong> ";


    }else{

      $product_price = "<strong>RWF $pro_price</strong> ";
      $product_sale_price = "";

    }

    if($pro_label == ""){

    $product_label = $pro_label;

    }else{

      $product_label = "

           <a href='#' class='label $pro_label'>

           <div class='theLabel'> $pro_label </div>
           <div class='labelBackground'> </div>

           </a>
      ";

    }

    echo "
     <div class='col-md-1 col-sm-2 single'>
       <div class='product'>
       <a href='$pro_url'>

            <img class='img-responsive' src='seller/product_images/$pro_img1'>
            </a>

            <div class= 'text'>

            <center>

                <ul class='btn btn-primary'> $manufacturer_title </ul>


              <h5>
                     <a href='$pro_url'>
                     $pro_title

                     </a>
                </h5>


                <p class='price'>

                <ul>

                 $product_price &nbsp;$product_sale_price

                 </ul>

             </center>

                </p>

                <p class='button'>

                <a class= 'btn btn-default'  href='shop.php'>

                     Find More
                </a>


                </p>

            </div>

              $product_label

       </div>

     </div>
    ";
  }
}

/// Finish getProSide functions ///

/// Begin getPCats functions ///

 function getPCats(){

   global $db;
   $get_products_categories = " select * from products_categories";
   $run_products_categories = mysqli_query($db,$get_products_categories);

    while ( $row_products_categories=mysqli_fetch_array($run_products_categories)){

       $Prod_cat_id = $row_products_categories['Prod_cat_id'];
       $Prod_Cat_Title = $row_products_categories['Prod_Cat_Title'];

       echo "
             <li>

             <a href='shop.php?products_categories= $Prod_cat_id'> $Prod_Cat_Title </a>

             </li>

       ";

    }
   }



/// Finish getPCats functions ///

/// Begin getCats functions ///

 function getCats(){

   global $db;
   $get_categories = " select * from categories";
   $run_categories = mysqli_query($db,$get_categories);

    while ( $row_categories=mysqli_fetch_array($run_categories)){

       $Cat_id = $row_categories['Cat_id'];
       $Cat_Title = $row_categories['Cat_Title'];

       echo "
             <li>

             <a href='shop.php?categories= $Cat_id'> $Cat_Title </a>

             </li>

       ";

    }
   }



/// Finish getCats functions ///

/// Begin getRealIpUser functions ///

function items(){

global $db;

$ip_add = getRealIpUser();

$get_items =" select * from basket where ip_add='$ip_add'";

$run_items = mysqli_query($db,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}


/// Finish getRealIpUser functions ///

/// Begin total_price functions ///

function total_price(){

    global $db;

    $ip_add = getRealIpUser();

    $total = 0;

    $select_basket = "select * from basket where ip_add='$ip_add'";

    $run_basket = mysqli_query($db,$select_basket);

    while($record=mysqli_fetch_array($run_basket)){

        $pro_id = $record['P_id'];
        $pro_qty = $record['Prod_Qty'];
        $sub_total = $record['P_price']*$pro_qty;
        $tax = $sub_total*0 ;

        $total += $sub_total+$tax;

    }


    echo "RWF"  . $total;

}

/// Finish total_price functions ///

/// Begin getProducts functions ///

function getProducts(){

      global $db;
      $aWhere = array();

      /// Begin for Manufacturer ///

       if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

           foreach($_REQUEST['man'] as $sKey=>$sVal){

               if((int)$sVal!=0){

                   $aWhere[] = 'manufacturer_id='.(int)$sVal;

               }

           }

       }


      /// Finish for Manufacturer ///

     /// Begin for Product Categories ///

     if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

         foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

             if((int)$sVal!=0){

                 $aWhere[] = 'Prod_cat_id='.(int)$sVal;

             }

         }

     }


     /// Finish for Product Categories ///

     /// Begin for Categories ///

     if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

         foreach($_REQUEST['cat'] as $sKey=>$sVal){

             if((int)$sVal!=0){

                 $aWhere[] = 'Cat_id='.(int)$sVal;

             }

         }

     }


     /// Finish for Categories ///

     $per_page=12;

     if(isset($_GET['page'])){

        $page = $_GET['page'];

     }else{
        $page=1;
     }

     $start_from = ($page-1) * $per_page;
     $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
     $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
     $get_products = "select * from products ".$sWhere;
     $run_products = mysqli_query($db,$get_products);

     while($row_products=mysqli_fetch_array($run_products)){

       $pro_id = $row_products['Prod_id'];
       $pro_title = $row_products ['Prod_Title'];
       $pro_price = $row_products ['Prod_price'];
       $pro_sale_price = $row_products ['prod_sale'];
       $pro_MOQ = $row_products ['MOQ'];
       $pro_url = $row_products ['Prod_url'];
       $pro_img1 = $row_products ['Prod_img1'];
       $pro_label = $row_products ['prod_label'];
       $manufacturer_id = $row_products ['manufacturer_id'];

       $get_manufacturer = "select * from manufacturers where manufacturer_id = '$manufacturer_id'";
       $run_manufacturer = mysqli_query($db,$get_manufacturer);
       $row_manufacturer = mysqli_fetch_array($run_manufacturer);
       $manufacturer_title = $row_manufacturer['manufacturer_title'];

       if($pro_label == "discount"){

          $product_price = " <del> RWF $pro_price </del> ";
          $product_sale_price = "/ <strong>RWF $pro_sale_price</strong> ";

       }else{

         $product_price = " <strong>RWF $pro_price</strong> ";
         $product_sale_price = "";

       }

       if($pro_label == ""){

        $product_label = $pro_label;

       }else{

         $product_label = "

              <a href='#' class='label $pro_label'>

              <div class='theLabel'> $pro_label </div>
              <div class='labelBackground'> </div>

              </a>
         ";

       }

       echo "
        <div class='col-md-4 col-sm-6 centre-responsive'>
          <div class='product'>
          <a href='$pro_url'>

               <img class='img-responsive' src='seller/product_images/$pro_img1'>
               </a>

               <div class= 'text'>

               <center>

                   <p class='btn btn-primary'> $manufacturer_title </p>



                   <h4>
                        <a href='$pro_url'>

                        $pro_title

                        </a>
                   </h4>

                   <ul class='price'>

                   $product_price &nbsp;$product_sale_price

                   </ul>

                   <ul class='MOQ'>

                   MOQ: $pro_MOQ

                   </ul>

                   </center>

                   <p class='button'>

                   <a class= 'btn btn-default'  href='$pro_url'>

                        view Details
                   </a>

                   </p>

               </div>

               $product_label

          </div>

        </div>
       ";
     }

}

/// Finish getProducts functions ///

/// Begin getPaginator() functions ///

function getPaginator(){

    global $db;

    $per_page=9;
    $aWhere = array();
    $aPath = '';

    /// Begin for Manufacturer ///

     if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

         foreach($_REQUEST['man'] as $sKey=>$sVal){

             if((int)$sVal!=0){

                 $aWhere[] = 'manufacturer_id='.(int)$sVal;
                 $aPath .= 'man[]='.(int)$sVal.'&';

             }

         }

     }


    /// Finish for Manufacturer ///

    /// Begin for Product Categories ///

    if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

       foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

           if((int)$sVal!=0){

               $aWhere[] = 'Prod_cat_id='.(int)$sVal;
               $aPath .= 'p_cat[]='.(int)$sVal.'&';


           }

       }

    }


    /// Finish for Product Categories ///

    /// Begin for Categories ///

    if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

       foreach($_REQUEST['cat'] as $sKey=>$sVal){

           if((int)$sVal!=0){

               $aWhere[] = 'Cat_id='.(int)$sVal;
               $aPath .= 'cat[]='.(int)$sVal.'&';

           }

       }

    }


    /// Finish for Categories ///

    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');
    $query = "select * from products ".$sWhere;
    $result = mysqli_query($db,$query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);

    echo "<li> <a href='shop.php?page=1";

    if(!empty($aPath)){

      echo "&".$aPath;

    }

    echo "'>".'First Page'."</a></li>";

    for($i=1; $i<=$total_pages; $i++){

        echo "<li> <a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."'>".$i."</a></li>";

    };

    echo "<li> <a href='shop.php?page=$total_pages";

    if(!empty($aPath)){

         echo "&".$aPath;

    }

    echo "'>".'Last Page'."</a></li>";

}



/// Finish getPaginator() functions ///


 ?>
