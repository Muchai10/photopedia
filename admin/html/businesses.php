<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Photography Businesses</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <!-- <img src="../assets/img/favicon/logo1.png" alt=""> -->
              <span class="app-brand-text demo menu-text" style="color: purple;">PhotoPedia</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            </li>
                        
            <!-- Components -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li> -->
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Manage</span>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="clients.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Clients</div>
              </a>
            </li>

            <!-- Cards -->
            <li class="menu-item">
              <a href="businesses.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Photographers</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Reports</span>
            </li>

            <li class="menu-item">
              <a href="bookings.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="User interface">Bookings</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="transaction.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="User interface">Transactions</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="reviews.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Reviews</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Peter Kitale</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><span>Photography Businesses</span></h4>

              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header"></h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Instagram Username</th>
                          <th>Website</th>
                          <th>City</th>
                          <th>Building name</th>
                          <th>Category</th>
                          <th>Pricing</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                            // ini_set("display_errors", "1");
                            // ini_set("display_startup_errors","1");
                            // error_reporting(E_ALL);

                            
                            include_once "PHP/config.php";
                            $sql="SELECT * from business";
                            $result=$conn-> query($sql);
                            $count=1;
                            if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
           
                        ?>
                        <tr>
                          <td><?=$row["p_id"]?></td>
                          <td><img src="Photos/<?php echo $row['image'];?>" alt="" height = "100px" width = "100px"></td>
                          <td><?=$row["name"]?></td>
                          <td><?=$row["email"]?></td>
                          <td><?=$row["phone"]?></td>
                          <td><?=$row["ig_handle"]?></td>
                          <td><?=$row["website"]?></td>
                          <td><?=$row["city"]?></td>
                          <td><?=$row["building_name"]?></td>
                          <td><?=$row["category"]?></td>
                          <td><?=$row["pricing"]?></td>
                          <td>
                          <!-- <button type="button" class="btn btn-success" style="height:40px" data-bs-toggle="modal" data-bs-target="#editModal">
                            Edit
                          </button> -->
                          <button type="button" class="btn btn-success" style="height:40px"><a href="edit2.php?editid=<?php echo $row['p_id']?>" class="text-white">
                            Edit
                            </a>
                          </button>
                          </td>
                          <td> 
                          <!-- <button type="button" class="btn btn-danger" style="height:40px" data-bs-toggle="modal" data-bs-target="#myModal">
                            Delete
                          </button> -->
                          <button type="button" class="btn btn-danger" style="height:40px"><a href="PHP/delete.php?id=<?php echo $row['p_id']?>" class="text-white">
                            Delete
                            </a>
                          </button>
                          </td>
                        <?php
                              $count=$count+1;
                              
                          }
                          }
                        ?>
                        </tr>
                        
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <br>
              <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-primary" style="height:40px" data-bs-toggle="modal" data-bs-target="#myModal">
                    Add Business
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">New Business</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <form  enctype='multipart/form-data' method="POST">
                            <!-- <div class="form-group">
                            <label for="id">ID:</label>
                            <input type="number" class="form-control" name="p_id" id="p_id" required>
                            </div> -->
                            <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="p_name" id="p_name" required>
                            </div>
                            <div class="form-group">
                            <label for="name">Description:</label>
                            <input type="text" class="form-control" name="description" id="description" required>
                            </div>
                            <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="number" class="form-control" name="phone" id="phone" required>
                            </div>
                            <div class="form-group">
                            <label for="phone">Instagram Username:</label>
                            <input type="text" class="form-control" name="ig_handle" id="ig_handle" required>
                            </div>
                            <div class="form-group">
                            <label for="phone">Website (optional):</label>
                            <input type="text" class="form-control" name="website" id="website" required>
                            </div>
                            <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" name="city" id="city" required>
                            </div>
                            <div class="form-group">
                            <label for="building">Building Name:</label>
                            <input type="text" class="form-control" name="building" id="building" required>
                            </div>
                            <div class="form-group">
                            <label for="price">Pricing:</label>
                            <input type="text" class="form-control" name="price" id="price">
                            </div> 
                            <!-- <div class="form-group">
                            <label for="qty">Description:</label>
                            <input type="text" class="form-control" id="p_desc" required>
                            </div> -->
                            <div class="form-group"> 
                            <label for="category">Category:</label>
                            <input type="text" class="form-control" name="category" id="category" required> 
                            <!-- <select id="category" name="category" >
                                <option disabled selected>Select category</option>
                                    <option value="nature">Nature-based</option>
                                    <option value="people">People-based</option>
                                    <option value="man-made">Man-made based</option>
                            </select>    -->

                                <?php

                                // $sql="SELECT * from photography_style";
                                // $result = $conn-> query($sql);

                                // if ($result-> num_rows > 0){
                                //     while($row = $result-> fetch_assoc()){
                                //     echo"<option value='".$row['category']."'>".$row['category'] ."</option>";
                                //     }
                                // }
                                ?>

                           
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="file">Choose Image:</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <br>
                            <div class="form-group">
                            <input type="submit" class="btn btn btn-primary" name="add" id="add" value="Add Entity">
                            <!-- <button type="submit" class="btn btn btn-primary" name="upload" id="upload" style="height:40px">Add Item</button> -->
                            </div>
                        </form>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal" style="height:40px">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>

                <?php
                    include_once "PHP/config.php";
                    
                    
                    if(isset($_POST['add']))
                    {
                        $name = mysqli_real_escape_string($conn,$_POST['p_name']);
                        $desc = mysqli_real_escape_string($conn,$_POST['description']);
                        $email = mysqli_real_escape_string($conn,$_POST['email']);
                        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
                        $ig = mysqli_real_escape_string($conn,$_POST['ig_handle']);
                        $website = mysqli_real_escape_string($conn,$_POST['website']);
                        $city = mysqli_real_escape_string($conn,$_POST['city']);
                        $building = mysqli_real_escape_string($conn,$_POST['building']);
                        $price = mysqli_real_escape_string($conn,$_POST['price']);
                        $category = mysqli_real_escape_string($conn,$_POST['category']);
                        
                        
                        // $image = mysqli_real_escape_string($conn,$_FILES['file']['name']);
                        // $temp = mysqli_real_escape_string($conn,$_FILES['file']['tmp_name']);
                           
                            $image_name = $_FILES["image"] ["name"];
                            $image_type = $_FILES["image"] ["type"];
                            $image_size = $_FILES["image"] ["size"];
                            $image_temp = $_FILES["image"] ["tmp_name"];
                            $image_error = $_FILES["image"] ["error"];
                                
                            if ($image_error > 0){
                              die("Error uploading file! Code $image_error.");}
                            else
                            {
                              if($image_size > 30000000000) //conditions for the file
                              {
                                die("Format is not allowed or file size is too big!");
                              }
                              else
                              {
                                move_uploaded_file($image_temp,"../Photos/".$image_name);
                              }

                        // $location = "./Photos/";
                        // $lname = $location.$image;

                        //$target_dir="../Photos/";
                        // $finalImage=$target_dir.$image;

                        // move_uploaded_file($temp,$finalImage);
                        
                        
                      //   $errors= array();
                      //   if(   
                      //   empty($errors)==true){
                      //     move_uploaded_file($temp,"../Photos/" .$image);
                      //     echo "Success";
                      //   }else{
                      //     print_r($errors);
                      //  }
                        
                        // $conn = mysqli_connect('localhost', 'administrator', 'test1234', 'cafeteria');

                        // if(!$conn){
                        //     echo 'Connection error: ' . mysqli_connect_error();
                        // }

                        

                        $insert = mysqli_query($conn,"INSERT INTO business
                        (image,name,description,email,phone,ig_handle,website,city,building_name,category,pricing) 
                        VALUES ('$image_name','$name','$desc','$email','$phone','$ig','$website','$city','$building','$category','$price')");
                
                        if(!$insert)
                        {
                          //echo '<script>alert("Connection error") </script>';
                            echo mysqli_error($conn);
                        }
                        else
                        {   
                          echo '<script> alert("Successful") </script>';
                          //echo "Records added successfully.";
                        }
                    
                    }
                  }
                        
                ?>

              <!--/ Bordered Table -->

              <hr class="my-5" />

              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © Copyright
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
