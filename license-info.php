<?php
    session_start();
?>
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
    body{
            
    }
  
   

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
                            <?php
                            if (isset($_SESSION['account_username'])) {  ?>
                            <li class="navbar-item">
                                <a href="assesment.php" class="nav-link">Assesment</a>
                            </li><?php } else{ ?>
                            <li class="navbar-item">
                                <a href="login.php" class="nav-link">Assesment</a>
                            </li> <?php } ?>
                            <li class="navbar-item">
                                <a href="license-info.php" class="nav-link">License Info</a>
                            </li>
                            <?php
                            if (isset($_SESSION['account_username'])) { ?>
                            <li class="navbar-item">
                                <a href="profile.php" class="nav-link"><?php echo $_SESSION['account_username']; ?> 
                                </a>
                            </li>
                             <li class="navbar-item">
                                <a href="#" id="btnlogout" name="btnlogout" class="nav-link">Log Out</a>
                            </li>
                        <?php } else{ ?>
                            <li class="navbar-item">
                                <a href="login.php" class="nav-link">Sign in</a>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   

  
    



    <section class="section-area-04" id="services" style=" text-align: center;">
                   

                  <div class="other-services container">
                      <h2 class="section-title wow fadeIn" style="text-align: left;">License &nbsp<span>Information</span></h2>
                      <div class="row">
                          <div class="col-md-4 col-6 wow fadeInUp mb-3">
                            <div class="other-card card">
                              <div class="inner"> 
                                <img src="images/trafficlight.jpg" class="other-services-image card-img-top" alt="..." >
                              </div> 
                              <div class="animate-nav2 card-body ">
                                <h4 class="other-h4 otr-h4" style="margin-bottom: 2.1em;">Student Permit</h4>
                                <a href="Sample.pdf" class="other-btn " target="_blank">View </a>
                              </div>
                            </div>
                              
                          </div>
                          <div class="col-md-4 col-6 wow fadeInUp  mb-3" data-wow-delay=".1s">
                             <div class="other-card card">
                              <img src="images/Car.jpg"" class="other-services-image card-img-top" alt="...">
                              <div class="animate-nav2 card-body">
                               <h4 class="other-h4 "  style="margin-bottom: 2.1em;">Non-Professional License</h4>
                                <a href="Sample.pdf" class="other-btn"  target="_blank">View </a>
                              </div>
                            </div>
                              
                          </div>
                          <div class="col-md-4 col-6 wow fadeInUp  mb-3" data-wow-delay=".2s">
                             <div class="other-card card">
                              <img src="images/car_gear.jpg" class="other-services-image card-img-top" alt="...">
                              <div class="animate-nav2 card-body">
                                <h4 class="other-h4 otr-h4" style="margin-bottom: 2.1em;">Proffessional License</h4>
                                <a href="Sample.pdf" class="other-btn "  target="_blank">View </a>
                              </div>
                            </div>
                              
                              
                             
                          </div>
                          
                  </div>
              </section>
   




    
    
   
    
   
    <footer id="contact">
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

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btnlogout').click(function(){
            var cmd = "logout";
            Swal.fire({
                          title: 'Are you sure?',
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes, Log Out!'
                        }).then((result) => {
                          if (result.isConfirmed) {
                     $.ajax({
                    type: "POST",
                    url: "php/logout.php",
                    data: {cmd: cmd},
                      success: function(){     
                         window.location.replace("index.php");
                       }
                    });                  
                  }
                })
            });
        });
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/scrollUp.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/wow.min.js"></script>
    
</body>

</html>