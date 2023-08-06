<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

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
		<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
   		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/chosen.css">

</head>

<body>

<div class="col-md-3"> <?php include($p."Templates/sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<!-- Main Content -->
<br/><br/>
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
									<th class="order-status">Order Status</th>
									<th>Total</th>
								</tr>
								
								
								 include("product.php");
								 
								 
								<tr>
									<td class="order-number"><p><a href="#"></a></p></td>
									<td><p></p></td>
									<td><p></p></td>
									<td><span class="price"></span></td>
								</tr>                               
								
                                </table>
								
                        </div>
                        
                    </div>
                        
                    
				</section>
				<!-- /Main Content -->










<!-- InstanceEndEditable -->
</body>


<?php include($p."Templates/footer.php")?>

<!-- InstanceEnd --></html>



