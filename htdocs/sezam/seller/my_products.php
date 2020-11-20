<center><!--- center Begin -->

  <h1>My Orders</h1>

  <p class="lead"> Your orders on one place</p>

  <p class="text-muted">

      If You have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service works <strong>24/7</strong>

  </p>

</center><!--- center Finish -->

<hr>
<div class="table-responsive"><!--- table-responsive Begin -->

  <table class="table table-bordered table-hover"><!--- table table-bordered table-hover Begin -->

      <thead><!--- thead Begin -->

        <tr><!--- tr Begin -->

          <th>ON</th>
          <th>Product Image</th>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Product Descount</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Delete</th>

        </tr><!--- tr Finish-->

      </thead><!--- thead Finish -->

       <tbody><!--tbody Begin-->

         <?php

           $seller_session = $_SESSION['seller_email'];

           $get_seller = "select * from sellers where seller_email='$seller_session'";

           $run_seller = mysqli_query($con,$get_seller);
           $row_seller = mysqli_fetch_array($run_seller);
           $seller_contact = $row_seller['seller_contact'];
           $get_seller_product = "select * from products where seller_contact='$seller_contact'";
           $run_seller_product = mysqli_query($con,$get_seller_product);

           $i = 0;

           while($row_seller_product = mysqli_fetch_array($run_seller_product)){

             $prod_id = $row_seller_product['Prod_id'];
             $prod_img1 = $row_seller_product['Prod_img1'];
             $Prod_Title = $row_seller_product['Prod_Title'];
             $prod_price = $row_seller_product['Prod_price'];
             $prod_descount = $row_seller_product['prod_sale'];
             $order_date = $row_seller_product['date'];

        ?>

           <tr><!--- tr Begin -->

             <th> <?php echo $prod_id; ?> </th>

             <td><img src="product_images/<?php echo $prod_img1; ?>" width="60" height="60"></td>
             <td><?php echo $Prod_Title;  ?></td>
             <td>RWF<?php echo $prod_price;  ?></td>
             <td>RWF<?php echo $prod_descount ?></td>
             <td><?php echo $order_date; ?></td>
             <td>
                <a href="edit_product.php">

                    <i class="fa fa-pencil"></i> Edit

               </a>
             </td>

             <td>
                  <a href="delete_product.php=<?php echo $prod_id;?>">

                      <i class="fa fa-trash-o"></i> Delete

                  </a>
           </td>

           </tr><!--- tr Finish-->

          <?php  } ?>

        </tbody><!--tbody Finish-->

  </table><!--- ttable table-bordered table-hover Finish -->

</div><!--- table-responsive Finish -->
