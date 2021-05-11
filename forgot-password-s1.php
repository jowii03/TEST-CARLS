
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CarLS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
     <!-- Favicon -->
    <link rel="shortcut icon" href="images/Carls-logo.png">
</head>
<style type="text/css">


</style>
<body>
<header>        
        <div class="main-menu title" style="">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img class="brand-logo" src="images/Carls-logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="animate-nav collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item active">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="navbar-item">
                                <a href="modules.php" class="nav-link">Modules</a>
                            </li>
                            <li class="navbar-item">
                                <a href="license-info.php" class="nav-link">License Info</a>
                            </li>
                            <li class="navbar-item">
                                <a href="login.php" class="nav-link">Sign in</a>
                            </li>
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <style type="text/css">
       
    </style>
   <div class="static about-sec mb-5 mt-2">
        <div class="container wow fadeIn">
            <h2 class="section-title wow fadeIn" style="text-align: left;">Forgot Password <span></span></h2>
            <p>We can help you to recover your account.</p>
            <div class="form">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <input class="username" id="email" type="email" required="" name="email" placeholder="Enter Email Address" >                            
                        </div>

                        <div class="col-lg-8 col-md-12">
                        <button class="btn pull-left" id="btnsubmit" name="btnsubmit">Submit</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
          $(document).ready(function(){
            $('#btnsubmit').click(function(){
                var email = $('#email').val();
                $.ajax({
                    method: "POST",
                    url: "php/forgotpass.php",
                    data: {
                        email:email
                    },
                    success:function(data){
                        if(data == "email not found"){
                            Swal.fire('Email not sent', 'There is no such email in our database', 'error'); 
                        }
                        else{
                            Swal.fire({
                                title: "An email was sent to " + email + "",
                                confirmButtonText: 'Ok',
                                showCloseButton: true
                            })
                            .then(function (result) {
                                if (result.value) {
                                    window.location = "index.php";
                                }
                            })  
                        }
                    }
               });
            });
        });
    </script>



    <footer >
        <div class="container"> 
                        <div class="col-md-12">
                            <div class="address">
                                <h4>List of LTO in Manila</h4>
                                <h6>LTO Navotas</h6>
                                <h6>LTO Mandaluyong</h6>
                                <h6>LTO National Capital Region (NCR)</h6>
                                <h6>LTO Malabon</h6>
                                <h6>LTO Las Piñas</h6>
                                <h6>LTO Makati</h6>
                                <h6>LTO La Loma</h6>
                                <h6>LTO Malabon</h6>

                            </div>
                        </div>
      
            
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2020. CarLS UCC</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                   
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   
    <scrip src="js/jquery.min.js"></scrip>
    <scrip src="js/bootstrap.min.js"></scrip>
    <scrip src="js/jquery.scrollUp.min.js"></scrip>
    <scrip src="js/scrollUp.js"></scrip>
    <scrip type="text/javascript" src="js/owl.carousel.min.js"></scrip>
    <scrip src="js/owl.js"></scrip>
    <scrip src="js/wow.js"></scrip>
    <scrip src="js/wow.min.js"></scrip>
    
</body>

</html>