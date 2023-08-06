<!DOCTYPE html>

<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/order_info.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
<head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>HomeShop - HTML Template</title>
        
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/fontello.css">
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" type="text/css" href="css/customrating.css" /> 
	<script src="js/jquery.min.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			
			<!-- /Header -->
			
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="main1.php">Home</a> <i class="icons icon-right-dir"></i> Order </p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                  <form method="post">  
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading">
                                <h4>Order Information</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                            
                            <table class="orderinfo-table">
                            	
                                <tr>
                                	<th>Order number</th>
                                    <td id="orderIdColumn"></td>
                                </tr> 
                                
                                <tr>
                                	<th>Order date </th>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                	<th>Order status</th>
                                    <td></td>
                                </tr>
								
								
                                                              
                                
                              
                                
                               
                                
								<tr>
                                	<th>Payment Mode</th>
                                    <td>Delivery on Cash</td>
                                </tr>
								
                                <tr>
                                	<th>Total</th>
                                    <td><span class="price"></span></td>
                                </tr>                    
                                
                            </table>
                            
                        </div>
                        
						
						<div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading">
                                <h4>Submit Feedback</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                           
                            
                            <table class="orderinfo-table">
                            	 
                                <tr>
                                	<th>Delivery Boy</th>
                                    <td>&nbsp&nbsp&nbsp </td>
									<td id="bhaiId"></td>
                                </tr> 
                                
                               <tr>
                               
                                <?php require("feedback.php"); ?>
                             
								</tr>
                            </table>
                            
                            <?php  } //print_r($orderInfor);?>
                        </div>
                    </div>
                    
                    <div class="row">
					 
                    	
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	
                            <div class="carousel-heading">
                                <h4>Bill to</h4>
                            </div>
                            
                            <table class="orderinfo-table">
                            	
                              
                             
                                
                                <tr>
                                	<th>Title</th>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                	<th>Name</th>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                	<th>Phone</th>
                                    <td></td>
                                </tr> 
                                
                                <tr>
                                	<th>Address </th>
                                    <td></td>
                                </tr>  
                                
                               
                                
                                                 
                                
                            </table>
                            
                        </div>
                        
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	
                            <div class="carousel-heading">
                                <h4>Deliver to</h4>
                            </div>
                            
                            <table class="orderinfo-table">
                                
                              
                                <tr>
                                	<th>Title</th>
                                    <td></td>
                                </tr>
                                <tr>
                                	<th>Name</th>
                                    <td></td>
                                </tr>
                                
                                 <tr>
                                	<th>Phone</th>
                                    <td></td>
                                </tr> 
								
                                <tr>
                                	<th>Address </th>
                                    <td></td>
                                </tr>  
                                
                               
                                                 
                                
                            </table>
                          
                        </div>
                          <?php } ?>
                        
                         <div class="col-lg-12 col-md-12 col-sm-12">
							
							
							<div class="tabs">
                            
                                <div class="tab-heading margin-heading">
                                    <a href="#tab1" class="button big">Order Items</a>
                                    
                                </div>
                                
                                <div class="tab-content no-padding">
                                	
                                    <div id="tab1">
									
                                    	<table class="orderinfo-table">
												
											<tr>
												<th>SKU</th>
												<!--<th>Image</th>-->
												<th>Product name</th>												
												<th>Unit Price</th>
												<th>Quatity</th>
												<th>XPrice</th>
												<th>Rate Product</th>
												
												
											</tr> 
													
											<tr>
												<td></br></td>
												<!--<td><image src="<?php //echo $data["img"];?>"/></td>-->
												<td></br></td>												
												<td></br></td>
												<td></br></td>
												<td></br></td>	
												<td width="20%"></br><?php require("productrating.php"); ?></td>
												
											</tr>
											
											
											<tr>
												<td class="align-right" colspan="5"><span class="price big">Total Estimated</span></td>
												<!--<td><strong>$22.00</strong></td>
												<td><strong>$-32.00</strong></td>-->
												<td><span class="price big"></span></td>
											</tr>
											
										</table>
										
                                    </div>
									
									
									
									
								</div>
								
                            
                            </div>
									<div>
									
											
											<img src="<?php  echo $data["recipt_src"]; ?>"/><?php } ?>
											
											
							</div>
                        </div>
                        
                    </div>
					</br></br>
                        
                    </form>
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include($p."Templates/sidebar.php"); ?>
					<!-- /Categories -->
					
					
					<!-- Compare Products -->
				
					<!-- /Bestsellers -->
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			
			
			


			
			<!-- Banner -->
			<?php include($p."Templates/footer.php")?>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>
		
		<!-- Scroll Bar -->
		<script src="js/perfect-scrollbar.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- FancyBox -->
		<script src="js/jquery.fancybox.pack.js"></script>
		
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

		<!-- FlexSlider -->
		<script defer src="js/flexslider.min.js"></script>
		
		<!-- IOS Slider -->
		<script src = "js/jquery.iosslider.min.js"></script>
		
		<!-- noUi Slider -->
		<script src="js/jquery.nouislider.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- SelectJS -->
        <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
        
        <!-- Main JS -->
        <script defer src="js/bootstrap.min.js"></script>
        <script src="js/main-script.js"></script>

		
    </body>
    

<!-- Mirrored from velikorodnov.com/html/homeshop/order_info.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>