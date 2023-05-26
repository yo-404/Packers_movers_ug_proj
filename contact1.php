<?php
require 'credential.php';
//index.php

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';
$mobile = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}

	if(empty($_POST["mobile"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Contact no.</label></p>';
	}
	else
	{
		$mobile = clean_text($_POST["mobile"]);
		if(!preg_match("/^[0-9]*$/",$mobile))
		{
			$error .= '<p><label class="text-danger">Only numbers are allowed</label></p>';
		}
	}


	if(empty($_POST["subject"]))
	{
		$error .= '<p><label class="text-danger">Subject is required</label></p>';
	}
	else
	{
		$subject = clean_text($_POST["subject"]);
	}
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}
	if($error == '')
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '587';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = EMAIL;					//Sets SMTP username
		$mail->Password = PASS;					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $_POST["email"];					//Sets the From email address for the message
		$mail->FromName = $_POST["name"];				//Sets the From name of the message
		$mail->AddAddress('ghostridernetflix@gmail.com', 'Support@packers');		//Adds a "To" address
		
		//$mail->AddCC($_POST["email"], $_POST["name"]);	Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = $_POST["subject"];				//Sets the Subject of the message
		$mail->Body = '<h1>New Email Query !!!</h1><h3><br><br><br>Name:-'.$_POST["name"].'<br> <br>Email ID :-'.$_POST["email"].'<br><br>Mobile No. :-'.$_POST["mobile"].'<br><br>Subject :-'.$_POST["subject"].'<br><br> Message :-'.$_POST["message"].'</h3>';
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thank you for contacting us.We Will get back to you soon</label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error</label>';
    }
    
    $mail->AddAddress('', '');
    $name = '';
		$subject = '';
		$message = '';
		$mobile = '';
    $mail->FromName = 'Packerz and Movers';
		$mail->AddAddress($_POST["email"], 'Support@Packers');
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);
		$mail->Subject = 'Thanks for Contacting Packers and Movers';
    $mail->Body = 'Thanks for Contacting Us,We will respond to your email soon';
    $mail->Send();
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
		$mobile = '';


	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


        <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                            <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> yogesh@xyz.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <!-- <a class="boxed-btn3-line" href="#">Get Free Quote</a> -->
                                    <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
                                    <a href="logout.php" class="btn btn-danger">SignOut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="welcome.php">home</a></li>
                                            <li><a  href="service1.php">Services</a></li>
                                            <li><a href="About1.php">about</a></li>
                                            <li><a href="estimate.php">Cost Estimation</a></li>
                                            <li><a href="calculate_cost.php">Slot Booking</a></li>
                                            <li><a href="contact1.php">Help and Support</a></li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <!-- <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <br><BR><HR>
<!-- 
        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div> -->

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Somewhere in Lohegaon ,411047</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>yogesh@xyz.com<br>
                    <!-- contact@example.com</p> -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 8698244423<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <h3><?php echo $error; ?></h3>
            <form method="post" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?php echo $name; ?>"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" <?php echo $email; ?> />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Contact Number"  value="<?php echo $mobile; ?>"/>
                <div class="validate"></div>
              </div>
               <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" value="<?php echo $subject; ?>"/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea  name="message" rows="5" class="form-control" data-msg="Please write something for us" placeholder="Message"><?php echo $message; ?></textarea>
                <div class="validate"></div>
              </div>
              
              <div class="text-center"><button type="submit" name="submit" value="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
    <hr>
        </div>

      </div>
    </section>
    <hr>
    <br><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.6086741671847!2d73.92519731436974!3d18.59167307184923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDM1JzMwLjAiTiA3M8KwNTUnMzguNiJF!5e0!3m2!1sen!2sin!4v1585967743187!5m2!1sen!2sin" width="1000" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->


  <!-- whatsapp -->

  


   <!-- <div id="my-mail"> 
   <a href="mailto:someone@example.com?Subject=Hello%20again" class="float" target="_blank"> 
    <i class="fa fa-whatsapp my-mail"></i></a>
    </div>
  -->
   


  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
   <!-- JS here -->
   <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
</body>

</html>