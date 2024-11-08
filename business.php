<?php 
        ini_set("display_errors", "1");
        ini_set("display_startup_errors","1");
        error_reporting(E_ALL);

        include("PHP/config.php");
        include("PHP/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Business Single</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon"> -->

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
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
                                    // echo "Client ID not found in the session.";
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

    <!-- Job Single Content Starts -->
    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-content">
                        <!-- <div class="single-content1">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>Assistant Executive - Production/ Quality Control</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                        <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                                    </ul>
                                </div>
                                <div class="job-btn align-self-center">
                                    <a href="#" class="forth-btn">full time</a>
                                </div>
                            </div>
                        </div> -->
                        <?php 
                            if(isset($_GET['id'])) {
                                $p_id =  $_GET['id'];
                                $query = "SELECT * FROM business WHERE p_id = $p_id";
                                $query_run = mysqli_query($conn, $query);

                                if($query_run && mysqli_num_rows($query_run) > 0) {
                                    $business = mysqli_fetch_assoc($query_run);
                                    // Display the details of the business
                                    ?>
                                    <!-- <div class="single-business-details">
                                        <h2><?php //echo $business['name']; ?></h2>
                                        <p><?php //echo $business['description']; ?></p>
                                        <p>Email: <?php //echo $business['email']; ?></p>
                                        <p>Phone: <?php //echo $business['phone']; ?></p>
                                        <p>Location: <?php //echo $business['building_name'].', '.$business['city']; ?></p>
                                        <p>Category: <?php //echo $business['category']; ?></p>
                                        <p>Pricing: <?php //echo $business['pricing']; ?></p>
                                    </div> -->
                                    
                                    <div class="single-content2 py-4">
                                        <h2 style="margin-bottom: 10px;"><?php echo $business['name']; ?><a href="booking.php" class="template-btn" style="margin-left: 79px;;">book now</a></h2>       
                                        <p><?php echo $business['description']; ?></p>
                                    </div>
                                    <div class="single-content3 py-4">
                                        <h4>Contact Information</h4>
                                        <ul class="mt-3">
                                            <li class="mb-2"><?php echo $business['email']; ?></li>
                                            <li class="mb-2"><?php echo $business['phone']; ?></li>
                                        </ul>
                                        <!-- <span class="ml-4">03</span> -->
                                    </div>
                                    <!-- <div class="single-content4 py-4">
                                        <h4>Location</h4>
                                        <p>We are based in:</p>
                                        <ul class="mt-3">
                                            <li><?php //echo $business['building_name'].', '.$business['city']; ?></li>
                                            <li class="mb-2">Mate dropped a clanger cuppa I chinwag  one plastered.</li>
                                            <li class="mb-2">Dropped a clanger cuppa I chinwag  one plastered chee</li>
                                            <li>Cuppa I chinwag  one plastered cheesed.</li>
                                        </ul>
                                    </div> -->
                                    <div class="single-content4 py-4">
                                        <h4>Location</h4>
                                        <p>We are based in:</p>
                                        <ul class="mt-3">
                                            <li class="mb-2"><?php echo $business['building_name'].', '.$business['city']; ?></li>
                                            <!-- <li class="mb-2">Mate dropped a clanger cuppa I chinwag  one plastered.</li>
                                            <li class="mb-2">Dropped a clanger cuppa I chinwag  one plastered chee</li>
                                            <li>Cuppa I chinwag  one plastered cheesed.</li> -->
                                        </ul>
                                    </div>
                                    <div class="single-content5 py-4">
                                        <h4>Category</h4>
                                        <p><?php echo $business['category']; ?></p>
                                    </div>
                                    <div class="single-content6 py-4">
                                        <h4>Pricing</h4>
                                        <span><?php echo $business['pricing']; ?></span>
                                    </div>
                                    <div class="single-content3 py-4">
                                        <h4>Portfolio</h4>
                                        <p>To view our work, you can check us out on our socials/website:</p>  
                                        <ul class="mt-3">
                                            <li class="mb-2"><i class="fa fa-instagram"></i>  <a href="<?php echo $business['ig_handle']; ?>"><?php echo $business['name']; ?></a></li>
                                            <li class="mb-2"><i class="fa fa-dribbble"></i>  <a href="<?php echo $business['website']; ?>"><?php echo $business['website']; ?></a></li>
                                        </ul>
                                        <!-- <div class="social-icons">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div> -->
                                        <p></p>                                    
                                    </div>


                                    <?php
                                } else {
                                    // No record found for the provided ID
                                    echo "Business not found.";
                                }
                            } else {
                                // No business ID provided in the URL
                                echo "Business ID not provided.";
                            }                                                          
                        
                        ?>

                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="single-item mb-4">
                            <h4 class="mb-4">jobs type</h4>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>Full Time</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>Part Time</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between">
                                <span>Internship</span>
                                <span class="text-right">25 job</span>
                            </a>
                        </div>
                        <div class="single-item mb-4">
                            <h4 class="mb-4">job by location</h4>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>New York</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>California</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>Swizerland</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>Canada</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between">
                                <span>Sweden</span>
                                <span class="text-right">25 job</span>
                            </a>
                        </div>
                        <div class="single-item mb-4">
                            <h4 class="mb-4">salary range</h4>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>$20,000-$30,000</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between mb-3">
                                <span>$25,000-$45,000</span>
                                <span class="text-right">25 job</span>
                            </a>
                            <a href="#" class="sidebar-btn d-flex justify-content-between">
                                <span>$40,000-$70,000</span>
                                <span class="text-right">25 job</span>
                            </a>
                        </div>
                        <div class="single-item">
                            <h4 class="mb-4">filter by salary</h4>
                            <input type="text" id="range" value="" name="range" />
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Job Single Content End -->


    <!-- Newsletter Area Starts -->
    <section class="newsletter-area job-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Get job information daily</h2>
                        <p>Subscribe to our newsletter and get a coupon code!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Area End -->


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
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
