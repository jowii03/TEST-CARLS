<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
<body>
   <section class="static about-sec mb-5 mt-2">
        <div class="container wow fadeIn">
            <h2 class="section-title wow fadeIn" style="text-align: left;">Sign in <span></span></h2>
            <p>Welcome to CAR Learning Simulator.</p>
            <div class="form">
                    <div class="row">
                        <div class="col-md-5">
                            <input class="username" id="username" name="password" placeholder="Enter User Name" >
                        </div>
                        <div class="col-md-5">
                            <input class="password" id="password" name="password" type="password" placeholder="Enter Password" >
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <button class="btn pull-left" id="btnlogin" name="btnlogin">Sign in</button>
                            <h5>not Registered? <a href="register.php">Register here</a></h5>
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
            $('#btnlogin').click(function(){
                var username = $('#username').val();
                var password = $('#password').val();
            if (username == "" || password == "") {
                Swal.fire('Log in error...', 'Please Dont Leave Blanks', 'error');
            }
            $.ajax({
                type: "POST",
                url: "php/login.php",
                data: {
                    username:username,
                    password:password
                },
                success:function(data){
                    if (data == "1") {
                        Swal.fire({
                                title: "Log in Success!",
                                confirmButtonText: 'Ok',
                                showCloseButton: true
                            })
                            .then(function (result) {
                                if (result.value) {
                                    window.location = "index.php";
                                }
                            })
                }
                    else if(data == "0"){
                        Swal.fire('Log in Error!', 'Email not yet Verified. Please Check you email.', 'error');          
                    }
                    else{
                        Swal.fire('Log in Error!', 'Either username or password is Incorrect', 'error');          
                    }
                  }
            });
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