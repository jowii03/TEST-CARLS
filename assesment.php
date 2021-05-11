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
     @media only screen and (max-width: 425px){
        .guide{
            font-size: 13px ;
        }
        .form p{
            font-size: 13px;
            margin-bottom: 10px;
        }
        .form label{
            font-size: 10px;
        }
        .form input{
            height: 10px;.

        }

     }
      @media only screen and (max-width: 320px){
        .guide{
            font-size: 13px ;
        }
        .form p{
            font-size: 13px;
            margin-bottom: 10px;
        }
        .form label{
            font-size: 10px;
        }
        .form input{
            height: 10px;.

        }
        .form{
            margin-left: 1em !important;
        }

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
   

    


   <section style="margin-bottom: 30px;">
        <div class="container">
            <h2 class="section-title wow fadeIn" style="text-align: left;">Assesment<span></span></h2>
             <p class="guide" style="margin-bottom: 5px;">Select the correct asnwer.</p>
           
            <div class="form" style="margin-left: 2em;">
                <form>
                    <div>
                         <p>1. &nbsp If you are involved in an accident, you should inform the nearest police station:</p>
                         <input type="radio" id="a" name="q1" value="a">
                        <label for="a">A. immediately</label><br>
                        <input type="radio" id="b" name="q2" value="b">
                        <label for="b">B. within 72 hours</label><br>
                        <input type="radio" id="c" name="q3" value="c">
                        <label for="c">C. within 48 hours</label>

                         <p><br>2. &nbsp The minimum age in the application for Non-Professional Driver’s License is:</p>
                         <input type="radio" id="a" name="q2" value="a">
                        <label for="a">A. 18 Years Old</label><br>
                        <input type="radio" id="b" name="q2" value="b">
                        <label for="b">B. 16 Years Old</label><br>
                        <input type="radio" id="c" name="q2" value="c">
                        <label for="c">C. 17 Years Old</label>

                         <p><br>3. &nbsp A Non-Professional driver’s license is suited for:</p>
                         <input type="radio" id="a" name="q3" value="a">
                        <label for="a">A. All types of vehicles</label><br>
                        <input type="radio" id="b" name="q3" value="b">
                        <label for="b">B. Public utility vehicles</label><br>
                        <input type="radio" id="c" name="q3" value="c">
                        <label for="c">C. Private vehicles</label>

                         <p><br>4. &nbsp While driving, you should look at your side and rear view mirror:</p>
                         <input type="radio" id="a" name="q4" value="a">
                        <label for="a">A. If you want</label><br>
                        <input type="radio" id="b" name="q4" value="b">
                        <label for="b">B. Quickly</label><br>
                        <input type="radio" id="c" name="q4" value="c">
                        <label for="c">C. Not less than one per minute</label>

                         <p><br>5. &nbsp You can overtake in the right side of your vehicle if:</p>
                         <input type="radio" id="a" name="q5" value="a">
                        <label for="a">A. The road has two or more lanes going in one direction</label><br>
                        <input type="radio" id="b" name="q5" value="b">
                        <label for="b">B. The road is two-way</label><br>
                        <input type="radio" id="c" name="q5" value="c">
                        <label for="c">C. The sidewalk is wide</label>

                         <p><br>6. &nbsp In an intersection with a STOP sign, you should:</p>
                         <input type="radio" id="a" name="q6" value="a">
                        <label for="a">A. Slow down and proceed if there is no danger</label><br>
                        <input type="radio" id="b" name="q6" value="b">
                        <label for="b">B. Stop and proceed if there is no danger</label><br>
                        <input type="radio" id="c" name="q6" value="c">
                        <label for="c">C. Give way to vehicles going from left and right, proceed if there is no dangers</label>

                         <p><br>7. &nbsp Obtaining a driver’s license is:</p>
                         <input type="radio" id="a" name="q7" value="a">
                        <label for="a">A. A right</label><br>
                        <input type="radio" id="b" name="q7" value="b">
                        <label for="b">B. A priviledge</label><br>
                        <input type="radio" id="c" name="q7" value="c">
                        <label for="c">C. An honor/label>

                         <p><br>8. &nbsp A person who drives while under influence of alcohol or drugs is punishable by law with:

</p>
                         <input type="radio" id="a" name="q8" value="a">
                        <label for="a">A. All answers are correct</label><br>
                        <input type="radio" id="b" name="q8b" value="b">
                        <label for="b">B.Fines and imprisonment</label><br>
                        <input type="radio" id="c" name="q8" value="c">
                        <label for="c">C. Suspension of license</label>

                         <p><br>9. &nbsp If you are involved in an accident, you should inform the nearest police station:After overtaking, you want to safely go back to the lane where you where you came from, you should:<br>
                         <input type="radio" id="a" name="q9" value="a">
                        <label for="a">A. Use the rear view mirror to check the vehicle you have overtaken</label><br>
                        <input type="radio" id="b" name="q9" value="b">
                        <label for="b">B.Look at the vehicle you have overtaken by turning your head</label><br>
                        <input type="radio" id="c" name="q9" value="c">
                        <label for="c">C. Stop</label>

                         <p><br>10. &nbsp What should you prepare for a long trip?</p>
                         <input type="radio" id="a" name="q10" value="a">
                        <label for="a">A. All answers are correct</label><br>
                        <input type="radio" id="b" name="q10" value="b">
                        <label for="b">B. Plan your route and make sure the vehicle is running in good condition</label><br>
                        <input type="radio" id="c" name="q10" value="c">
                        <label for="c">C.  Prepare the necessary tools that can be used to repair the vehicle</label>

                        <div>
                            <button class="btn pull-left" style="margin-top: 2em">Submit</button>
                        </div>
                    </div>

                </form>
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