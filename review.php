<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Reviews</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon"> -->

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php 
            ini_set("display_errors", "1");
            ini_set("display_startup_errors","1");
            error_reporting(E_ALL);

            include("PHP/config.php");
            include("PHP/session.php");

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                // $id = $_SESSION['client_id'];
                $name = mysqli_real_escape_string($conn,$_POST['name']); 
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $rating = mysqli_real_escape_string($conn,$_POST['rating']);
                $description = mysqli_real_escape_string($conn,$_POST['description']);

                $sql =  "INSERT INTO review (client_id,name,email,rating,description) VALUES(NULL,'$name','$email','$rating','$description')";
                mysqli_query($conn, $sql);
                header("Location: homepage.php");
                exit; 
                 
            }
            else { 

?>
    <!-- Preloader Starts -->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="homepage.php">                        
                                        <img src="assets/images/photopedia5.png" alt="" />                                      
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="custom-navbar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>  
                        <div class="main-menu main-menu-light">
                            <ul>
                                <li class="active"><a href="homepage.php">home</a></li>
                                <li><a href="about.html">services</a></li>
                                <li><a href="booking.php">booking</a></li>
                                <li><a href="payment.php">payment</a></li>
                                <li><a href="about.html">reviews</a></li>

                                <li class="menu-btn">
                                    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#myProfile">
                                        My Profile
                                    </button>
                                </li>
                            </ul>

                            <?php                             
                               if (isset($_SESSION['email'])) {
                                $email = $_SESSION['email'];
                                error_log('sessionid: ' . $_SESSION['email']);

                                $query = mysqli_query($conn, "SELECT * FROM client WHERE email ='$email'") or die("Select Error");
                                $fetch = mysqli_fetch_array($query);
                            
                                // Rest of the code that uses $fetch array
                                } else {
                                    // Handle the case when client_id is not set in the session
                                    ///echo "Client Id not found in the session.";
                                }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Give A Review</h2>
                        <p>Help others out by sharing your experience</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

<br><br>
    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <!-- <i class="fa fa-home"></i> -->
                        </div>
                        <div class="info-text">
                            <!-- <h4>California, United States</h4>
                            <p>Santa monica bullevard</p> -->
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <!-- <i class="fa fa-phone"></i> -->
                        </div>
                        <div class="info-text">
                            <!-- <h4>00 (440) 9865 562</h4>
                            <p>Mon to Fri 9am to 6 pm</p> -->
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <!-- <i class="fa fa-envelope-o"></i> -->
                        </div>
                        <div class="info-text">
                            <!-- <h4>support@colorlib.com</h4>
                            <p>Send us your query anytime!</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-11">
                    <form method="POST">
                        <div class="left">
                            <input type="text" placeholder="Enter your name" class="input-field" name="name" id="name" pattern="[A-Za-z]+" title="Name should only contain letters" autocomplete="off" required>
                            <input type="email" placeholder="Enter your email address" class="input-field" name="email" id="email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" title="Must be a valid email" autocomplete="off" required>
                            <input type="number" placeholder="Rate Us (Between 1-10)" name="rating" id="rating" min="1" max="10" step="1" required>
                        </div>
                        <div class="right">
                            <textarea name="description" id="description" cols="20" rows="7" placeholder="Enter Message" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->


    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">Our Pages</h3>
                                <ul>
                                    <li class="mb-2"><a href="#">about</a></li>
                                    <li class="mb-2"><a href="#">portfolio</a></li>
                                    <li class="mb-2"><a href="#">services</a></li>
                                    <li><a href="#">reviews</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">newsletter</h3>
                                <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                                <form action="#">
                                    <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                    <button type="submit" class="template-btn">subscribe now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-1 col-lg-3">
                            <div class="single-widge-home">
                                <h3 class="mb-4">instagram feed</h3>
                                <div class="feed">
                                    <img src="assets/images/feed1.jpg" alt="feed">
                                    <img src="assets/images/feed2.jpg" alt="feed">
                                    <img src="assets/images/feed3.jpg" alt="feed">
                                    <img src="assets/images/feed4.jpg" alt="feed">
                                    <img src="assets/images/feed5.jpg" alt="feed">
                                    <img src="assets/images/feed6.jpg" alt="feed">
                                    <img src="assets/images/feed7.jpg" alt="feed">
                                    <img src="assets/images/feed8.jpg" alt="feed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Modal -->
        <div class="modal fade" id="myProfile" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">My Profile</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php
                        $email = $_SESSION['email'];
                    
                        $query = mysqli_query($conn, "SELECT * FROM client WHERE email ='$email'") or die("Select Error");
                        $fetch = mysqli_fetch_array($query);
                    ?>

                <form  enctype='multipart/form-data' method="POST">
                    <center>
                    <table>       
                        <tr>
                            <td class="profile">Name:</td><td class="profile">&nbsp;<?php echo $fetch['fname'];?>&nbsp;<?php echo $fetch['lname'];?></td>
                        </tr>
                        <tr>
                            <td class="profile">Email Address:</td><td class="profile">&nbsp;<?php echo $fetch['email'];?></td>
                        </tr>								
                        <tr>
                            <td class="profile">Phone Number:</td><td class="profile">&nbsp;<?php echo $fetch['phone'];?></td>
                        </tr>
                    </table>
                </center>

                </div>
                <div class="modal-footer">
                <a href="account.php?id=<?php echo $fetch['client_id']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
                <a href="signin.php"><input type="button" class="btn btn-danger" name="" value="Log Out"></a>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                </div>
            </div>
            
            </div>
        </div>

    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/gmaps.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
    
    <?php } ?> 
</body>
</html>
