<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
  
    

<body>


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
   


<?php include 'footer.php'; ?>

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