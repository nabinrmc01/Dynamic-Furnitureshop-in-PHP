<?php 
session_start();
    if(!isset($_SESSION['customer_email'])){

        echo "<script>window.open('../checkout.php','_self')</script>" ;
    }

    else{

include 'includes/db.php';
include 'functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RJ Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>


   
<div id="top"><!-- Top Begin -->


         
         <div class="container-fluid"><!-- container Begin -->
            
             <div class="col-md-6"> </div>
             <div class="col-md-6"><!-- col-md-6 Begin -->
             
                 
                 <ul class="menu menu1"><!-- cmenu Begin -->
                 <li>
                 <a href="#" class="btn btn-info btn-sm">
                        <?php

                                if(!isset($_SESSION['customer_email'])){

                                    echo   "Guest";
                                }
                                
                                else{

                                    echo "".$_SESSION['customer_email']."";
                                }

                        ?>


                 </a>
                 </li>
                 <li>
                         <a href="my_account.php">My Account</a>
                     </li>
                      
                     
                     <li>
                     <?php  
                                            if(!isset($_SESSION['customer_email'])){
                                                echo"<a href='register.php'>Register </a>";
                                            }

                                            else{
                                                echo" <a href='customer/my_account.php'> </a>";
                                            }

                                     ?>
                     </li>
                     
                     <li>
                       <a href="../checkout.php">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                           
                       </a>
                   </li>
                     
                 </ul><!-- menu Finish -->
                 
             </div><!-- col-md-6 Finish -->
             
         </div><!-- container Finish -->
         
</div><!-- Top Finish -->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
           
               
                  <div class="container"><!-- container Begin -->
                  
                      <div class="navbar-header"><!-- navbar-header Begin -->
                          
                          <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                              
                              <img src="../images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                              <img src="../images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                              
                          </a><!-- navbar-brand home Finish -->
                          
                          <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                              
                              <span class="sr-only">Toggle Navigation</span>
                              
                              <i class="fa fa-align-justify"></i>
                              
                          </button>
                          
                          <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                              
                              <span class="sr-only">Toggle Search</span>
                              
                              <i class="fa fa-search"></i>
                              
                          </button>
                          
                      </div><!-- navbar-header Finish -->
                    
                      <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
                          
                          <div class="padding-nav"><!-- padding-nav Begin -->
                              
                              <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                                  
                                  <li class="<?php  if($active=='Home') echo 'active' ; ?> ">
                                      <a href="../index.php">Home</a>
                                  </li>
                                  <li class="<?php  if($active=='Shop') echo 'active' ; ?> ">
                                      <a href="../shop.php">Shop</a>
                                  </li>
                                  <li class="<?php  if($active=='Cart') echo 'active' ; ?> ">
                                      <a href="../cart.php">Cart</a>
                                  </li>
                                 
                                  <li class="<?php  if($active=='About') echo 'active' ; ?> ">
                                      <a href="../my_orders.php">About Us</a>
                                  </li>
                                  <li class="<?php  if($active=='Contact') echo 'active' ; ?> ">
                                      <a href="../contact.php">Contact </a>
                                  </li>
                                  
                              </ul><!-- nav navbar-nav left Finish -->
                              
                          </div><!-- padding-nav Finish -->
                 <a href="../cart.php" class="btn navbar-btn btn-primary right cart1"><!-- btn navbar-btn btn-primary Begin -->
                              
                              <i class="fa fa-shopping-cart"></i>
                              
                              <span> (<?php items(); ?>) Items in your cart </span>
                              <span> | Total Price:(<?php total_price(); ?>) </span>
                              
                          </a><!-- btn navbar-btn btn-primary Finish -->
                          
                          <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                              
                          <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                              
                              <span class="sr-only">Toggle Search</span>
                              
                              <i class="fa fa-search"></i>
                              
                          </button>
                              
                          </div><!-- navbar-collapse collapse right Finish -->
                          <div class="col-md-6">
                           </div>
                          <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                              
                              <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                                  
                                  <div class="input-group"><!-- input-group Begin -->
                                      
                                      <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                                      
                                      <span class="input-group-btn"><!-- input-group-btn Begin -->
                                      
                                      <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                                          
                                          <i class="fa fa-search"></i>
                                          
                                      </button><!-- btn btn-primary Finish -->
                                      
                                      </span><!-- input-group-btn Finish -->
                                      
                                  </div><!-- input-group Finish -->
                                  
                              </form><!-- navbar-form Finish -->
                              
                          </div><!-- collapse clearfix Finish -->
                          
                      </div><!-- navbar-collapse collapse Finish -->
                      
                  </div><!-- container Finish -->
         </div><!-- navbar navbar-default Finish -->

    <div id="content"><!-- content Begin -->
        <div class="container"><!-- container Begin -->
            <div class="col-md-12"><!-- col-md-12 Begin -->
                    <ul class="breadcrumb"><!-- Breadcrumb Begin -->
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            My Account
                        </li>
                    </ul><!-- breadcrumb  ends -->
            </div><!-- col-md-12 ends -->


            <div class="col-md-3 col-sm-6"><!-- col-md-3 starts -->
                    <?php

                    include 'sidebar.php';
                    ?>
            </div><!-- col-md-3 ends -->

            <div class="col-md-9"><!-- col-md-9 begins-->
                    <div class="box"><!-- box begins-->
                            <?php
                            if(isset($_GET['my_orders'])){
                                include'my_orders.php';
                            }
                            ?>

                            <?php
                            if(isset($_GET['pay_offline'])){
                                include'pay_offline.php';
                            }
                            ?>

                            <?php
                            if(isset($_GET['edit_account'])){
                                include'edit_account.php';
                            }
                            ?>

                            <?php
                            if(isset($_GET['change_pass'])){
                                include'change_pass.php';
                            }
                            ?>

                            
                            <?php
                            if(isset($_GET['delete_account'])){
                                include'delete_account.php';
                            }
                            ?>

                            
                            <?php
                            if(isset($_GET['logout'])){
                                include'logout.php';
                            }
                            ?>

                    </div><!-- box ends-->

            </div><!-- col-md-9 ends-->
        </div>
    </div>

        


                                






<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>
<?php } ?>