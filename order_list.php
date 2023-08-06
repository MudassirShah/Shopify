<!DOCTYPE html>
<?php 

?>
<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/orders_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
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
			
			<!-- Header -->
					       
			<!-- /Header -->
			  <form method="post" id="orderListForm" name="orderListForm">	
		
		
			<input type="text" name="txtId123456" id="txtId123456" hidden>
			
			<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="main1.php">Home</a> <i class="icons icon-right-dir"></i> Orders</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
                    <div class="row">
                    
                        <!-- Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>Orders List</h4>
                                <div class="carousel-arrows">
									<a href="#"><i class="icons icon-reply"></i></a>
								</div>
                            </div>
                            
                        </div>
                        <!-- /Heading -->
                        
					</div>	
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
							<table class="order-table">
                            	
								<tr>
									<th>Order Number</th>
									<th>Order Date</th>
									<th class="order-status">Delivered To</th>
									<th class="order-status">Phone</th>
									<th class="order-status">Address</th>
									<th class="order-status">Status</th>
									<th class="order-status">Delivery Time</th>
									<th>Total</th>
								</tr>
								
								<tr>
								
									<td>
										
										<input type="button" name ="update "  class="btn btn-info update" value="" onClick="" />
									</td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><span class="price"></span></td>
								
								</tr>   
								
								                               
								
							</table>
								
                        </div>
                        
                    </div>
                        
                   
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include($p."Templates/sidebar.php"); ?>
					<!-- /Categories -->
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			</form> 
			
			


			
			<!-- Banner -->
			<?php include($p."Templates/footer.php");?>
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
    

<!-- Mirrored from velikorodnov.com/html/homeshop/orders_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>

<!-- <script>

	function setId(Id){
		$("#txtId123456").val(Id);
	}
	
	$(".update").click(function(){
	    $("#orderListForm").attr("action","order_info.php");
		$("#orderListForm").submit();  
	
		
	});

</script> -->