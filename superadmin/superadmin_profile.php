

<!Doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
     <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CarLS Super Admin</title>
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

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="dashboard.php">
                        <img src="img/Carls-logo2.png"  alt="logo" style="width: 12rem;">
                    </a>
                </div>
                  <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Marky Ong</h5>
                                <span>Super Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Steven Zone</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                  
                    
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/Carls-logo.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                       <li class="nav-item">
                            <a href="dashboard.php" class="nav-link "><i class="fa fa-home"></i><span>Home</span></a>
                        </li>
                        
                     
                        
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>CarLS</h3>
                    <ul>
                        <li>
                            <a href="dasboard.html">My Profile</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard Area Start Here -->
                    <div class="row gutters-20">
                    <div class="col-xl-4 col-sm-12 col-md-8 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green " style="width: 8rem;"> 
                                        <img class="profile-admin-img" src="img/figure/admin.jpg" alt="Admin">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title" style="color: #434A54">Marky Ong</div>
                                        <div class="item-number"><span class="counter" ></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>


                <div class="card height-auto" style="margin-top: -10px;">
                    <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Account Details</h3>
                            </div>        
                                <div class="col-2-xxxl col-xl-2 col-lg-3 col-6 form-group">
                                     <a href="#" data-toggle="modal" data-target="#editprofile"><button class="fw-btn-fills btn-success"><i class="fas fa-edit text-white"></i> Edit </button></a>
                                </div> 
                           </div>   
                               
                                 <div class="table-responsive">
                                    <table class="table display data-table text-nowrap" >
                                           <tr>
                                            <th style="width: 50%;">Name:</th>
                                            <td>Sample</td>
                                          </tr>
                                          <tr>
                                            <th>Birthday:</th>
                                            <td>Sample</td>
                                          </tr>
                                          <tr>
                                            <th>Phone Number:</th>
                                            <td>Sample</td>
                                          </tr>
                                          <tr>
                                            <th>Email Address: </th>
                                            <td>Sample</td>
                                          </tr>
                                        
                                    </table>
                                </div>
                            
                        </div>
                        
                </div>
                   

                   <!-- Modal Area Starts Here -->

                 <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofile" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="padding: 2rem;">
                  <div class="modal-header">
                     <h2 class="modal-title">Update Profile:<span></span></h2>
                    <button type="button" style="font-size: 30px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                  
                      
                            <form class="" id="frmModuleEdit">
                                
                                

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Profile Photo</label>
                                         <input type="file" id="image" name="image" placeholder="" class="form-control" style="height: 5rem;padding: 1.2rem;border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                     <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>First Name</label>
                                         <input type="text" id="mName" name="mName" placeholder="Update First Name" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                        
                                    </div>

                                   <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Last Name</label>
                                         <input type="text" id="mName" name="mName" placeholder="Update Last Name" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                         
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Middle Name</label>
                                         <input type="text" id="mName" name="mName" placeholder="Update Middle Name" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                         
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Email Address</label>
                                         <input type="emial" id="mName" name="mName" placeholder="Update Email Address" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                         
                                    </div>

                                    

                            
                                   

                                    
                <div class="modal-footer">
                   
                    
                    <button type="submit" class="fw-btn-fills btn-success"  value="Submit">Submit</button>
                    <button type="button" class="fw-btn-fills btn-danger "  data-dismiss="modal">Cancel</button>
                </div>
                                    
                                    
                               
                               
                            </form>
                  
            
                  </div>
                  
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
                
                <!-- Dashboard Settings Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">(C) 2020.   <a href="#">CarLS UCC</a> </div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
   <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
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

    <script type="text/javascript">
    
        $('#wew').dataTable( {
    paging: false,
    searching: true,
    lengthMenu: false,
    info: false,

} );
        
              
    </script>

</body>

</html>

<!--script type="text/javascript">
    $(document).ready(function(){
   


       });
</script-->

