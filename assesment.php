<?php
 session_start();
 if (isset($_SESSION['account_username'])) {

include ('question.php');

   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CarLS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
     <!-- Favicon -->
    <link rel="shortcut icon" href="images/Carls-logo.png">
</head>
<style type="text/css">
     @media only screen and (max-width: 425px){
        .guide{
            font-size: 13px ;
        }
        .form p{
            font-size: 13px;
            margin-bottom: 10px;
        }
        .form label{
            font-size: 10px;
        }
        .form input{
            height: 10px;.

        }

     }
     
.custom-box{
	max-width: 700px;
	background-color: #FF6762;
	margin: 40px auto;
	padding: 30px;
	border-radius: 10px;
	animation: fadeInRight 1s ease;
}

@keyframes fadeInRight{
	0%{
		transform: translateX(40px);
		opacity: 0;
	}
	100%{
		transform: translateX(0px);
		opacity: 1;
	}
}

.custom-box::before,
.custom-box::after{
	content: '';
	clear: both;
	display: table;
}

.custom-box.hide{
	display: none;
}

.home-box h3{
	font-size: 18px;
	color: #000000;
	font-weight: 500;
	margin-bottom: 15px;
	line-height: 25px;
}

.home-box p{
	font-size: 16px;
	color: #000000;
	font-weight: 400;
	margin-bottom: 10px;
	line-height: 22px;
}

.home-box p span{
	font-weight: 500;
}

.home-box .btn{
	padding-top: 20px;
}

.btn{
	padding: 15px 45px;
	background-color: #009688;
	border: none;
	color: #ffffff;
	border-radius: 5px;
	font-size: 18px;
	font-family: 'Montserrat', sans-serif;
	cursor: pointer;
	display: inline-block;
}

.quiz-box .question-number,
.quiz-box .question-text,
.quiz-box .option-container,
.quiz-box .next-question-btn,
.quiz-box .answers-indicator{
	width: 100%;
	float: left;
}

.quiz-box .question-number{
	font-size: 26px;
	color: #009688;
	font-weight: 600;
	border: 1px solid #cccccc;
	line-height: 25px;
}
.quiz-box .question-text{
	font-size: 24px;
	color: #000000;
	line-height: 25px;
	font-weight: 400;
	padding: 20px 0;
	margin:0;
}

.quiz-box .option-container .option{
	background-color: #cccccc;
	padding:13px 15px;
	font-size: 18px;
	line-height: 15px;
	color: #000000;
	border-radius: 5px;
	margin-bottom: 10px;
	cursor: pointer;
	text-transform: capitalize;
	opacity: 0;
	animation: fadeIn 0.3s ease forwards;
	position: relative;
	overflow: hidden;
}
@keyframes fadeIn{
	0%{
		opacity:0;
	}
	100%{
		opacity: 1;
	}
}

.quiz-box .option-container .option.already-answered{
	pointer-events: none;
}

.quiz-box .option-container .option.correct::before{
	content: '';
	position: absolute;;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: green;
	z-index: -1;
	animation: slideInLeft .5s ease forwards;
}

@keyframes slideInLeft{
	0%{
		transform: translateX(-100%);
	}
	100%{
		transform: translateX(0%);
	}
}

.quiz-box .option-container .option.wrong::before{
	content: '';
	position: absolute;;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: red;
	z-index: -1;
	animation: slideInLeft .5s ease forwards;
}

.quiz-box .option-container .option.wrong{
	color: #ffffff;
}

.quiz-box .option-container .option.correct{
	color: #ffffff;
}

.quiz-box .btn{
	margin: 15px 0;
}

.quiz-box .answers-indicator{
	border-top: 1px solid #cccccc;
}

.quiz-box .answers-indicator div{
	height: 40px;
	width: 40px;
	display: inline-block;
	background-color: #cccccc;
	border-radius: 50%;
	margin-top: 15px;
	margin-right: 20px;
}

.quiz-box .answers-indicator div.correct{
	background-color: green;
	background-image: url("images/correct1.png");
	background-size: 100%;
	background-repeat: no-repeat;
	background-position: center;
}`
.quiz-box .answers-indicator div.wrong{
	background-color: red;
	background-image: url("images/wrong.jpg");
	background-size: 120%;
	background-repeat: no-repeat;
	background-position: center;
}

.result-box{
	text-align: center;
}

.result-box.hide{
	display: none;
}

.result-box h1{
	font-size: 25px;
	line-height: 25px;
	color: #009688;
}

.result-box table{
	width: 100%;
	border-collapse: collapse;
	margin: 30px 0;
}

.result-box table td{
	border: 1px solid #cccccc;
	padding: 8px 15px;
	font-weight: 500;
	color: #000000;
	width: 50%;
	text-align: left;
	font-size: 18px;
}

.reult-box .btn{
	margin-right: 20px;
}
      @media only screen and (max-width: 320px){
        .guide{
            font-size: 13px ;
        }
        .form p{
            font-size: 13px;
            margin-bottom: 10px;
        }
        .form label{
            font-size: 10px;
        }
        .form input{
            height: 10px;.

        }
        .form{
            margin-left: 1em !important;
        }

     }
  
   

</style>
<body>
   <header>        
        <div class="main-menu title" style="">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img class="brand-logo" src="images/Carls-logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="animate-nav collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item active">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="navbar-item">
                                <a href="modules.php" class="nav-link">Modules</a>
                            </li>
                            <li class="navbar-item">
                                <a href="license-info.php" class="nav-link">License Info</a>
                            </li>
                            <?php
                            if (isset($_SESSION['account_username'])) { ?>
                            <li class="navbar-item">
                                <a href="assesment.php" class="nav-link">Assesment</a>
                            </li>
                            <li class="navbar-item">
                                <a href="profile.php" class="nav-link"><?php echo $_SESSION['account_username']; ?> 
                                </a>
                            </li>
                             <li class="navbar-item">
                                <a href="#" id="btnlogout" name="btnlogout" class="nav-link">Log Out</a>
                            </li>
                        <?php } else{ ?>
                            <li class="navbar-item">
                                <a href="login.php" class="nav-link">Sign in</a>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   

    <!-- Quiz/ Assessment Start here-->
   <div style="margin-bottom: 30px;">
        <div class="container">
           
            <div class="form" style="margin-left: 2em;">
                <form>
                    <div>
                    <div class="home-box custom-box">
<h1>Instructions</h1>
<p>Total number of Questions: <span class="total-questions"></span></p>
<button type="button" class="btn" onclick="startQuiz()">START QUIZ</button>
</div>

<div class="quiz-box custom-box hide">
	<div class="question-number">
		
	</div>

	<div class="question-text">
		
	</div>

	<div class="option-container">
		
	</div>

	<div class="next-question-btn">
		<button class="btn" type="button" onclick="next()">Next</button>
	</div>

	<div class="answers-indicator">
		<?php
		for ($i=1; $i <=20 ; $i++) { 
			echo "<div></div>";
		}
		?>
	</div>
</div>

<div class="result-box custom-box hide">
	<h1>Quiz Result</h1>
	<table>
		<tr>
			<td>Total Question</td>
			<td><span class="total-question" id="total-question"></span></td>
		</tr>
		<tr>
			<td>Correct</td>
			<td><span class="total-correct" id="total-correct"></span></td>
		</tr>
		<tr>
			<td>Wrong</td>
			<td><span class="total-wrong" id="total-wrong"></span></td>
		</tr>
		<tr>
			<td>Percentage</td>
			<td><span class="percentage" id="percentage"></span></td>
		</tr>
		<tr>
			<td>Your Total Score</td>
			<td><span class="total-score" id="total-socre"></span></td>
		</tr>
	</table>
	
	<button type="button" id="btnsubmit" class="btn">
	Back to Menu</button>
</div>

                    </div>

                </form>
            </div>

        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="js/app.js"></script>


    <footer id="contact">
        <div class="container">
           
               
                   
                        <div class="col-md-12">
                            <div class="address">
                                <h4>List of LTO in Manila</h4>
                                <h6>LTO Navotas</h6>
                                <h6>LTO Mandaluyong</h6>
                                <h6>LTO National Capital Region (NCR)</h6>
                                <h6>LTO Malabon</h6>
                                <h6>LTO Las Piñas</h6>
                                <h6>LTO Makati</h6>
                                <h6>LTO La Loma</h6>
                                <h6>LTO Malabon</h6>

                            </div>
                        </div>

            
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2020. CarLS UCC</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
              
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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

	<script>
$(document).ready(function(){
	$('#btnsubmit').click(function(){

		var totalQuestions = $(".total-question").text();
		var correctAnswers = $(".total-correct").text();
		var wrongAnswers = $(".total-wrong").text();
		var percentage = $(".percentage").text();
    $.ajax({
	    type: "POST", //request type
        url: "php/assessment1.php", //the page containing php script
        data: {
            correctAnswers: correctAnswers,
            wrongAnswers: wrongAnswers,
            totalQuestion: totalQuestions,
			percentage: percentage,

        },
        success: function(result) {
            alert(result);
            if (result == "success") {
                Swal.fire({
                        title: "Assessment Done!",
                        confirmButtonText: 'Ok',
                        showCloseButton: true
                    })
                    .then(function(result) {
                        if (result.value) {
                            window.location = "index.php";
                        }
                    });
            } else {
                Swal.fire(data, 'Could Not Save to Database', 'error');
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

<?php
 }
 else{
	include "404.html";
 }
?>