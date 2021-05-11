<?php
include ('../php/database.php');



?>
<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
                                <h5 class="item-title">Stevne Zone</h5>
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
                            <a href="dasboard.html">Home</a>
                        </li>
                        <li>Admin Users</li>
                       
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Modules Area Start Here -->

                <div class="card height-auto" style="margin-top: -10px;">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Admin Table</h3>
                            </div>
                            
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-8-xxxl col-xl-8 col-lg-8 col-12">
                                    
                                </div>
                                <div class="col-2-xxxl col-xl-2 col-lg-2 col-12">
                                    <a href="#"><button class="fw-btn-fills btn-danger"><i class="fa fa-ban"></i> Suspend</button></a>
                                </div>

                                <div class="col-2-xxxl col-xl-2 col-lg-2 col-12 form-group">
                                    <a href="#" data-toggle="modal" data-target="#addmodule"><button class="fw-btn-fills btn-primary"><i class="fa fa-plus"></i> ADD</button></a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">

                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                       
                                        <th width="30px;">Photo</th>
                                        <th>Fullname</th>
                                        <th>Account Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    
                                        $query = mysqli_query($conn, "SELECT * FROM `admin_info`") or die(mysqli_error());
                                            while($fetch = mysqli_fetch_array($query)){
                                    ?>
                                
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"><?php echo $fetch['admin_info_id']?></label>
                                                    </div>
                                                </td>
                                           
                                                <td><img src="img/figure/<?php echo $fetch['admin_photo']; ?>"></td>
                                                <td><?php echo $fetch['admin_firstname']." " .$fetch['admin_middlename']." " .$fetch['admin_lastname'] ?></td>
                                                <td>Active</td>
                                                
                                               
                                      
                                                <td>
                                                 
                                                   
                                                        <div class="">
                                                        	<a href="#"><button class="fw-btn-fills btn-danger" style="padding: 0px 0px;"><i class="fa fa-ban"></i> Suspend</button></a>
                                                            
                                                        </div>
                                                    
                                                </td>
                                            </tr>
                              
                                   
                                    <?php
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

  <!-- Modal Area Starts Here -->

                

             <div class="modal fade" id="addmodule" tabindex="-1" role="dialog" aria-labelledby="addmodule" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="padding: 2rem;">
                  <div class="modal-header">
                     <h2 class="modal-title">Add New Admin:<span></span></h2>
                    <button type="button" style="font-size: 30px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                  
                      
 							<form action="add_admin.php" method="post" enctype="multipart/form-data">
                                
                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                        
                                         <label>Admin Photo</label>
                                         <input type="file" id="admimg" name="admimg" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    
                                     <div class="col-xl-12 col-lg-12 col-12 form-group">
                                     	
                                         <label>Firstname</label>
                                         <input type="text" id="fname" name="fname" placeholder="Enter Firstname" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Middlename</label>
                                         <input type="text" id="mname" name="mname" placeholder="Enter Middlename" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Lastname</label>
                                         <input type="text" id="lname" name="lname" placeholder="Enter Lastname" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                   

                          <div class="modal-footer">
                           
                            
                            <button  type="submit"  class="fw-btn-fills btn-success "  value="Submit">Submit</button>
                             <button type="button" class="fw-btn-fills btn-danger "  data-dismiss="modal">Cancel</button>
                          </div>                  

                                    
                                    
                               
                               
                            </form>
                  
            
                  </div>
                  
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            
<!--Modal Ends Here-->
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

