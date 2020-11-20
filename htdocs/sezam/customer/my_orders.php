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
          <th>Due Amount</th>
          <th>Invoice No</th>
          <th>Qty</th>
          <th>Size</th>
          <th>Order Date</th>
          <th>Paid / Unpaid</th>
          <th>Status</th>

        </tr><!--- tr Finish-->

      </thead><!--- thead Finish -->

       <tbody><!--tbody Begin-->

         <?php

           $customer_session = $_SESSION['cust_email'];

           $get_customer = "select * from customers where cust_email='$customer_session'";

           $run_customer = mysqli_query($con,$get_customer);
           $row_customer = mysqli_fetch_array($run_customer);
           $customer_id = $row_customer['cust_id'];
           $get_orders = "select * from customer_orders where cust_id='$customer_id'";
           $run_orders = mysqli_query($con,$get_orders);

           $i = 0;

           while($row_orders = mysqli_fetch_array($run_orders)){

             $order_id = $row_orders['order_id'];
             $due_amount = $row_orders['due_amount'];
             $invoice_no = $row_orders['invoice_no'];
             $Qty = $row_orders['Qty'];
             $size = $row_orders['size'];
             // $order_date = substr($row_orders['order_date'],0,11);
             $order_date = $row_orders['order_date'];
             $order_status = $row_orders['order_status'];

             $i++;

             if($order_status=='Pending'){

                $order_status = 'Unpaid';

              }else{

                  $order_status = 'Paid';

              }

        ?>

           <tr><!--- tr Begin -->

             <th> <?php echo $i; ?> </th>

             <td>Rwf <?php echo $due_amount; ?></td>
              <td><?php echo $invoice_no;  ?></td>
               <td><?php echo $Qty; ?></td>
                <td><?php echo $size; ?></td>
                 <td><?php echo $order_date; ?></td>
                  <td><?php echo $order_status; ?></td>
                  <td>
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirm Paid </a>
                  </td>

           </tr><!--- tr Finish-->

          <?php  } ?>

        </tbody><!--tbody Finish-->

  </table><!--- ttable table-bordered table-hover Finish -->

</div><!--- table-responsive Finish -->
