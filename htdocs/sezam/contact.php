<?php

$active='Contact';
include("includes/header.php");
 ?>

<div id="content"><!-- content Begin -->
  <div class="container"><!-- container Begin -->
    <div class="col-md-12"><!-- col-md-12 Begin -->

      <ul class="breadcrumb"><!-- breadcrumb Begin -->
        <li>

           <a href="index.php">Home</a>

        </li>
        <li>
          Contact Us
        </li>

      </ul><!-- breadcrumb Finish -->

    </div><!-- col-md-12 Finish -->


    <div class="col-md-9"><!-- col-md-9 Begin -->

         <div class="box"><!-- box Begin -->

           <div class="box-header"><!-- box-header Begin -->

             <center><!-- center Begin -->

                 <h2> Feel Free to Contact Us</h2>

                 <p class="text-muted"><!-- text-muted Begin -->

                    If You have You have any question, feel free to contact us.
                    Our Customer Service works <strong>24/7</strong>

                 </p><!-- text-muted Finish -->

             </center><!-- center Finish -->

             <form action="contact.php" method="post"><!-- form Begin -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Name</label>

                 <input type="text" class="form-control" name="name" required>

               </div><!-- form-group Finish -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Email</label>

                 <input type="text" class="form-control" name="email" required>

               </div><!-- form-group Finish -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Subject</label>

                 <input type="text" class="form-control" name="subject" required>

               </div><!-- form-group Finish -->

               <div class="form-group"><!-- form-group Begin -->

                 <label>Message</label>

                     <textarea name="message" class="form-control" required></textarea>

               </div><!-- form-group Finish -->

               <div class="text-center"><!-- text-center Begin -->

                 <button type="submit" name="submit" class="btn btn-primary">

                 <i class="fa fa-user-md"></i> Send Message

                 </button>

               </div><!-- text-center Finish -->

             </form><!-- form Finish -->

             <?php

                   if(isset($_POST['submit'])){

                     ///Admin receives message with this ///

                       $sender_name = $_POST['name'];
                       $sender_email = $_POST['email'];
                       $sender_subject = $_POST['subject'];
                       $sender_message = $_POST['message'];

                       // $receiver_email = "intare01@gmail.com";
                       //
                       // mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

                        /// Auto reply to sender with this ///

                        // $email = $_POST['email'];
                        // $subject = "Welcome to GC website";
                        // $msg = "Thanks for sending us a message. We will reply your message ASAP";
                        // $from = "intare01@gmail.com";
                        //
                        // mail($email,$subject,$msg,$from);
                        // echo "<h2 align='center'> Your message has been sent successfully </h2>";

                        $insert_messages = "insert into messages (client_name,client_mail,mes_subject,message) values
                                           ('$sender_name','$sender_email','$sender_subject','$sender_message')";

                        $run_messages = mysqli_query($con,$insert_messages);

                        if ($run_messages){

                        echo "<script>alert('Your message has been sent successfully')</script>";
                        echo "<script>window.open('index.php','_self')</script>";

                      }

                   }


              ?>

           </div><!-- box-header Finish -->

         </div><!-- box Finish -->

    </div><!-- col-md-9 Finish -->

    <div class="col-md-3"><!-- col-md-3 Begin -->

      <h2 class="text-center">Products You Maybe Like</h2>


        <?php

      getProSide();

       ?>

    </div><!-- col-md-3 Finish -->

  </div><!-- container Finish -->

</div><!-- content Finish -->

<?php

include("includes/footer.php");

 ?>

      <script src="js/jquery-331.min.js"></script>
      <script src="js/bootstrap-337.min.js"></script>


  </body>
</html>
