<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Bookings</title>

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
                // $pid = mysqli_real_escape_string($conn,$_POST['p_id']); 
                $business = mysqli_real_escape_string($conn,$_POST['business']);
                $type = mysqli_real_escape_string($conn,$_POST['type']);
                $desired_date = mysqli_real_escape_string($conn,$_POST['desired_date']);
                $time = mysqli_real_escape_string($conn,$_POST['time']);
                $location = mysqli_real_escape_string($conn,$_POST['location']);

                $to = "20s01abt007@anu.ac.ke";
                $header = "Booking a Photo Session $email";
                $subject = "Confirming Photo Shoot Appointment: $name";
                $message = "Hi, I would like to book a session at $location on $desired_date at $time ";
                if(mail($to, $subject, $message, $header)){
                    echo "Email Sent Successfully.";
                }
                else {
                    echo "Failed to send email.";
                }
                      
                $sql =  "INSERT INTO session (client_id,name,email,business,type,desired_date,time,location) VALUES(NULL,'$name','$email','$business','$type','$desired_date','$time','$location')";
                mysqli_query($conn, $sql);
                // header("Location: payment.php");
                // exit; 
                
    
            }
            else { 
           
        ?>

    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
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
                            <li><a href="about.html">payment</a></li>
                            <li><a href="about.html">reviews</a></li>

                            <!-- <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="job-search.html">Job Search</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li> -->
                            <li class="menu-btn">
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#myProfile">
                                My Profile
                            </button>
                                <!-- <a href="signin.php" class="login">log in</a>
                                <a href="register.php" class="template-btn">sign up</a> -->
                            </li>
                        </ul>
                        <!-- <div class="hearer_icon d-flex"> -->
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

                                // if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['client_id'])) {
                                //     $id = $_SESSION['client_id'];
                                //     $query = mysqli_query($conn, "SELECT * FROM client WHERE client_id='$id'") or die("Select Error");
                                //     $fetch = mysqli_fetch_array($query);
                                
                                //     // Rest of the code that uses $fetch array
                                // } else {
                                //     // Handle the case when client_id is not set in the session
                                //     echo "Client ID not found in the session.";
                                // }
                            ?>

                            
                                    <ul>
                                    <!-- <a href="signin.php" class="btn_3"> -->
                                    <!-- <button type="button" class="template-btn" style="height:40px" data-toggle="modal" data-target="#myProfile">
                                        My Profile
                                    </button> -->
                                        <!-- <li>Welcome:<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php //echo $fetch['First_Name']; ?>&nbsp;<?php //echo $fetch['Last_Name'];?></a></li> -->
                                    </ul>
                                    
                                    
                            
                              
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                                
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Job Single</h2>
                        <p>There spirit beginning bearing the open at own every give appear in third you sawe two boys</p>
                    </div>
                </div>
            </div>
        </div> -->
    </header>
    <!-- Header Area End -->


    <!-- Map Area Starts -->
    <!-- <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="mapBox" class="mapBox" 
                        data-lat="40.701083" 
                        data-lon="-74.1522848" 
                        data-zoom="13" 
                        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                        data-mlat="40.701083"
                        data-mlon="-74.1522848">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Map Area End -->
    <br><br><br>

    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
        <h4>Booking Information</h4>
        <br>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST"> 
                        <div class="left">
                        <input type="hidden" class="input-field" name="client_id" id="client_id" required>   
                        <input type="text" placeholder="Name" class="input-field" name="name" id="name" pattern="[A-Za-z]+" title="Name should only contain letters" autocomplete="off" required>
                        <input type="email" placeholder="Email address" class="input-field" name="email" id="email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" title="Must be a valid email" autocomplete="off" required>
                        <!-- <input type="hidden" class="input-field" name="p_id" id="p_id" required>    -->
                        <input type="text" placeholder="Photography business" class="input-field" name="business" id="business" pattern="[A-Za-z]+" title="Name should only contain letters" autocomplete="off" required>
                        <input type="text" placeholder="Type of photography session being booked" class="input-field" name="type" id="type" pattern="[A-Za-z]+" title="Name should only contain letters" autocomplete="off" required>
                        <input type="date" placeholder="Desired date" class="input-field" name="desired_date" id="desired_date" autocomplete="off" required>
                        <input type="time" placeholder="Time" class="input-field" name="time" id="time" autocomplete="off" required>
                        <input type="text" placeholder="Location" class="input-field" name="location" id="location" pattern="[A-Za-z]+" title="Location should only contain letters" autocomplete="off" required>             
                        <input type="submit" name="submit" class="template-btn" value="Proceed to Payment" required>


                        </div>
                        <!-- <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea> 
                        </div>   -->
                    </form>
                </div>
                <!-- <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h4>California, United States</h4>
                            <p>Santa monica bullevard</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h4>00 (440) 9865 562</h4>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h4>support@colorlib.com</h4>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div> -->
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
