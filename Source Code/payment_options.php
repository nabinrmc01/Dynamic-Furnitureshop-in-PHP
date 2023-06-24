
<div class="col-md-1">
</div>
<div class="col-md-11">
        <div class="box"><!-- box Begin -->

        <?php
        $session_email=$_SESSION['customer_email'];
        $select_customer="select * from customer where customer_email='$session_email'";

            $run_customer=mysqli_query($con,$select_customer);
            $row_customer=mysqli_fetch_array($run_customer);
            $customer_id=$row_customer['customer_id'];
        ?>
            
            <h1 class="text-center">Payment Options </h1>  
            
            <p class="lead text-center"><!-- lead text-center Begin -->
                
                <a class="" href="order.php?c_id=<?php echo $customer_id; ?>"> Offline Payment </a>
                
            </p><!-- lead text-center Finish -->
            
            <center><!-- center Begin -->
                
                <p class="lead"><!-- lead Begin -->
                    
                    <a href="#">
                        
                        
                        <img class="img-responsive" src="images/payment/esewa.png" alt="img-paypall">
                        
                    </a>

                        <a href="#">
                        
                     
                        
                        <img class="img-responsive" src="images/payment/khalti.png" alt="img-paypall">
                        
                    </a>
                    
                </p> <!-- lead Finish -->
                
            </center><!-- center Finish -->
            
        </div><!-- box Finish -->
</div>

