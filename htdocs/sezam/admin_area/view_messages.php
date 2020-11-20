<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}else{

 ?>

 <div class="row"><!-- row Begin -->
   <div class="col-lg-12"><!-- col-lg-12 Begin -->
     <ol class="breadcrumb"><!-- breadcrumb Begin -->
       <li class="active"><!-- active Begin -->

           <i class="fa fa-dashboard"></i> Dashboard / View Messages

       </li><!-- active Finish -->
     </ol><!-- breadcrumb Finish -->
   </div><!-- col-lg-12 Finish -->
 </div><!-- row Finish -->

<div class="row"><!-- row Begin -->
  <div class="col-lg-12"><!-- col-lg-12 Begin -->
    <div class="panel panel-default"><!-- panel panel-default Begin-->
      <div class="panel-heading"><!-- panel-heading Begin-->
        <h3 class="panel-title"><!-- panel-title Begin-->

           <i class="fa fa-tags"></i> View Messages

        </h3><!-- panel-title Finish-->
      </div><!-- panel-heading Finish-->

       <div class="panel-body"><!-- panel-body Begin-->
         <div class="table-responsive"><!-- table-responsive Begin-->
           <table class="table table-stripe table-bordered table-hover"><!-- table table-stripe table-bordered table-hover Begin-->

                <thead><!-- thead Begin-->
                    <tr><!-- tr Begin-->
                        <th> N0: </th>
                        <th> Sender's Name: </th>
                        <th> Sender's Email: </th>
                        <th> Subject: </th>
                        <th> Message: </th>
                    </tr><!-- tr Finish-->
                </thead><!-- thead Finish-->

               <tbody><!-- tbody Begin-->

                  <?php

                       $i=0;
                       $get_messages = "select * from messages ";
                       $run_messages = mysqli_query($con,$get_messages);
                       while($row_messages=mysqli_fetch_array($run_messages)){

                            $mes_id = $row_messages['mes_id'];
                            $client_name = $row_messages['client_name'];
                            $client_mail = $row_messages['client_mail'];
                            $mes_subject = $row_messages['mes_subject'];
                            $message = $row_messages['message'];

                            $i++;

                   ?>
                  <tr><!-- tr Begin-->
                      <td> <?php echo $i; ?> </td>
                      <td> <?php echo $client_name; ?> </td>
                      <td>  <?php echo $client_mail; ?> </td>
                      <td> <?php echo $mes_subject; ?> </td>
                      <td> <?php echo $message; ?> </td>

                  </tr><!-- tr Finish-->

                <?php } ?>

               </tbody><!-- tbody Finish-->

           </table><!-- table table-stripe table-bordered table-hover Finish-->
         </div><!-- table-responsive Finish-->
      </div><!-- panel-body Finish-->

    </div><!-- panel panel-default Finish -->
  </div><!-- col-lg-12 Finish -->
</div><!-- row Finish -->


<?php } ?>
