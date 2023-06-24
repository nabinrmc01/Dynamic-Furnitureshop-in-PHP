<div id="footer"> <!-- footer begin -->
	<div class="container"><!-- container begin -->
		<div class="row">
						<div class=" col-sm-6 col-md-3"><!-- col-sm-6 begin -->
							<h4>Pages</h4>
								<ul><!-- ul begin -->
									<li>
										<a href="cart.php">Shopping Cart</a>
									</li>
									<li>
										<a href="shop.php">Shop</a>
									</li>
									<li>
										<a href="contact.php">Contact</a>
									</li>
									<li>
										<a href="">Socials</a>
									</li>
								</ul><!-- ul  ends -->
								<hr>
								
								
								<hr class="hidden-md hidden-lg hidden-sm">

						</div><!-- col sm-6 ends -->


						<div class="col-sm-6 col-md-3"><!-- col sm-6 starts -->
								<h4>Top Products Categories</h4>
								<ul><!-- ul starts -->

								
								<?php 
                    
											$get_p_cats = "select * from product_categories";
										
											$run_p_cats = mysqli_query($con,$get_p_cats);
										
											while($row_p_cats=mysqli_fetch_array($run_p_cats)){
												
												$p_cat_id = $row_p_cats['p_cat_id'];
												
												$p_cat_title = $row_p_cats['p_cat_title'];
												
												echo "
												
													<li>
													
														<a href='shop.php?p_cat=$p_cat_id'>
														
															$p_cat_title
														
														</a>
													
													</li>
												
												";
												
											}
				
								?>



								</ul><!-- ul ends-->
								<hr class="hidden-md hidden-lg ">
						</div> <!-- col sm-6 ends -->


						<div class="col-sm-6 col-md-3"><!-- col sm-6 starts -->
							
						
						<h4><strong>Contact Information</strong></h4>
						<p><!--p starts here-->
							<div class="infocolor">
							<br>Anamnagar,Kathmandu
							<br>9803100579
							<br>nabinrmc5@gmail.com
							<br><strong>Nabin Rayamajhi</strong>
							</div>
						</p><!-- p ends here-->

						<a href="contact.php" class="infocolor">Contact US:</a>
						<hr class="hidden-md hidden-lg ">
						</div><!-- col sm-6 ends -->

						<div class="col-sm-6 col-md-3"><!-- col sm-6 starts -->
							<h4>Update:</h4>
							<p class="infocolor"> Be up to date with our products and find out your bes one.</p>
							<br>

							<hr>
							<h4>Keep In touch</h4>
							<p class="social">
								<a href="" class="fa fa-facebook">
								<a href="" class="fa fa-twitter">
								<a href="" class="fa fa-instagram">
								<a href="" class="fa fa-google-plus">
								
							</a></p>
							
						</div><!-- col sm-6 ends -->






		</div><!-- row  ends -->
		
	</div><!-- container ends -->
</div><!-- footer ends -->