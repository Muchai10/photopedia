<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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

    <title>Admin Dashboard</title>

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

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
        <?php     
            ini_set("display_errors", "1");
            ini_set("display_startup_errors","1");
            error_reporting(E_ALL);
     
            include_once "PHP/config.php";
        ?> 
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

            <li class="menu-item">
              <a href="report.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="User interface">General</div>
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
              <div class="row">
                
              <!-- Dashboard -->
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><span>Dashboard</span></h4>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Total No. Of Clients</h5>
                      <h5> 
                        <?php
                            $sql="SELECT * from client";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                        
                                    $count=$count+1;
                                }
                            }
                            echo $count;
                        ?>
                        </h5> 
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Total No. of Photographers</h5>
                      <h5> 
                        <?php
                            $sql="SELECT * from business";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows !=0 ){
                                while ($row=$result-> fetch_assoc()) {
                        
                                    $count=$count+1;
                                }
                            }
                            echo $count;
                        ?>
                        </h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Total No. Of Booked Sessions</h5>
                      <h5> 
                        <?php
                            $sql="SELECT * from session";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows !=0 ){
                                while ($row=$result-> fetch_assoc()) {
                        
                                    $count=$count+1;
                                }
                            }
                            echo $count;
                        ?>
                      </h5> 
                    </div>
                  </div>
                </div> 
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Total No. Of Transactions</h5>
                      <h5> 
                        <?php
                            $sql="SELECT * from transaction";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows !=0 ){
                                while ($row=$result-> fetch_assoc()) {
                        
                                    $count=$count+1;
                                }
                            }
                            echo $count;
                        ?>
                      </h5> 
                    </div>
                  </div>
                </div> 
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Total No. Of Reviews</h5>
                      <h5> 
                        <?php
                            $sql="SELECT * from review";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows !=0 ){
                                while ($row=$result-> fetch_assoc()) {
                        
                                    $count=$count+1;
                                }
                            }
                            echo $count;
                        ?>
                      </h5> 
                    </div>
                  </div>
                </div> 
                <!-- <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">Total No. Of Booked Sessions</h5>
                      <h5> 
                        <?php
                            // $sql="SELECT * from session";
                            // $result=$conn-> query($sql);
                            // $count=0;
                            // if ($result-> num_rows !=0 ){
                            //     while ($row=$result-> fetch_assoc()) {
                        
                            //         $count=$count+1;
                            //     }
                            // }
                            // echo $count;
                        ?>
                      </h5> 
                    </div>
                  </div>
                </div> -->
              </div>

               <!-- <button type="button" class="btn btn-primary" style="height:40px" onclick="window.print()">
                Print Report
              </button> -->
              <!--/ Text alignment -->

                <!-- Transactions -->
                <!-- <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transactions</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Paypal</small>
                              <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+82.6</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Wallet</small>
                              <h6 class="mb-0">Mac'D</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+270.69</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Transfer</small>
                              <h6 class="mb-0">Refund</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+637.91</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Credit Card</small>
                              <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">-838.71</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Wallet</small>
                              <h6 class="mb-0">Starbucks</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">+203.33</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Mastercard</small>
                              <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">-92.45</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> -->
                <!--/ Transactions -->
              </div>
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
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
