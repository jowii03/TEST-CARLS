<?php
//include('admin_components.php');
include ('../php/database.php');
//$comp = new admin_components;
$sql1 = "SELECT COUNT(user_info_id) FROM users_info";
$result1 = $conn->query($sql1);
$row1 = mysqli_fetch_array($result1);
$sql2 = "SELECT COUNT(module_id) FROM modules";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_array($result2);
$sql3 = "SELECT COUNT(questionaire_id) FROM questionaire";
$result3 = $conn->query($sql3);
$row3 = mysqli_fetch_array($result3);
//$sql1 = "SELECT COUNT(user_info_id) FROM users_info";
//$result1 = $conn->query($sql1);
//$row1 = mysqli_fetch_array($result1);
?>
<!doctype html>
<script type="text/javascript">
    
</script>
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
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
                        <a href="index.html"><img src="img/Carls-logo.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                       <li class="nav-item">
                            <a href="dashboard.php" class="nav-link  menu-active"><i class="fa fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="users.php" class="nav-link "><i class="fa fa-users"></i><span>Users</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="assesment-viewer.php" class="nav-link"><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Assesment Viewer</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="simulation-viewer.php" class="nav-link"><i class="fa fa-car"></i><span>Simulation Score Viewer</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-upload"></i><span>Uploads</span></a>
                            <ul class="nav sub-group-menu">
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
                            <a href="dasboard.html">Home</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard Area Start Here -->
                    <div class="row gutters-20">
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="fa fa-users text-green" style="padding-top: 1em;"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Users</div>
                                        <div class="item-number"><span class="counter" ><?php echo $row1[0]; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-books  text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Modules</div>
                                        <div class="item-number"><span class="counter" ><?php echo $row2[0]; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-classmates text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Questions</div>
                                        <div class="item-number"><span class="counter" ><?php echo $row3[0]; ?></span></div>
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
                                <h3>New Users</h3>
                              
                            </div>
                            
                        </div>
                        
                          <?php
                        $sql = "SELECT * FROM users_info LIMIT 5";
                          $result = $conn->query($sql);
                          ?>
                           <div   class="table-responsive">
                            <table class="table display text-nowrap" id="wew" name="wew">
                                <thead>
                                    <tr>
                                        <th>
                                            <!--<div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">-->
                                                <label class="form-check-label">ID</label>
                                            <!--</div>-->
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Birthday</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                            $bdate = new DateTime($row["user_birthdate"]);
                           ?>
                                 <tr>
                                    <td>
                                        <!--<div class="form-check">
                                            <input type="checkbox" class="form-check-input">-->
                                            <label class="form-check-label">#<?php echo $row["user_info_id"]; ?></label>
                                        <!--</div>-->
                                    </td>
                                    <td class="text-center"><img src="img/figure/<?php echo $row['user_photo']; ?>" alt="#"></td>
                                    <td><?php echo $row["user_lastname"].' '.$row["user_firstname"].' '.$row["user_middlename"]; ?></td>
                                    <td><?php echo $bdate->format('Y-m-d'); ?></td>
                                    <td><?php echo $row["user_phonenumber"]; ?></td>
                                    <td><?php echo $row["user_email"]; ?></td>
                                    <td>Active</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item btnupdate" id="<?php echo $row["user_info_id"]; ?>" 
                                                    fn="<?php echo $row["user_firstname"]; ?>"
                                                    mn="<?php echo $row["user_middlename"]; ?>"
                                                    ln="<?php echo $row["user_lastname"]; ?>"
                                                    bd="<?php echo $bdate->format('Y-m-d'); ?>"
                                                    cp="<?php echo $row["user_phonenumber"]; ?>"
                                                    em="<?php echo $row["user_email"]; ?>"
                                                ><i class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-ban text-red"></i>Suspend</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>   
                           <?php
                          }
                          ?></tbody>
                                </table>
                            </div>
                    </div>
                </div>
                   
                
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
    <!-- Counterup Js -->
    <script src="js/jquery.counterup.min.js"></script>
     <!-- Main Js -->
    <script src="js/main.js"></script>
    <!-- Moment Js -->
    <script src="js/moment.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>


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