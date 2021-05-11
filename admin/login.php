<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CarLS Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Carls-logo.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>


<body class="bg-light">
    <!-- Preloader Start Here -->
    <div id="preloader"></div>  
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-light">

                         <div class="text-center">
                             <img src="img/Carls-logo.png" class="imglogo">
                             <h1 class="h1">Sign in</h1>
                         </div>
                        
                         <div class="input-group mb-3">
                            <span ><i class="fas fa-envelope"></i></span>
                             <input type="text" name="username" id="username" class="form-control shadow-none" placeholder="Username" required>
                         </div>
                         
                         <div class="input-group mb-4">
                           <span ><i class="fa fa-key"></i></span>
                             <input type="password" name="password" id="password" class="form-control shadow-none" placeholder="Password" required>
                             
                         </div>
                        <input class="btn btn-success" type="Submit" value="Submit" id="submit" name="submit">   
                     
                         </div>

                         <!--<div class="col-lg-8 col-md-12">
                        <a href="forgot-password-s1.php">  <p style="margin-top: 15px;">forgot password?</p></a>
                        </div> -->
   <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>                       
  <script type="text/javascript">
    $(document).ready(function(){
      $('#submit').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        if (username == "" || password == "") {
            Swal.fire('Log in error...', 'Please Dont Leave Blanks', 'error');
        }
        $.ajax({
                type: "POST",
                url: "php/login.php",
                data: {
                    username:username,
                    password:password
                },
                success:function(data){
                    alert(data);
                    if (data == "Invalid") {
                        Swal.fire('Log in Error!', 'Either username or password is Incorrect', 'error');
                }   
                else{
                    Swal.fire({
                                title: "Log in Success!",
                                confirmButtonText: 'Ok',
                                showCloseButton: true
                            })
                            .then(function (data) {
                                if (data.value) {
                                    window.location = "dashboard.php";
                                }
                            })        
                    }
                  }   


              });
      });
    });
  </script>

                <footer class="footer-wrap-layout1">
                    <div class="copyright">(C) 2020.   <a href="#">CarLS UCC</a> </div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/jquery.smoothscroll.min.html"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>


</body>
</html>