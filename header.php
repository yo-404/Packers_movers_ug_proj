<?php
  session_start();
  if(isset($_SESSION) && isset($_SESSION['payment_status']))
  {
    if($_SESSION['payment_status'] != "")
    {
      echo '<script>alert("'.$_SESSION["payment_status"].'");</script>';
      $_SESSION['payment_status'] = "";
    }
    unset($_SESSION['payment_status']);

  }
  if(isset($_GET['message']))
  {
    if($_GET['message'] != "")
    {
      $msg = $_GET['message'];
      echo '<script>alert("'.$msg.'");</script>';
    }
    $_GET['message'] = "";
    unset($_GET['message']);
  }
?>

<!DOCTYPE html>
<html>
<head>

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

  <title>Logistico Calculate cost</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- External CSS and JS -->
  <script type="text/javascript" src="external.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css">

</head>

<body >

<header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                            <a href="index.html" ><h1><text color="black">P&Y packers</text></h1>
                        
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
                                           
                                            <li><a href="contact1.php">Help And Support</a></li>
                                           
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
    

      
      <!-- Login, Sign Up and Logout links-->
      <?php
        if(isset($_SESSION['username']))
        {
          echo '<form class="form-inline" method="get" action="logout.php">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item" style="margin: 5px">
                   
                  </ul>
                </form>';
        }
        else if(!isset($_SESSION['username']))
        {
          echo '<form class="form-inline">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item" style="margin: 5px">
                      <a class="btn btn-outline-primary" data-toggle="modal" data-target="#modalLoginForm" style="color:#ccc;">Login</a>
                    </li>
                    <li class="nav-item" style="margin: 5px">
                      <a class="btn btn-outline-primary" data-toggle="modal" data-target="#modalRegisterForm" style="color:#ccc;">Sign Up</a>
                    </li>
                  </ul>
                </form>';
        }
      ?>

      <!-- Modal form for Sign up. It pops up when sign up button on the navigation bar is clicked -->
      <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <hr>
            <form method="post" action="register.php">
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <input class="form-control" name="name" placeholder="Name..." required><br>
                  <input class="form-control" name="email" type="email" placeholder="Email..." required><br>
                  <input class="form-control" name="password" type="password" placeholder="Password..." required><br>
                  <input class="form-control" name="cPassword" type="password" placeholder="Confirm Password..." required><br>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" type="submit" name="submit">Sign up</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal form for Login. It pops when login link is clicked on the navigation bar -->
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Login</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <hr>
            <form method="post" action="login.php">
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <input class="form-control" name="email" type="email" placeholder="Email..." required><br>
                  <input class="form-control" name="password" type="password" placeholder="Password..." required><br>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" type="login" name="login">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </nav>
  <!-- Navigation Bar Ends Here -->