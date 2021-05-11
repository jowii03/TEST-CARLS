<?php
    session_start();
    if (isset($_GET['vkey'])) {   
    if(empty($_GET['vkey'])){
        include ('404.html');
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
    <?php    echo $_GET['vkey']; echo "<br>";  echo $_GET['email']; ?>
    <div class="static about-sec mb-5 mt-2">
        <div class="container wow fadeIn">
            <h2 class="section-title wow fadeIn" style="text-align: left;">Forgot Password <span></span></h2>
            <p>We can help you to recover your account.</p>
            <div class="form">
                    <div class="row">
                    <div class="col-md-5">
                            <input class="password" id="fpassword" name="fpassword" type="password" require="" placeholder="Enter Password" >
                        </div>
                        <div class="col-md-5">
                            <input class="password" require="" id="repass" name="repass" type="password" placeholder="Repeat Password" >
                        </div>
                        <div class="col-md-5">
                            <input class="hidden" require="" id="email" name="email" type="hidden" value="<?php echo $_GET['email']; ?>" >
                        </div>

                    <div class="col-lg-8 col-md-12">
                        <button type="submit" class="btn pull-left" name="resetpassw" id="resetpassw">Confirm</button>
                    </div>
                    </div>
            </div>
        </div>
</div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
          $(document).ready(function(){
            $('#resetpassw').click(function(){
                var password = $('#fpassword').val();
                var repass = $('#repass').val();
                var email = $('#email').val();
               
                if(password == ""|| repass == ""){
                    Swal.fire('Invalid Password', 'Dont leave blanks', 'error');
                }
                else if(password != repass){
                    Swal.fire('Password did not match', 'please try again', 'error');
                }
                else{ 
                $.ajax({
                    method: "POST",
                    url: "php/updatepassword.php",
                    data: {
                        password:password,
                        email:email
                    },
                    success:function(data){
                        if(data == "1"){
                            Swal.fire({
                                title: "Account Update Successfully",
                                confirmButtonText: 'Ok',
                                showCloseButton: true
                            })
                            .then(function (data) {
                                if (data.value) {
                                    window.location = "login.php";
                                }
                            })  
                        }
                        else{
                            Swal.fire('Oops!', data, 'error');
                          }
                        }
               });
            }
            });
        });
    </script>

   <?php include 'footer.php'; ?>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   
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
<?php
    }
}
?>