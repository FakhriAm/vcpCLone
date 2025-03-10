<!DOCTYPE html>
<html lang="en">

<head>
	<title>Video Content Transmedia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/Login/images/icons/favicon.ico') ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>"> -->
	<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/animate/animate.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/css-hamburgers/hamburgers.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/animsition/css/animsition.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/select2/select2.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/daterangepicker/daterangepicker.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css')?>">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/Login/images/bg2.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post" id="form-login">
					<img src="https://upload.wikimedia.org/wikipedia/commons/0/09/TransMedia.svg" alt="Girl in a jacket" width="400" height="60">
					<span class="login100-form-title p-b-49">
						Video Content
					</span>

					<div class="wrap-input100 m-b-23" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="nik" placeholder="Username">
						<span class="focus-input100" data-symbol=""></span>
					</div>

					<div class="wrap-input100" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="">
						<span class="focus-input100" data-symbol=""></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="<?php echo base_url('auth/page404') ?>">
							Forgot password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<!-- <button class="login100-form-btn" href="<?php echo base_url('video') ?>" id="btn-login" ">
							onclick="login()
								Login
							</button> -->
							<a class="login100-form-btn" href="<?php echo base_url('video') ?>">
							Log In
						</a>
						</div>
						
					</div>

					<!-- <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" href="<?php echo base_url('video') ?>" id="btn-login" ">
							onclick="login()
								Login
							</button>
							
						</div>
						<a  href="<?php echo base_url('video') ?>">
							Check in
						</a>
					</div> -->

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="<?php echo base_url('auth/page404') ?>">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/animsition/js/animsition.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/select2/select2.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/daterangepicker/daterangepicker.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/countdowntime/countdowntime.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/js/main.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js')?>"></script>
    <!-- <script type="text/javascript">
        function login(){
            $.ajax({
                url:"<?php echo base_url('auth/login')?>",
                type:"POST",
                data:$('#form-login').serialize(),
                dataType: "JSON",
                beforeSend: function(){
                    $('#btn-login').attr("disabled", true);
                },
                success: function(data){
                    if(!data.status) showAlert(data.message);
                    else window.location = data.url;
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert(jqXHR+" "+textStatus+" "+errorThrown);
                },
                complete: function(){
                    $('#btn-login').removeAttr("disabled");
                }
            });
        }
        function showAlert(text){
            text = text.toString();
             swal('Login Failure',text.replace(/<[^>]*>/g, ''),'error');
        }
    </script> -->

</body>

</html>