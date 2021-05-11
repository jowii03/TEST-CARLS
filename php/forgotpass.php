<?php

 include ("database.php");
	session_start();

	require '../vendor/Exception.php';
	require '../vendor/PHPMailer.php';
	require '../vendor/SMTP.php';
    // Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	require '../vendor/autoload.php';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);


 $email = $_POST['email'];


 $sql = "SELECT * FROM users_info WHERE user_email = '$email'";
 $result = $conn->query($sql);
 $count = mysqli_num_rows($result);
 $vkey = md5(date());

//  $selector = bin2hex(random_bytes(8));
//  $token = random_bytes(32);
//  $expires = date("U") + 900;
$url =  "http://localhost/CarLS/forgot-password-s2.php?vkey=".$vkey."&email=".$ses_email."";
 if($count > 0){
   echo "1";
  
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'teamwan.carls@gmail.com';                     // SMTP username
        $mail->Password   = 'parokyanibasa';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('teamwan.carls@gmail.com', 'CARLS');
        $mail->addAddress($email);     // Add a recipient
                
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = '  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
    <!--[if gte mso 9]><xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <title>Account Activation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <meta name="format-detection" content="telephone=no">
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    
    <!--<![endif]-->
    <style type="text/css">
    body {
      margin: 0 !important;
      padding: 0 !important;
      -webkit-text-size-adjust: 100% !important;
      -ms-text-size-adjust: 100% !important;
      -webkit-font-smoothing: antialiased !important;
    }
    img {
      border: 0 !important;
      outline: none !important;
    }
    p {
      Margin: 0px !important;
      Padding: 0px !important;
    }
    table {
      border-collapse: collapse;
      mso-table-lspace: 0px;
      mso-table-rspace: 0px;
    }
    td, a, span {
      border-collapse: collapse;
      mso-line-height-rule: exactly;
    }
    .ExternalClass * {
      line-height: 100%;
    }
    .em_defaultlink a {
      color: inherit !important;
      text-decoration: none !important;
    }
    span.MsoHyperlink {
      mso-style-priority: 99;
      color: inherit;
    }
    span.MsoHyperlinkFollowed {
      mso-style-priority: 99;
      color: inherit;
    }
     @media only screen and (min-width:481px) and (max-width:699px) {
    .em_main_table {
      width: 100% !important;
    }
    .em_wrapper {
      width: 100% !important;
    }
    .em_hide {
      display: none !important;
    }
    .em_img {
      width: 100% !important;
      height: auto !important;
    }
    .em_h20 {
      height: 20px !important;
    }
    .em_padd {
      padding: 20px 10px !important;
    }
    }
    @media screen and (max-width: 480px) {
    .em_main_table {
      width: 100% !important;
    }
    .em_wrapper {
      width: 100% !important;
    }
    .em_hide {
      display: none !important;
    }
    .em_img {
      width: 100% !important;
      height: auto !important;
    }
    .em_h20 {
      height: 20px !important;
    }
    .em_padd {
      padding: 20px 10px !important;
    }
    .em_text1 {
      font-size: 16px !important;
      line-height: 24px !important;
    }
    u + .em_body .em_full_wrap {
      width: 100% !important;
      width: 100vw !important;
    }
    }
    </style>
    </head>
     
    <body class="em_body" style="margin:0px; padding:0px;" bgcolor="#efefef">
     
            <!--Content Text Section-->
                     <tr>
              <td style="padding:35px 70px 30px;" class="em_padd" valign="top" bgcolor="#efefef" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody><tr>
                    <td style="font-family:"Open Sans", Arial, sans-serif; font-size:16px; line-height:30px; color:#ffffff;" valign="top" align="center">
    Reset your password by pressing the url below.</td>
                  </tr>
                  <tr>
                    <td style="font-size:0px; line-height:0px; height:15px;" height="15">&nbsp;</td>
    <!--—this is space of 15px to separate two paragraphs ---->
                  </tr>
                  <tr>
                    <td style="font-family:"Open Sans", Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding-bottom:12px;" valign="top" align="center">------------------------
    Username: '.$email.'
    ------------------------</td>
                  </tr>
                  <tr>
                    <td class="em_h20" style="font-size:0px; line-height:0px; height:25px;" height="25">&nbsp;</td>
    <!--—this is space of 25px to separate two paragraphs ---->
                  </tr>
    <tr>
                    <td style="font-family:"Open Sans", Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; text-transform:uppercase; letter-spacing:2px; padding-bottom:12px;" valign="top" align="center">Please click this link to activate your account:
                        '.$url.'
              
    </td>
                  </tr>
                </tbody></table></td>
            </tr>
     
            <!--//Content Text Section--> 
            <!--Footer Section-->
            <tr>
              <td style="padding:38px 30px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody><tr>
                    <td style="padding-bottom:16px;" valign="top" align="center"><table cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody><tr>
                          <td valign="top" align="center"><a href="#" target="_blank" style="text-decoration:none;"><img src="images/Carls-logo.png" style="display:block; font-family:Arial, sans-serif; font-size:14px; line-height:14px; color:#ffffff; max-width:26px;" width="26" border="0" height="26"></a></td>
                          <td style="width:6px;" width="6">&nbsp;</td>
                          <td valign="top" align="center"><a href="#" target="_blank" style="text-decoration:none;"><img src="images/tw.png" alt="tw" style="display:block; font-family:Arial, sans-serif; font-size:14px; line-height:14px; color:#ffffff; max-width:27px;" width="27" border="0" height="26"></a></td>
                          <td style="width:6px;" width="6">&nbsp;</td>
                          <td valign="top" align="center"><a href="#" target="_blank" style="text-decoration:none;"><img src="images/yt.png" alt="yt" style="display:block; font-family:Arial, sans-serif; font-size:14px; line-height:14px; color:#ffffff; max-width:26px;" width="26" border="0" height="26"></a></td>
                        </tr>
                      </tbody></table></td>
                  </tr>
                  <tr>
                    <td style="font-family:"Open Sans", Arial, sans-serif; font-size:11px; line-height:18px; color:#999999;" valign="top" align="center"><a href="#" target="_blank" style="color:#999999; text-decoration:underline;">PRIVACY STATEMENT</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">TERMS OF SERVICE</a> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">RETURNS</a><br>
                      © 2020 TEAMWAN-CARLS. All Rights Reserved.<br>
                      If you do not wish to receive any further emails from us, please <a href="#" target="_blank" style="text-decoration:none; color:#999999;">unsubscribe</a></td>
                  </tr>
                </tbody></table></td>
            </tr>
            <tr>
              <td class="em_hide" style="line-height:1px;min-width:700px;background-color:#ffffff;"><img alt="" src="images/spacer.gif" style="max-height:1px; min-height:1px; display:block; width:700px; min-width:700px;" width="700" border="0" height="1"></td>
            </tr>
          </tbody></table></td>
      </tr>
    </tbody></table>
    <div class="em_hide" style="white-space: nowrap; display: none; font-size:0px; line-height:0px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
    </body></html>'; // Our message above including the link';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
    ?>
    
    <?php
        echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
      
        <script type="text/javascript">
        $(document).ready(function() {
    swal({ 
      title: "Success!",
       text: "An email has sent to '.$email.', Reset your password.",
        type: "success" 
      }).then(function() {
        // Redirect the user
        window.location.href = "login.php";
        })});
    </script>';
    
    
        } 
      catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
 }

 else{
     echo "email not found";
 }