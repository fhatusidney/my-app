<?php include './php/processing.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PSYCHOMETRIC TEST
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <style>
    body{
      background-image: url(./assets/img/header.jpg);
    }
    .lA{
        width: 60px;
        padding: 8%;
    }
    .page-header{
          min-height: 1100px !important;
          overflow:auto;
    }
    @media (max-width: 768px) {
      body{
        background-image: url(./assets/img/mobile.jpg);
        background-size: cover;
      }
      .page-header{
          min-height: 1200px !important;
          overflow:auto;
      }
      
    }
  </style>
</head>
<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" rel="tooltip" title="Designed by CT Mohale" data-placement="bottom" target="_blank">
          PSYCHOMETRIC <img src="./assets/img/Compentency.png" width="60" alt=""> TEST
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <i class="fa fa-home fa-2x" aria-hidden="true"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
              <p>Access components</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="./about-us.php">
                <i class="now-ui-icons business_chart-pie-36"></i> Abou-Us
              </a>
              <a class="dropdown-item" style="display: <?php echo $resultsLink; ?>" href="./user-results.php">
                <i class="now-ui-icons business_chart-pie-36"></i> Results
              </a>
              <a class="dropdown-item" style="display: <?php echo $testLink; ?>" href="./user-page.php">
                <i class="now-ui-icons business_chart-pie-36"></i> Test
              </a>
            </div>
          </li>
          <li class="nav-item" style="display: <?php echo $loginDiv; ?>;">
            <a class="nav-link btn btn-neutral text-dark" data-bs-toggle="modal" data-bs-target="#LoginModal">
              <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i>
              <p>Sign in</p>
            </a>
          </li>
          <li class="nav-item" style="display: <?php echo $loginDivSession; ?> ;">
            <a class="nav-link btn btn-neutral text-dark" data-bs-toggle="modal" data-bs-target="#UserProfile">
              <i class="fa fa-user-circle fa-1x" aria-hidden="true"></i>
              <p><?php echo substr(selectAllData($conn,'user','Name','UserName',$_SESSION['email']),0,1) . ' ' . selectAllData($conn,'user','Surname','UserName',$_SESSION['email']); ?></p>
            </a>
          </li>
          <li class="nav-item" style="display: <?php echo $loginDivSession; ?> ;">

          </li>
          <li class="nav-item" style="display: <?php echo $logOutDv; ?>">
            <form method="POST">
                <a href="./index.php?logout=setToActive" name="btnLogOut" class="nav-link btn btn-neutral text-dark">
                    LogOut
                </a>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/PsychometricTe1" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/Online-Psychometric-Test-System-107997908048607/" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://instagram.com/psychometrictest01?utm_medium=copy_link" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange" >
        <div style="margin-top:180px !important; border-radius: none;">
            <div class="row" id="mainRow" style="margin: 5%; border-radius: 20px; padding: 10px; background-color: rgba(78, 78, 78, 0.432);">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                    </li>
                  </ul>
                <div class="col-sm-12">
                  <div class="card" style="border-radius: 20px;">
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="card-body text-center" style="padding-top: 20%;">
                                    <img src="./assets/img/checklist.png" width="100" alt="">
                                    <h5 class="card-title" style="padding: 5%;">Personality Test</h5> 
                                </div>
                            </div>
                            <div class="col-sm-10" style="display:<?php echo $testDivShow; ?>;">
                              <div class="card" style="border-radius: 20px;">
                                <div class="card-body ">
                                  <form method="post">
                                    <ul class="list-group">
                                      <?php while($row = $resultQuestions->fetch_assoc()): ?>
                                        <small><?php echo $row['Personality']; ?></small>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <?php echo $row['Id'] . ". " . $row['Qns']; ?>
                                            <br>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Question<?php echo $row['Id']; ?>" value="Disagree" >
                                                <label class="form-check-label" for="Question2">
                                                Disagree
                                                </label>
<br>
                                                <input class="form-check-input" type="radio" name="Question<?php echo $row['Id']; ?>" value="Agree">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Agree
                                                </label>
                                            </div>
                                        </li>
                                        <?php endwhile; ?>
                                      </ul>
                                    <button class="btn btn-primary" name="btnSubmitAnsers" style="border-radius: 20px;">Submit Answer</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-10" style="display:<?php echo $testDivHide; ?>;">
                              <div class="card" style="border-radius: 20px;">
                                <div class="card-body ">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="card-body text-center">
                                          <img src="./assets/img/1c3647552cdd47b9935ada21746f6872.gif" alt="">
                                          <h3 class="card-title">Test Complete</h3>
                                          <p class="card-text">You can now access your results!</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                          <h5 class="card-title">Test Info</h5>
                                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                          <a href="./user-results.php" class="btn btn-primary" style="border-radius: 20px;">Access Results</a>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
                <br>
                <br>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    <div class="main">
      <!-- End .section-navbars  -->
      <div class="section section-nucleo-icons bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2 class="title">VISION AND OBJECTIVE</h2>
                <h5 class="description">
                  The system is aimed at helping students to discover the main course they want to study and giving them a test based on the course they have chose and whether they are compatible for the chosen course. The test includes a various questions, the system will automatically show the available universities based on the results               </h5>
                <!-- <div class="nucleo-container">
                              <img src="assets/img/nucleo.svg" alt="">
                          </div> -->
                          <a href="./about-us.php" class="btn btn-primary btn-round btn-lg" target="_blank">About us</a>
                          <a href="./user-page.php" style="display: <?php echo $btnTestStart; ?>" class="btn btn-outline-primary btn-round btn-lg" target="_blank">Start Test</a>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="icons-container">
                  <img src="./assets/img/Compentency.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer bg-light">
        <div class=" container ">
          <hr>
          <nav>
            <ul>
              <li>
                <a href="">
                  Platform
                </a>
              </li>
              <li>
                <a href="">
                  About Us
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center" >
            <img src="./assets/img/Compentency.png" width="60" alt="">
            <h3 class="h1-seo text-center" style="text-align: right; color: rgb(44, 44, 44) !important;">Login to platform</h3>
            <form style="padding: 20px; padding-top: 5px;">
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control"placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary" style="margin: 0; border-radius: 100px; width:80%;">Login</button>
              <br>
              <a href="">Forgot Password</a><br>
              <a data-bs-toggle="modal" data-bs-target="#RegisterUser">Register</a><br>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="RegisterUser" tabindex="-1" aria-labelledby="RegisterUserLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="RegisterUserLabel"><i class="fa fa-user-circle" aria-hidden="true"></i></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6">
                  <div class="card-body text-center">
                    <h5 class="modal-title" id="RegisterUserLabel" style="padding: 20px;">Register <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> User</h5>

                    <form style="padding: 20px; padding-top: 5px;">
                      <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Surname" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" placeholder="IdNumber" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <select class="form-control" aria-label="Default select example">
                          <option selected>Select gender</option>
                          <option value="1">Male</option>
                          <option value="2">Gender</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control" placeholder="email" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <input type="password" class="form-control"placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary" style="margin: 0; border-radius: 100px; width:80%;">Register</button>
                      <br>
                    </form>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="card-body">
                    <img src="./assets/img/RegisterIcon.jpg" alt="">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>