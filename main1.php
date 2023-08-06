<?php
//session_start();
//echo $_SESSION['user_name'];

?>
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
		<link rel="stylesheet" href="css/pagination.css">
		
			<!-- JavaScript -->
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/jquery.raty.min.js"></script>
		
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
		
		<script src="js/validation.js"></script>

</head>
<?php 
session_start();
if(!isset($_SESSION['user_name'])){
	include("Templates/header.php");
}elseif(isset($_SESSION['user_name'])){
	include("Templates/loggedin_header.php");
}
 ?>
<body>
<form method="post" name="form1" id="form1">

<div class="col-md-3"> <?php include("Templates/sidebar.php"); ?></div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<input type="text" id="quantity1" name="setquantity" hidden/>
<input type="text" id="p_id" name="txtIdAddToCart" hidden/>
<div class="col-md-9"> 



<div class="row">
	
	
	<br>
		<!-- Heading -->
		<div class="col-lg-12 col-md-12 col-sm-12">

		

		<div class="col-lg-12 col-md-12 col-sm-12">

			<div class="row subcategories">

				<!-- Subcategory -->
			   <div class="row subcategories">
				<!-- </div>
				/Subcategory 

			</div> --> 

		</div> 
	
	</div>



   <div class="row">
    <!-- Heading -->
		<div class="col-lg-12 col-md-12 col-sm-12"></br>							
			<div class="carousel-heading">
				<h4>All Items</h4>
			</div>
							
		</div>
	</div>
	<!-- /Heading --> 
	<?php
		$product = new Product();
		if(isset($_POST['search_submit'])){
			$data = $product->searchProductById($_POST['search_input']);
			//$data = $result[0];
			//print_r($data);die;
		}
		if(isset($_POST['category_ui'])){
			$data = $product->searchProductsByCategory($_POST['category_ui']);
		}
      	if(isset($_POST['submit_but'])){
      		$data = $product->viewAllCategoriesById($_POST['category_id']);
      	}
      
      	elseif(!isset($_POST['submit_but']) && !isset($_POST['search_submit'])){
      		$data = $product->viewAllProducts();
      	}

      	// if(!isset($_POST['category_ui']) && !empty(['submit_but'])){
      	// 	$data = $product->viewAllProducts();
      	// }
      	foreach ($data as $result) {
      	    
      	
      ?>
       
       <div class="row">
				<div class="col-md-4" style="margin-top:15px;">
					<div class="well"><?php echo $result["name"]; ?>
						<div class="product-image" onclick="">
							<img src="<?php echo $result["image"]; ?>" alt="images/NoImage.png" onerror="" />
							<a href="" class="product-hover" >
								<i class="icons icon-eye-1" ></i> Quick View
							</a>
						</div>
						<div class="product-info">
							<h5><a href="#"><b></B></a></h5>
							<span class="price" >Price:<?php echo $result["price"];?></span>
								<div class="rating readonly-rating" data-score="4"></div>
								<div class="col-md-12">
									<tr>
										<td>Quantity:<?php echo $result["quantity"]; ?></td>
										<td>
											<div class="numeric-input">
												<input type="text"  name="quantity"  onblur="" id="" maxlength="2"/>
												<span class="arrow-up"><i class="icons icon-up-dir"></i></span>
												<span class="arrow-down"><i class="icons icon-down-dir"></i></span>
											</div>

										</td>
									</tr>
								</div>
						</div>



						<div class="product-actions" >
							<span class="add-to-cart" onclick=""                         
							>
								<span class="action-wrapper" >


									<div class="action-name " style="font-size:16px; text-align:center;" ><i class="icons icon-basket-2" ></i>Add to cart</div>

								</span >
							</span>
						</div>
					</div>
				</div>
									
                    <?php } ?>                    
		
	<br/>	
       	
       </div>

        
   
    <br>         
    <br>         
    <div class="row">
    	<div class="col-lg-3 col-xs-12"></div>
    	<div class="col-lg-6 col-xs-12">
    	<div class="pagination">
				  
			<br>
		</div>
  		</div>
   		<div class="col-lg-3 col-xs-12"></div>
    </div>                      
       <br>             
									<!-- /Carousel Item -->

<!-- InstanceEndEditable -->
</body>

<?php include("Templates/footer.php") ?>

</form>
</body>




<!-- InstanceEnd --></html>



