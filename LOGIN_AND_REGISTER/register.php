<?php include('server.php')?>
<?php include('errors.php') ?>
<!DOCTYPE HTML> 
    <html>
             <head>
                  <title>Sign Up</title>
                  <meta charset="UTF-8">
				  
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v16/Login_v16/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v16/Login_v16/css/main.css">
<!--===============================================================================================-->

             </head>
             <div class="limiter">
		<div class="container-login100" style="background-image: url('background.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
			
				<span class="login100-form-title p-b-41">
					Account Registration
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="login.php" method="post">
               
			   <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="userID" placeholder="UserID(need to be unique)">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                
			   <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                
			   <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="emailID" placeholder="Email ID">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password_1" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>  
                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password_2" placeholder="Confirm password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>   
                <div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" name="signup" value="signup" >
							Sign Up
						</button>
                </div> 
				<div>
				   <center>
				   <br>
				    <p><font size="+1">Already a </font><a href="http://localhost/LOGIN_AND_REGISTER/login.php" value="login" style="color: blue"><font size="+2">member ?</font></p>
				    
					</center>
				</div> 
               </form>
               </div>
		</div>
    </div>
    <div id="dropDownSelect1"></div>
		
<!--===============================================================================================-->
<script src="Login_v16/Login_v16/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/Login_v16/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/Login_v16/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v16/Login_v16/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/Login_v16/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/Login_v16/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v16/Login_v16/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/Login_v16/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/Login_v16/js/main.js"></script>


            </body>
    </html>