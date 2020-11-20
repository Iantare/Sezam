<?php

    $active='Home';
    include("includes/header.php");
 ?>

<div class="container" id="slider"><!-- container Begin-->

    <div class="col-md-20"><!-- col-md-20 Begin-->

      <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin-->

          <ol class="carousel-indicators"><!-- carousel-indicators Begin-->

             <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>

          </ol><!-- carousel-indicators Finish-->

          <div class="carousel-inner"><!-- carousel-inner Begin-->

         <?php

           $get_adverts = "select * from adverts LIMIT 0,1";

           $run_adverts = mysqli_query($con,$get_adverts);

           while($row_adverts=mysqli_fetch_array($run_adverts))

           {
            $adverts_name = $row_adverts['adverts_name'];
            $adverts_image = $row_adverts['adverts_image'];
            $adverts_url = $row_adverts['adverts_url'];

            echo "
                <div class='item active'>

                <a href='$adverts_url'>

                    <img src='admin_area/slides_images/$adverts_image'>

                </a>

                </div>
            ";

           }

             $get_adverts = "select * from adverts LIMIT 1,8";

             $run_adverts = mysqli_query($con,$get_adverts);

             while($row_adverts=mysqli_fetch_array($run_adverts))

             {
              $adverts_name = $row_adverts['adverts_name'];
              $adverts_image = $row_adverts['adverts_image'];
              $adverts_url = $row_adverts['adverts_url'];

              echo "
                  <div class='item '>

                  <a href='$adverts_url'>

                      <img src='admin_area/slides_images/$adverts_image'>

                  </a>

                  </div>
              ";

             }


          ?>

          </div><!-- carousel-inner Finish-->

          <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin-->

               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>

          </a><!-- left carousel-control Finish-->

          <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin-->

               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>

          </a><!-- left carousel-control Finish-->


      </div><!-- carousel slide Finish-->

    </div><!-- col-md-12 Finish-->

</div><!-- container Finish-->

<div id="advantages"><!-- advantages Begin -->

  <div class="container"><!-- container Begin -->
    <div class="same-height-row"><!-- same-height-row Begin -->

       <?php

          $get_boxes = "select * from boxes_section";
          $run_boxes = mysqli_query($con,$get_boxes);

          while($run_boxes_section=mysqli_fetch_array($run_boxes)){

            $box_id = $run_boxes_section['box_id'];
            $box_title = $run_boxes_section['box_title'];
            $box_desc = $run_boxes_section['box_desc']


           ?>



      <!-- <div class="col-sm-4"><!-- col-sm-4 Begin -->
        <!-- <div class="box same-height"><!-- box-same-height Begin -->
          <!-- <div class="icon"><!-- icon Begin -->
            <!-- <i class="fa fa-heart"></i> -->

          <!-- </div><!-- icon Finish -->
          <!-- <h3><a href="#"><?php echo $box_title; ?></a></h3> -->

          <!-- <p><?php echo $box_desc; ?> </p> -->
        <!-- </div><!-- box-same-height Finish -->

      <!-- </div><!-- col-sm-4 Finish -->

   <?php } ?>


    </div><!-- same-height-row Finish -->

  </div><!-- container Begin -->

</div><!-- advantages Finish -->

<!-- <div id="hot"><!-- hot Begin -->

  <!-- <div class="box"><!-- box Begin -->

    <!-- <div class="container"><!-- container Begin -->

      <!-- <div class="col-md-12"><!-- col-md-12 Begin -->

        <!-- <h2>New Special Picks You May Like</h2> -->

      <!-- </div><!-- col-md-12 Finish -->

    <!-- </div><!-- container Finish -->

  <!-- </div><!-- box Finish -->

<!-- </div><!-- hot Finish -->

<div id="content" class="container"><!-- container Begin -->

  <div class="row"><!-- row Begin -->

<?php

   getPro();

 ?>


  </div><!-- row Finish -->

</div><!-- container Finish -->

<?php

include("includes/footer.php");

 ?>



      <script src="js/jquery-331.min.js"></script>
      <script src="js/bootstrap-337.min.js"></script>


  </body>
</html>
