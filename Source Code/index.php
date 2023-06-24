
<?php
    $active='Home';

include 'header.php';

?>


   
                   <div class="container" id="slider"><!-- container Begin -->
                       
                       <div class="col-md-12"><!-- col-md-12 Begin -->
                           
                           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
                               
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   
                                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                                   <li data-target="#myCarousel" data-slide-to="3"></li>
                                   <li data-target="#myCarousel" data-slide-to="4"></li>
                                   <li data-target="#myCarousel" data-slide-to="5"></li>
                                   <li data-target="#myCarousel" data-slide-to="6"></li>
                                   <li data-target="#myCarousel" data-slide-to="7"></li>
                                   <li data-target="#myCarousel" data-slide-to="8"></li>
                                   <li data-target="#myCarousel" data-slide-to="9"></li>
                                   
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner"><!-- carousel-inner Begin -->
                                   
                               <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,9";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   

                               </div><!-- carousel-inner Finish -->
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                                   
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                                   
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Next</span>
                                   
                               </a><!-- left carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                           
                       </div><!-- col-md-12 Finish -->     
                   </div><!-- container Finish -->



                   <div id="advantages"> <!-- advantages start -->

                      <div class="container">  <!-- container start -->
                                          <!-- first row 3 box -->
                          <div class="same-height-row"> <!-- same height row start -->
                              <div class="col-sm-4"><!-- col-sm-4 start -->
                                  <div class="box same-height"><!-- box same height finish -->

                                        <div class="icon text-center"> <!-- icon start -->

                                            <i class="fa fa-tag fa-2x colorblu"></i>  <!-- icon -->
                                        </div><!-- icon finish -->
                                                <h3 class="text-center colorblu">Best Sales</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.......</p>

                                    </div><!-- box-same height finish -->
                                
                            
                                </div> <!-- col-sm-4 finish -->
                            </div><!-- same height row finish -->




                            <div class="same-height-row"> <!-- same height row start -->
                              <div class="col-sm-4"><!-- col-sm-4 start -->
                                  <div class="box same-height"><!-- box same height finish -->

                                        <div class="icon text-center"> <!-- icon start -->

                                            <i class="fa fa-cart-plus fa-2x colorblu"></i>  <!-- icon -->
                                        </div><!-- icon finish -->
                                                <h3 class="text-center colorblu">Quality Products </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua......</p>

                                    </div><!-- box-same height finish -->
                                
                            
                                </div> <!-- col-sm-4 finish -->
                            </div><!-- same height row finish -->



                            <div class="same-height-row"> <!-- same height row start -->
                              <div class="col-sm-4"><!-- col-sm-4 start -->
                                  <div class="box same-height"><!-- box same height finish -->

                                        <div class="icon text-center"> <!-- icon start -->

                                            <i class="fa fa-thumbs-up fa-2x colorblu"></i>  <!-- icon -->
                                        </div><!-- icon finish -->
                                                <h3 class="text-center colorblu">Customer Satisfaction</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. ......</p>

                                    </div><!-- box-same height finish -->
                                
                            
                                </div> <!-- col-sm-4 finish -->
                            </div><!-- same height row finish -->










                      </div> <!-- container finish  -->
                   </div><!-- advantages finish-->
                   
                     <div class="container ads ">
                    <div class="row">
                      <div class="col-sm-2 "></div>
                      <div class="col-sm-8">
                      <img  src="https://static.wixstatic.com/media/28e748_38f4d5dde53d47a98ad238059aa2c268~mv2.gif" >
                      </div>
                      <div class="col-sm-2 "></div>
                     </div>           
                                
                   </div>


                   <div id="hot"><!-- hot start -->
                        <div class="box"><!-- box start-->


                            <div class="container"><!-- container start-->

                                  <div class="col-md-12"><!-- col-md-12 start-->
                                    <h2>Our Best Products</h2>
                                    
                                  </div><!-- col-md-12 finish-->
                              
                            </div><!-- container finish-->

                          
                        </div><!--box finish-->
                   </div><!-- hot finish--->


                   <div id="content" class="container"><!-- content +container start -->

                          <div class="row"><!-- row for content  start -->

                          <?php

                              getPro();

                          ?>



                            
                          </div><!-- row for content finish  -->
                     
                   </div><!-- content+container finish -->
                 

                      <?php

                         include 'footer.php';
                      ?>

    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>