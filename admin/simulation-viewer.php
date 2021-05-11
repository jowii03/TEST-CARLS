<?php
//include('admin_components.php');
include ('../php/database.php');
//$comp = new admin_components;
session_start();
if (isset($_SESSION['account_username']) && isset($_SESSION['account_type'])  ) {
?>
<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
                                <h5 class="item-title">Stevne Zone</h5>
                                <span>Admin</span>
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
                        <a href="dashboard.php"><img src="img/Carls-logo.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                       <li class="nav-item">
                            <a href="dashboard.php" class="nav-link "><i class="fa fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="users.php" class="nav-link "><i class="fa fa-users"></i><span>Users</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="assesment-viewer.php" class="nav-link"><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Assesment Viewer</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="simulation-viewer.php" class="nav-link menu-active"><i class="fa fa-car"></i><span>Simulation Score Viewer</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-upload"></i><span>Uploads</span></a>
                            <ul class="nav sub-group-menu ">
                                <li class="nav-item">
                                    <a href="upload-modules.php" class="nav-link"><i class="fas fa-angle-right"></i>Modules</a>
                                </li>
                                <li class="nav-item">
                                    <a href="upload-assesment.php" class="nav-link"><i class="fas fa-angle-right"></i>Assesments</a>
                                </li>
                                
                            </ul>
                        </li>

                         <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Sections</span></a>
                           <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Header</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-slider.html" class="nav-link "><i class="fas fa-angle-right"></i>Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-mysimulator.html" class="nav-link "><i class="fas fa-angle-right"></i>My Simulator</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-aboutus.html" class="nav-link "><i class="fas fa-angle-right"></i>About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-tips.html" class="nav-link "><i class="fas fa-angle-right"></i>Tips</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-lto.html" class="nav-link"><i class="fas fa-angle-right"></i>List of LTO</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="ui-footer.html" class="nav-link"><i class="fas fa-angle-right"></i>Footer</a>
                                </li>
                            </ul>
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
                            <a href="dasboard.php">Home</a>
                        </li>
                        <li>Simulation Score Viewer</li>
                       
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Users Area Start Here -->

                <div class="card height-auto" style="margin-top: -10px;">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Simulations Table</h3>
                            </div>
                            
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <!--div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll"-->
                                                <label class="form-check-label">ID</label>
                                            <!--/div-->
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Stage</th>
                                        <th>Time</th>
                                        <th>Grade</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM simulation";
                                        $result = $conn->query($sql);
                                        while($row = mysqli_fetch_array($result)){
                                            $sdate = new DateTime($row["simulation_date"]);
                                            $sql2 = "SELECT * FROM users_info WHERE user_info_id = ".$row['users_info_id']."";
                                            $result2 = $conn->query($sql2);
                                            $row2 = mysqli_fetch_array($result2);

                                    ?>
                                    <tr>
                                        <td>
                                            <!--div class="form-check">
                                                <input type="checkbox" class="form-check-input"-->
                                                <label class="form-check-label">#<?php echo $row["users_info_id"]; ?></label>
                                            <!--/div-->
                                        </td>
                                        <td class="text-center"><img src="img/figure/<?php echo $row2["user_photo"]; ?>" alt="student"></td>
                                        <td><?php echo $row2["user_lastname"].' '.$row2["user_firstname"].' '.$row2["user_middlename"]; ?></td>
                                        <td><?php echo $row["simulation_stage"]; ?></td>
                                        <td><?php echo $row["simulation_time"]; ?></td>
                                        <td><?php echo $row["simulation_score"]; ?></td>
                                        <td><?php echo $sdate->format("Y-m-d"); ?></td>
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item btnview" id="<?php echo $row["users_info_id"]; ?>" 
                                                    srcOfImg="img/figure/<?php echo $row2["user_photo"]; ?>"
                                                    fn="<?php echo $row2["user_lastname"]." ".$row2["user_firstname"]." ".$row2["user_middlename"]; ?>"
                                                    sst="<?php echo $row["simulation_stage"]; ?>"
                                                    st="<?php echo $row["simulation_time"]; ?>"
                                                    ssc="<?php echo $row["simulation_score"]; ?>"
                                                    sd="<?php echo $sdate->format("Y-m-d"); ?>"
                                                ><i
                                                            class="fas fa-eye text-dark-pastel-green"></i>View</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    
                                   
                                  <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

  <!-- Modal Area End Here -->
                 <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofile" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="padding: 2rem;">
                  <div class="modal-header">
                     <h2 class="modal-title">Simulation Deltails:<span></span></h2>
                    <button type="button" style="font-size: 30px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                  
                      

                        <div class=" account-settings-box">
                          
                               
                                <div class="user-details-box">
                                    <div class="item-img" style="text-align: center;">
                                        <img id="avatar" src="img/figure/user.jpg" alt="user" style="width: 15rem;" >
                                    </div>
                                    <div class="item-content">
                                        <div class="info-table table-responsive" style="margin-top: -20px;">
                                            <table class="table text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td id="fullName" class="font-small text-dark-medium">Joser Palmon Rizal</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stage:</td>
                                                        <td id="stage" class="font-small text-dark-medium">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time:</td>
                                                        <td id="time" class="font-small text-dark-medium">01:30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade:</td>
                                                        <td id="grade" class="font-small text-dark-medium">S</td>
                                                    </tr>
                                                     <tr>
                                                        <td>Date:</td>
                                                        <td id="date" class="font-small text-dark-medium">11/22/20</td>
                                                    </tr>

                                        
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                  
            
                  </div>
                  <div class="modal-footer">
                   
                    
                     <button type="button" class="fw-btn-fills  btn-success "  data-dismiss="modal">Okay</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            

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

</body>


</html>
<script type="text/javascript">
     $(document).ready(function(){
    //Update//
       $(document).on('click', '.btnview', function(){
        
        //$('#user_id').val($(this).attr('id'));
        $('#avatar').prop("src",$(this).attr('srcOfImg'));
        $('#fullName').text($(this).attr('fn'));
        $('#stage').text($(this).attr('sst'));
        $('#time').text($(this).attr('st'));
        $('#grade').text($(this).attr('ssc'));
        $('#date').text($(this).attr('sd'));
        //$('.modal-title').text('Update User');
        $('#editprofile').modal('show');
        }); 
    }); 
</script>

<?php
 }
 else{
	echo "Please log in to view this page";
 }
?>