<!DOCTYPE html>

<head>
        
        <script src="js/validation.js"></script>
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
		<script src="../js/validation.js"></script> 
        
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
<?php

session_start();	

if(isset($_SESSION['user_name']))
    {
        include("Templates/loggedin_header.php");
    }
 else {
    include("Templates/header.php");
}


$user = new user();
if(isset($_POST["update"]) && isset($_POST['oldPassword'])){
    if(isset($_POST['oldPassword']))
        echo "agfagdgdhf";


   $result = $user->validateuser($_SESSION['user_id'],$_POST['oldPassword']);
   if($result){


          echo "password do not updated";
        $data = $user->updateUserWithoutPassword($_POST['name'],$_POST['CNIC'],$_POST['DOB'],$_POST['phone'],$_POST['gender'],$_POST['province'],$_POST['district'],$_POST['city'],$_POST['tehsil'],$_POST['comAddress'],$_SESSION['user_id']);
        echo "<script type='text/javascript'>alert('user updated successfully')</script>"



        if(isset($_POST['newPassword']) && isset($_POST['confirmPassword']) && 
            $_POST['newPassword']==$_POST['confirmPassword']){
            echo "Password updated";
        
        $data = $user->updateUser($_POST['name'],$_POST['CNIC'],$_POST['DOB'],$_POST['newPassword'],$_POST['phone'],$_POST['gender'],$_POST['province'],$_POST['district'],$_POST['city'],$_POST['tehsil'],$_POST['comAddress'],$_SESSION['user_id']);
        echo "<script type='text/javascript'>alert('user updated successfully')</script>"
         }
         // elseif(!isset($_POST['newPassword']) && !isset($_POST['confirmPassword']) && $_POST['newPassword']!=$_POST){
          
         // }
     }
         else{
            echo "<script type='text/javascript'>alert('user updatedation failed')</script>"
         }
 }
