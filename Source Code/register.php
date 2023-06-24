
<?php

include 'header.php';

?>



   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       User Registration
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include'sidebar.php';
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> User Registration</h2>
                           
                           
                       </center><!-- center Finish -->
                       
                       <form action="register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="c_email" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Password</label>
                               
                               <input type="password" class="form-control" name="c_pass" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Country</label>
                               
                               <input type="text" class="form-control" name="c_country" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>City/District</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Contact No:</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->



                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Address</label>
                               
                               <input type="text" class="form-control" name="c_address" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image" required>
                               
                           </div><!-- form-group Finish -->
                           
                          
                           
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i>Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include'footer.php';
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>


<?php

    if(isset($_POST['register'])){
        $c_name= $_POST['c_name'];

        $c_email= $_POST['c_email'];

        $c_pass= $_POST['c_pass'];

        $c_country= $_POST['c_country'];

        $c_city= $_POST['c_city'];

        $c_contact= $_POST['c_contact'];

        $c_address= $_POST['c_address'];

        $c_image= $_FILES['c_image']['name'];
        $c_image_tmp=$_FILES['c_image']['tmp_name'];
        $C_ip=getRealIpUser(); 

        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
        $insert_customer="insert into customer(customer_name,customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip)
         values('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$C_ip')"; 
         $run_customer=mysqli_query($con,$insert_customer);

         $sel_cart="select * from cart where ip_add='$c_ip'";
         $run_cart=mysqli_query($con,$sel_cart);
         $check_cart=mysqli_fetch_array($run_cart);

         if($check_cart>0){
             $_SESSION['customer_email']=$c_email;
             echo "<script>alert('User Registration Successful!')</script>";
             echo "<script>window.open('confirm.php','_self')</script>";



         }

         else{

            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('User Registration Successful!')</script>";
            echo "<script>window.open('index.php','_self')</script>";

         }



    }


?>