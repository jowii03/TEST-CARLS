<?php
  include ('php/database.php');
  session_start();

?>
<!DOCTYPE html>
<html lang="en">


<style type="text/css">
   
   @media only screen and (max-width: 768px){
      .profile-image{
        width: 6em !important;
        height: 6em !important; 
      }
      .btn-editimage{
       width: 50%;
      }
       .btn-editdetails{
       width: 15%;
       margin-top: -30px !important;
     }
     .btn-view{
      width: 70%;
     }
     }
   @media only screen and (max-width: 425px){
     .section-title3{
      font-size: 15px !important;
     }
     table{
      font-size: 13px !important;
     }
     .profile-scores{
      width: 6em !important;
        height: 8em !important;
     }
   }  
  @media only screen and (max-width: 375px){
    .btn-editdetails{
       width: 20%;
       margin-top: -30px !important;
     }
     .btn-view{
      width:100%;
     }
    .section-title3{
      font-size: 15px !important;
     }
     table{
      font-size: 13px !important;
     }
     .profile-scores{
      width: 6em !important;
        height: 8em !important;
     }
  
  }   
   
</style>
<?php include 'header.php'; ?>
<body>
    

<?php
  if (isset($_SESSION['account_username'])) {

    $sql = "SELECT * FROM account WHERE account_username = '".$_SESSION['account_username']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $rowid = $row['account_id'];
    $sql1 = "SELECT * FROM users_info WHERE account_id = '$rowid'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    
  }
