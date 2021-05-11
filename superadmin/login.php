<!DOCTYPE html>
<html lang="en">
<head>
	<title>CarLS Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="..//images/Carls-logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
	
	<div class="container-outer" >

		<div class="container-inner" >

			<div class="wrap-form" >

				

					<div class="login-form">

						<img class="form-logo" src="img/Carls-logo.png" >
							<span class="login-form-title">
								Welcome Admin
							</span>
	                   
	                        <div class="login-input mb-3">
	                            <input class="input" type="text" name="Admin_Username"  autocomplete="off"  placeholder="Username">
	                        </div>
	                        <div class="login-input">
	                           <input class="input" type="password" name="Admin_Password"  placeholder="Password">
	                        </div>
	                        <div class="container-signin-btn">
	                            <a class="singin-a" style="width: 100%;"><button class="signin-btn" id="btnlogin" name="btnlogin">Sign in</button></a>
	                            
	                        </div>

	                        <div class="text-center" style="padding-top: 45px;padding-bottom: 4px;">
								<span class="txt1">
									Forgot
								</span>

								<a href="dashboard.php" class="txt2 hov1">
									Username / Password?
								</a>
							</div>
	                    
	            	</div>
            	
			</div>
		</div>
	</div>
	

	<script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
	$(document).ready(function(){	
    	$('#btnlogin').click(function(){
        	var username = $('#Admin_Username').val();
            var password = $('#Admin_Password').val();

            if (username == "" || password == "") {
                Swal.fire('Log in error...', 'Please Dont Leave Blanks', 'error');
            }
            else if (username == "admin" && password == "1234"){
            	Swal.fire({
                                title: "Log in Success!",
                                confirmButtonText: 'Ok',
                                showCloseButton: true
                            })
                            .then(function (result) {
                                if (result.value) {
                                    window.location = "superadmin_profile.php";
                                }
                            });

            }
			else{
				Swal.fire('Log in error...', 'Invalid Username or Password', 'error');
			}
        });
	});
</script>

	<script src="js/main.js"></script>

</body>
</html>