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
		
		
		
		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<form method="post" name="form1" id="form1">



<div id="wrapper">

<!--<div class="col-md-2"> </br><?php //include($p."Templates/admin_sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<input type="text" id="quantity1" name="setquantity" hidden/>
<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
	 
		
    <!-- Heading -->
		<div id="" class="col-md-12">
		
           </br>
            <!-- /.row -->
           <?php include("bhai_index.php");?>
           <!-- Main Content -->
		  
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                  <form method="post">  
                    
                    <div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="bhai_panel.php">Home</a> <i class="icons icon-right-dir"></i> Order Details</p>
                    </div>
                </div>
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
                                    <td>
                                        </td>
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
                            <?php  } ?>
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
												
												<th>Product name</th>												
												<th>Unit Price</th>
												<th>Quatity</th>
												<th>XPrice</th>
												
												
											</tr> 
													
											<tr>
												<td></br></td>
												
												<td></br></td>												
												<td></br></td>
												<td></br></td>
												<td></br></td>												
												
											</tr>
											
											
											<tr>
												<td class="align-right" colspan="5"><span class="price big">Total</span></td>
												<!--<td><strong>$22.00</strong></td>
												<td><strong>$-32.00</strong></td>-->
												<td><span class="price big"></span></td>
											</tr>
											
										</table>
										
                                    </div>
									
									
									
									
								</div>
								
                            
                            </div>
							
                        </div>
                        
                    </div>
					
                    </form>
				</section>
				<!-- /Main Content -->
                
        
        </div>
	
        <!-- /#page-wrapper -->
                     
        
									    
    
</div>   
                                  
									<!-- /Carousel Item -->

<!-- InstanceEndEditable -->
<?php include($p."Templates/footer.php")?>

</form>
</body>
<!-- <script type=text/javascript>
function setQuantity(id){

var quantity=$("#"+id).val();

$('#quantity1').val(quantity);
//window.location.replace("addtocart.php");
}
function setId(id){
	$("#p_id").val(id);
	
$("#form1").attr("action","addtocart.php");

	
	
	
  
  
  $("#form1").submit();
}
</script> -->



<!-- InstanceEnd --></html>