?>

   <section class="static about-sec mb-5 mt-2 wow fadeIn">
        <div class="container ">
          <div class="row">
           <div class="col-md-4">
                <div  style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);border-radius: 3px;">
                   <div class="other-card card" style="border: none;padding-top: 2em;">
                    <img  src="images/parking.jpg" style="border-radius: 50%;width: 8em;height: 8em;margin-left: auto;margin-right: auto;" class="profile-image card-img-top" alt="...">
                    <div class="card-body" style="">
                      <h4 class="other-h4" style="margin-bottom: 2em;text-align: center;">Hello!,  
                        <?php echo $row1['user_firstname']." ".$row1['user_lastname']; ?></h4>

                       <a href="#" class="btn-editimage " style="" data-toggle="modal" data-target="#editpicture"><span ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>  Edit</a>
                      
                    </div>
                  </div>                     
                    </div>
           </div>

           <div class="col-md-8" >
                <div  style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);border-radius: 3px;padding: .5em 1em; ">
                        <div class="account-details">
                            <div class="header" style="display: block;">
                                <h2 class="section-title3 " style="">Account Details:<span></span></h2>
                                <!--Button for Edit-->
                                <a href="#" class="btn-editdetails pull-right " data-toggle="modal" data-target="#editprofile" style="margin-top: -40px"><span><i class="fa fa-pencil-square-o" aria-hidden="true" id="btnedit" name="btnedit" ></i></span>  Edit
                                </a> <!--End Button for Edit-->
                            </div>    
                            <table style="font-size: 15px; margin-bottom: .5em;">
                              <tr>
                                <th style="width: 50%;">Name:</th>
                                <td><?php echo $row1['user_firstname']." ".$row1['user_lastname'];  ?></td>
                              </tr>
                              <tr>
                                <th>Birthday:</th>
                                <td><?php echo $row1['user_birthdate']; ?></td>
                              </tr>
                              <tr>
                                <th>Phone Number:</th>
                                <td><?php echo $row1['user_phonenumber']; ?></td>
                              </tr>
                              <tr>
                                <th>Email Address: </th>
                                <td><?php echo $row1['user_email']; ?></td>
                              </tr>
                            </table>
                           

                        </div>
               </div>

                <div  style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);border-radius: 3px;padding: .5em 1em; margin-top: 1em;">
                    <div class="account-details">
                        <h2 class="section-title3 " style="">Assesment Details:<span></span></h2>
                            <div class="row">
                                  <div class="col-md-6 col-6  mt-2 mb-2">
                                     <div class="other-card card" style="padding-top: 1em;">
                                      <img src="images/Car.jpg" style="border-radius: 50%;width: 7em;height:7em;margin-left: auto;margin-right: auto;" class="profile-scores card-img-top" alt="...">
                                      <div class="animate-nav2 card-body">
                                        <h4 class="other-h4 "  style="margin-bottom: .5em;text-align: center;text-decoration: none;color: #434a54">Exam</h4>
                                       <h4 class="other-h4 "  style="margin-bottom: 1.5em;text-align: center;">Recent Score: 90 </h4>
                                         <a href="#"  class="btn-view " style=""><span><i class="fa fa-eye" aria-hidden="true"></i></span>  View all</a>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-6 col-6  mt-2 mb-2">
                                     <div class="other-card card" style="padding-top: 1em;">
                                      <img  src="images/Car.jpg" style="border-radius: 50%;width: 7em;height:7em;margin-left: auto;margin-right: auto;" class="profile-scores card-img-top" alt="...">
                                      <div class="animate-nav2 card-body">
                                        <h4 class="other-h4 "  style="margin-bottom: .5em;text-align: center;text-decoration: none;color: #434a54">Simulator</h4>
                                       <h4 class="other-h4 "  style="margin-bottom: 1.5em;text-align: center;">Recent Grade: A
                                        </h4>
                                        <a href="#"  class="btn-view " style=""><span><i class="fa fa-eye" aria-hidden="true"></i></span>  View all</a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            
                    </div>          
                </div>


                 <div  style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);border-radius: 3px;padding: .5em 1em;margin-top: 1em; ">
                        <div class="account-details">
                            <div class="header" style="display: block;">
                                <h2 class="section-title3 " style="">Assesment Score History<span></span></h2>

                                
                            </div>    
                             <table class="table table-bordered">
                                    <thead style=" font-weight: 600;">
                                        <tr>
                                            <th>Date</th>
                                            <th>Score</th>
                                            <th>Percentage</th>
                                 
                                        </tr>
                                    </thead>
                                  
                                    <tbody style="font-size: 12px;" >
                                     
                                            <tr>
                                                <td style="">11-21-20</td>
                                                <td style="color: #00A3CB">50</td>
                                                <td >100% </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                 <td style="">11-23-20</td>
                                                <td style="color: #00A3CB">50</td>
                                                <td >100% </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                 <td style="">11-25-20</td>
                                                <td style="color: #00A3CB">50</td>
                                                <td >100% </td>
                                                 
                                                
                                            </tr>
                    
                                      </tbody>
                                </table>
                        </div>
               </div> 

               <div  style="-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
                    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);border-radius: 3px;padding: .5em 1em;margin-top: 1em; ">
                        <div class="account-details">
                            <div class="header" style="display: block;">
                                <h2 class="section-title3 " style="">Sumilation Record  <span></span></h2>

                                
                            </div>    
                             <table class="table table-bordered">
                                    <thead style=" font-weight: 600;">
                                        <tr>
                                            <th>Date</th>
                                            <th>Stage</th>
                                            <th>Time</th>
                                            <th>Grade</th>
                                 
                                        </tr>
                                    </thead>
                                  
                                    <tbody style="font-size: 12px;" >
                                     
                                            <tr>
                                                <td style="">11-21-20</td>
                                                <td style="color: #00A3CB">Stage 1</td>
                                                <td >01:30</td>
                                                <td>S</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                  <td style="">11-23-20</td>
                                                <td style="color: #00A3CB">Stage 2</td>
                                                <td >01:32</td>
                                                <td>S</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                  <td style="">11-25-20</td>
                                                <td style="color: #00A3CB">Stage 3</td>
                                                <td >01:45</td>
                                                <td>S</td>
                                                 
                                                
                                            </tr>
                    
                                      </tbody>
                                </table>
                        </div>
               </div>                         
          </div>
           </div>
           </div> 
        </div>
    </section>
   


    <!-- Modal -->
   

         <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofile" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                     <h2 class="section-title3 " style="">Update Details:<span></span></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body static about-sec">
                  
                      
      
                                <div class="form">
                                    <form>
                                        <div class="row">
                                        

                                            <div class="col-md-12">
                                                <input type="text" placeholder="Update Firstname" required>
                                             
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Update Middlename" required>
                                            
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Update Lastname" required>
                                              
                                            </div>
                                            <div class="col-md-12">
                                                <input type="date" placeholder="Update Birthdate" required>
                                               
                                            </div>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="Update Email Address" required>
                                            
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" maxlength="11" placeholder="Update Phonenumber" required>
                                             
                                            </div>
                                          
                                        </div>
                                    </form>
                                </div>
                        
                        
   
               
                    
                  </div>
                  <div class="modal-footer">
                   
                    <button type="submit" form="form1"  class="btn btn-primary"  value="Submit">Yes</button>
                     <button type="button" class="btn btn-danger"  data-dismiss="modal">No</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->




         <div class="modal fade" id="editpicture" tabindex="-1" role="dialog" aria-labelledby="editprofile" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                     <h2 class="section-title3 " style="">Update Picture:<span></span></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body static about-sec">
                     <form>
                                        <div class="row">
                                        

                                            <div class="col-md-12">
                                                <input type="file" placeholder="Update Picture" required>
                                             
                                            </div>
                                        
                                          
                                        </div>
                                    </form>
     
                    
                  </div>
                  <div class="modal-footer">
                   
                    <button type="submit" form="form1"  class="btn btn-primary"  value="Submit">Yes</button>
                     <button type="button" class="btn btn-danger"  data-dismiss="modal">No</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

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