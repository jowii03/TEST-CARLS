
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

   <section class="static about-sec mb-5 mt-2">
        <div class="container wow fadeIn">
            <h2 class="section-title wow fadeIn" style="text-align: left;">Forgot Password <span></span></h2>
            <p>We can help you to recover your account.</p>
            <div class="form">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <input class="username" id="email" type="email" required="" name="email" placeholder="Enter Email Address" >                            
                        </div>

                        <div class="col-lg-8 col-md-12">
                        <button class="btn pull-left" id="btnsubmit" name="btnsubmit">Submit</button>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
          $(document).ready(function(){
            $('#btnsubmit').click(function(){
                var email = $('#email').val();
                $.ajax({
                    method: "POST",
                    url: "php/forgotpass.php",
                    data: {
                        email:email
                    },
                    success:function(data){
                        if(data == "email not found"){
                            Swal.fire('Email not sent', 'There is no such email in our database', 'error'); 
                        }
                        else{
                            Swal.fire({
                                title: "An email was sent to " + email + "",
                                confirmButtonText: 'Ok',
                                showCloseButton: true
                            })
                            .then(function (result) {
                                if (result.value) {
                                    window.location = "index.php";
                                }
                            })  
                        }
                    }
               });
            });
        });
    </script>


<?php include 'footer.php';?>
   
    <scrip src="js/jquery.min.js"></scrip>
    <scrip src="js/bootstrap.min.js"></scrip>
    <scrip src="js/jquery.scrollUp.min.js"></scrip>
    <scrip src="js/scrollUp.js"></scrip>
    <scrip type="text/javascript" src="js/owl.carousel.min.js"></scrip>
    <scrip src="js/owl.js"></scrip>
    <scrip src="js/wow.js"></scrip>
    <scrip src="js/wow.min.js"></scrip>
    
</body>

</html>