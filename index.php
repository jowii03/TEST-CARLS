<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'header.php'; ?>
    <body>
    <section class="slider" id="home">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="images/driving1.jpg" alt="slide1" class="carousel-img" style="height: 480px;">
                        <div class="content">
                            <div class="title animate-nav2">
                                <h3>Driving Tutorial</h3>
                                <h5>Drive to learn</h5>
                                
                                <a href="modules.php" class="btn">Learn Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/driving2.jpg" alt="slide1" class="carousel-img"  style="height: 480px;">
                        <div class="content">
                            <div class="title animate-nav2">
                                <h3>Driving Tutorial</h3>
                                <h5>Learn with us</h5>
                                
                                <a href="modules.php" class="btn">Learn Now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <img src="images/driving3.jpg" alt="slide1" class="carousel-img"  style="height: 480px;">
                        <div class="content">
                            <div class="title animate-nav2">
                                <h3>Driving Tutorial</h3>
                                <h5>Try to drive with us</h5>
                                
                                <a href="modules.php" class="btn">Learn Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-area-01">
            <div class="container wow fadeIn" >
                <p class="sub-title wow fadeIn">Lorem Ipsum</p>
                
                <p ></p>
                <p class="desc wow fadeIn">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
             </div>   
              
    </section>

     <section class="product-sec">
        <div class="container">
            <h2 class="section-title wow fadeIn">My <span>Simulator</span></h2>
            <div class="row wow fadeIn">
                <div class="col-md-6 slider-sec">
                    <!-- main slider carousel -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="images/machine.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="images/machine.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="images/machine.jpg" class="img-fluid">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="images/machine.jpg" class="img-fluid">
                            </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="images/machine.jpg" class="img-fluid">
                            </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="images/machine.jpg" class="img-fluid">
                            </a>
                            </li>
                        </ul>
                    </div>
                    <!--/main slider carousel-->
                </div>
                <div class="col-md-6 slider-content">
                    <span class="section-title2" style="color: #656d78;">My Simulator</span><br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    
                </div>
            </div>
        </div>
    </section>



    <section class="section-area-04" id="services" style="background-color: #f6f8fa; text-align: center;">
                   

                  <div class="other-services container">
                      <h2 class="section-title wow fadeIn">Sample  <span>Modules</span></h2>
                      <div class="row">
                          <div class="col-md-3 col-6 wow fadeInUp">
                            <div class="other-card card">
                              <div class="inner"> 
                                <img src="images/trafficlight.jpg" class="other-services-image card-img-top" alt="..." >
                              </div> 
                              <div class="animate-nav2 card-body ">
                                <h4 class="other-h4 otr-h4" style="margin-bottom: 2.1em;">Traffic Signs</h4>
                                <a href="modules.php" class="other-btn ">Review Now</a>
                              </div>
                            </div>
                              
                          </div>
                          <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay=".1s">
                             <div class="other-card card">
                              <img src="images/Car.jpg" class="other-services-image card-img-top" alt="...">
                              <div class="animate-nav2 card-body">
                               <h4 class="other-h4 "  style="margin-bottom: 2.1em;">Car Starting Up</h4>
                                <a href="#" class="other-btn ">Review Now</a>
                              </div>
                            </div>
                              
                          </div>
                          <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay=".2s">
                             <div class="other-card card">
                              <img src="images/car_gear.jpg" class="other-services-image card-img-top" alt="...">
                              <div class="animate-nav2 card-body">
                                <h4 class="other-h4 otr-h4" style="margin-bottom: 2.1em;">Gear Handling</h4>
                                <a href="#" class="other-btn ">Review Now</a>
                              </div>
                            </div>
                              
                              
                             
                          </div>
                          <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay=".3s">
                             <div class="other-card card">
                              <img src="images/parking.jpg" class="other-services-image card-img-top" alt="...">
                              <div class="animate-nav2 card-body">
                                <h4 class="other-h4" style="margin-bottom: 2.1em;">Different Parking </h4>
                                <a href="#" class="other-btn ">Review Now</a>
                              </div>
                            </div>
                            
                              
                             
                          </div>
                      </div>
                  </div>
              </section>
   




    
    <section class="section-area-05 col-lg-12" id="about" style="background-color: #fff;display: block;margin-right: auto;margin-left: auto;">
        <div class="container">
            <h2 class="section-title wow fadeIn">About <span>Us</span>,</h2>
            <p class="wow fadeIn" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p class="wow fadeIn" data-wow-delay=".1s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            <p class="wow fadeIn" data-wow-delay=".2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
            <p class="wow fadeIn" data-wow-delay=".3s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="btn-sec wow fadeIn" data-wow-delay=".4s">
                <a href="#" target="_blank" class="btn yellow">Learn More</a>
            </div>
        </div>
    </section>
   
    
    
    <section class="testimonial-sec">
        <div class="container">
            <div id="testimonal" class="owl-carousel owl-theme">
                <div class="item">
                   <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                    <div class="box-user">
                        <h4 class="author">Info</h4>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                    <div class="box-user">
                        <h4 class="author">Info</h4>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </h3>
                    <div class="box-user">
                        <h4 class="author">Info</h4>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="left-quote">
            <img src="images/left-quote.png" alt="quote">
        </div>
        <div class="right-quote">
            <img src="images/right-quote.png" alt="quote">
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