<?php
include('admin_components.php');
include ('../php/database.php');
$comp = new admin_components;

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
                        <a href="index.html"><img src="img/Carls-logo.png" alt="logo"></a>
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
                            <a href="simulation-viewer.php" class="nav-link"><i class="fa fa-car"></i><span>Simulation Score Viewer</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-upload"></i><span>Uploads</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="upload-modules.php" class="nav-link "><i class="fas fa-angle-right"></i>Modules</a>
                                </li>
                                <li class="nav-item">
                                    <a href="upload-assesment.php" class="nav-link menu-active "><i class="fas fa-angle-right"></i>Assesments</a>
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
                        <li>Uploads</li>
                        <li>Assesments</li>
                       
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Modules Area Start Here -->

                <div class="card height-auto" style="margin-top: -10px;">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Assements Table</h3>
                            </div>
                            
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-8-xxxl col-xl-8 col-lg-8 col-12 form-group">
                                    <input type="text" placeholder="Search" class="form-control">
                                </div>
                               
                                <div class="col-2-xxxl col-xl-2 col-lg-2 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gray">SEARCH</button>
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
                                       
                                        <th>Assement Question</th>
                                        <th>Assement Answer</th>
                                       
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                        $sql = "SELECT * FROM questionaire";
                                        $result = $conn->query($sql);
                                        while($row = mysqli_fetch_array($result)){

                                    ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#<?php echo $row["questionaire_id"]; ?></label>
                                            </div>
                                        </td>
                                        
                                        <td><?php echo $row["question_description"]; ?></td>
                                        <td><?php echo $row["question_answer_correct"]; ?></td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                	<a class="dropdown-item btnupdate" id="<?php echo $row["questionaire_id"]; ?>" qd="<?php echo $row["question_description"]; ?>" 
                                                		qac="<?php echo $row["question_answer_correct"]; ?>"
                                                		qaw1="<?php echo $row["question_answer_wrong1"]; ?>"
                                                		qaw2="<?php echo $row["question_answer_wrong2"]; ?>"
                                                		><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item btndelete" id="<?php echo $row["questionaire_id"]; ?>"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                     <?php } ?>
                                    <!--tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">1</label>
                                            </div>
                                        </td>
                                        
                                        <td>What are Road Signs?</td>
                                        <td>A</td>
                                        
                                       
                              
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editprofile"><i
                                                            class="fas fa-times text-red"></i>Remove</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr-->
                                    
                                    
                                   
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

  <!-- Modal Area Starts Here -->

                 <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofile" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="padding: 2rem;">
                  <div class="modal-header">
                     <h2 class="modal-title">Update Assessment Question:<span></span></h2>
                    <button type="button" style="font-size: 30px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                  
                      
 							<form class="" id="frmQuestionaireEdit">
                                
                                

                                    

                                     <div class="col-xl-12 col-lg-12 col-12 form-group">
                                     	
                                         <label>Assessment Question</label>
                                         <input type="text" id="aq" name="aq" placeholder="Update Assessment Question" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Assessment Correct Answer</label>
                                         <input type="text" id="aca" name="aca" placeholder="Update Assessment Answer" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Assessment Wrong Choice 1</label>
                                         <input type="text" id="ac1" name="ac1" placeholder="Update Assessment Choice 1" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Assessment Wrong Choice 2</label>
                                         <input type="text" id="ac2" name="ac2" placeholder="Update Assessment Choice 2" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                            	
                                   

            	  <div class="modal-footer">
                   
                    
                      <button type="submit"  class="fw-btn-fills btn-success "  value="Submit">Submit</button>
                     <button type="button" class="fw-btn-fills btn-danger "  data-dismiss="modal">Cancel</button>
                  </div>            

                                    
                                    
                               
                               
                            </form>
                  
            
                  </div>
                  
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

             <div class="modal fade" id="addmodule" tabindex="-1" role="dialog" aria-labelledby="addmodule" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="padding: 2rem;">
                  <div class="modal-header">
                     <h2 class="modal-title">Add Module Deltails:<span></span></h2>
                    <button type="button" style="font-size: 30px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                  
                      
 							<form class="" id="frmQuestionaireAdd">
                                
                                

                                    
                                     <div class="col-xl-12 col-lg-12 col-12 form-group">
                                     	
                                         <label>Assessment Question</label>
                                         <input type="text" id="aaq" name="aaq" placeholder="Add Assessment Question" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Assessment Correct Answer</label>
                                         <input type="text" id="aaca" name="aaca" placeholder="Add Assessment Answer" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Assessment Wrong Choice 1</label>
                                         <input type="text" id="aac1" name="aac1" placeholder="Add Assessment Choice 1" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                                         <label>Assessment Wrong Choice 2</label>
                                         <input type="text" id="aac2" name="aac2" placeholder="Add Assessment Choice 2" class="form-control" style="border: .5px solid #5A6375;margin-top: -20px;" required="">
                                    </div>

                            		

                            
                                   

                  <div class="modal-footer">
                   
                    
                      <button type="submit"  class="fw-btn-fills btn-success "  value="Submit">Submit</button>
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

</body>


</html>
<?php
$comp->questionaire_ajx();
?>