?>
<html>

    
<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->

    
    <body>
	
  
		
		<!-- Container -->
		<div class="container">
			
			
			<!-- /Header -->
			
			<form method="post" enctype="multipart/form-data">	
			<!-- Content -->
			<div class="row content">
				 
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="main1.php">Home</a> <i class="icons icon-right-dir"></i> Modify User</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    <?php 
						if(isset($_SESSION["user_id"])){
                            $user = new User();
                            $result = $user->viewUser($_SESSION['user_id']);
					    	//print_r($result);					
					?>                   
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>Modify User</h4>
                            </div>
                            
                            <div class="page-content">
							<p><span class="error">* required field<li><img src="" width="60px"  height="80px"> </img></li>.</span></p>
                            	<div class="row">
                                	
                                   
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Name</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="name" id="name" onkeypress="return isCharacter(event)" maxlength="30" value="<?php echo $result[0]['name']; ?>" onblur="displayMessage()" required>
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="nameErr">* <?php //echo $nameErr;?></span>
									</div>
                                </div>
								
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Date Of Birth</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="date" name="DOB" id="DOB" value="<?php echo $result[0]['dob']; ?>" onblur="displayDobError()" >
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="DOBErr">* <?php //echo $DOBErr;?></span>
                                    </div>	
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>CNIC</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" name="CNIC" id="CNIC" onkeypress="return isNumber(event)" maxlength="13" value="<?php echo $result[0]['cnic']; ?>" onblur="displayCnicError()">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="cnicErr">* <?php //echo $cnicErr;?></span>
                                    </div>
                                    
                                </div>
                               
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Old Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" maxlength="15" name="oldPassword"  value="">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php //echo $oldPasswordErr;?></span>
                                    </div>
                                    
                                </div>
								
								<?php  //$_SESSION["oldPassword"]=$productInfo[0]["password"]; ?>
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>New Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" maxlength="15" id="newPassword" name="newPassword" placeholder="">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error">* <?php //echo $newPasswordErr;?></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Confirm Password</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="password" maxlength="15" id="confirmPassword" name="confirmPassword" placeholder="" onblur="validatePasswords()">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="confirmPasswordSpan" >* <?php //echo $confirmPasswordErr;?></span>
                                    </div>
                                    
                                </div>								
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Phone Number</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" id="phone" onkeypress="return isNumber(event)" maxlength="11" name="phone" value="<?php echo $result[0]['phone']; ?>" onblur="errorMessage()" >
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="phoneErr">* <?php //echo $phoneErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Gender</p>
                                    </div>
                                  
                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                    	
										<select name="gender" >
										  <option value="<?php echo $result[0]['gender']; ?>"><?php echo $result[0]["gender"];?></option>
										  <option value="male">Male</option>
										  <option value="female">Female</option>
										  <option value="other">Other</option>
										  
										</select>
                                    </div>
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Province</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" onkeypress="return isCharacter(event)" maxlength="15" name="province" id="Province" value="<?php echo $result[0]['province']; ?>" onblur="displayProvinceError()">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="provinceErr">* <?php //echo $provinceErr;?></span>
                                    </div>	
									
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>District</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" onkeypress="return isCharacter(event)" maxlength="15" name="district" id="district" value="<?php echo $result[0]['district']; ?>" onblur="displayDistrictError()">
                                    </div>	
										<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="districtErr">* <?php //echo $districtErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>City</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" onkeypress="return isCharacter(event)" maxlength="15" name="city" id="city" value="<?php echo $result[0]['city']; ?>" onblur="displayCityError()">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="cityErr">* <?php //echo $cityErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Tehsil</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" onkeypress="return isCharacter(event)" maxlength="15" name="tehsil" id="tehsil" value="<?php echo $result[0]['tehsil']; ?>" onblur="displayTehsilError()">
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="tehsilErr">* <?php //echo $tehsilErr;?></span>
                                    </div>	
                                    
                                </div>
								
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Complete Address</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<input type="text" maxlength="50" name="comAddress" id="comaddress" value="<?php echo $result[0]['address']; ?>" onblur="displayComAddressError()">
                                    </div>	
										<div class="col-lg-3 col-md-3 col-sm-3">
										<span class="error" id="comaddressErr">* <?php //echo $comAddressErr;?></span>
                                    </div>
                                    
                                </div>
								
								
                                
								<div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                    	<p>Image Link</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	 					
								<input  type="file" class="form-control"    name="image"    />
                                    </div>	
                                    
                                </div>
								 
                              
                                
                               <div class="row">
                                    
                                 
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    	<input class="big" type="submit" value="Update" name="update">
                                        <input class="big" type="reset" value="Cancel">
                                    </div> 
                                    
                                </div>
                            </div>
                            
                    	</div>
                          
                    </div>
                        
					<?php }else{ //echo "<script type='text/javascript'>alert('You should first logged in!')</script>";
					//echo '<script type="text/javascript"> window.location = "login/login.php" </script>';
					}?>		 						
				</section>
				<!-- /Main Content -->
                
                
                <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
					<?php include("Templates/sidebar.php"); ?>
					<!-- /Categories -->
          	
                            
						</div>
						
					</div>
					<!-- /Carousel -->
					
					
					
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
			</form>
			
			

 <script type="text/javascript">

                function displayMessage(){
                    var name = $('#name').val();
                    if(name=="")
                        document.getElementById('nameErr').innerHTML = "This field is required";
                }

                   function displayDobError(){
                    var name = $('#DOB').val();
                    if(name=="")
                        document.getElementById('DOBErr').innerHTML = "This field is required";
                }

                function displayCnicError(){
                    var name = $('#CNIC').val();
                    if(name=="")
                        document.getElementById('cnicErr').innerHTML = "This field is required";
                }

                 function errorMessage(){
                    var name = $('#phone').val();
                    if(name=="")
                        document.getElementById('phoneErr').innerHTML = "This field is required";
                }

              


                function validatePasswords(){
                    var newPassword = document.getElementById('newPassword').value;
                    var confirmPassword = document.getElementById('confirmPassword').value;
                    if(newPassword!=confirmPassword){
                        alert("Both Passwords Do Not Match!!!");
                    }
                    document.getElementById('confirmPasswordSpan').innerHTML = "Both Passwords Do Not Match!!!";
                                    
                }

                 function displayProvinceError(){
                    var name = $('#Province').val();
                    if(name=="")
                        document.getElementById('provinceErr').innerHTML = "This field is required";
                }

                 function displayDistrictError(){
                    var name = $('#district').val();
                    if(name=="")
                        document.getElementById('districtErr').innerHTML = "This field is required";
                }

                 function displayCityError(){
                    var name = $('#city').val();
                    if(name=="")
                        document.getElementById('cityErr').innerHTML = "This field is required";
                }

                 function displayTehsilError(){
                    var name = $('#tehsil').val();
                    if(name=="")
                        document.getElementById('tehsilErr').innerHTML = "This field is required";
                }

                 function displayComAddressError(){
                    var name = $('#comaddress').val();
                    if(name=="")
                        document.getElementById('comaddressErr').innerHTML = "This field is required";
                }

               

            </script>
			
			<?php include("Templates/footer.php") ?>

    </body>
    

<!-- Mirrored from velikorodnov.com/html/homeshop/create_an_account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 16:29:04 GMT -->
</html>