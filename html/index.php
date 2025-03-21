<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel </title>
  <link rel="shortcut icon" type="image/png" href="../images/logos/logo.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="../css/slick.css" />
  <link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />
  <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="overflow-x-hidden">
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src="../images/logos/logo2.png" width="230" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="" style="background-color: #2B2D42;">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-3"></i>
              <span class="hide-menu text-light">Main Page</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu text-light">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu text-light">TO DOs</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../sellingHistory.php" aria-expanded="false">
                <span>
                  <i class="ti ti-package text-light"></i>
                </span>
                <span class="hide-menu text-light">Selling History</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../manageAllUsers.php" aria-expanded="false">
                <span>
                  <i class="ti ti-id-badge text-light"></i>
                </span>
                <span class="hide-menu text-light">Manage Users</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../manageProducts.php" aria-expanded="false">
                <span>
                  <i class="ti ti-briefcase text-light"></i>
                </span>
                <span class="hide-menu text-light">Manage Products</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../myProducts.php" aria-expanded="false">
                <span>
                  <i class="ti ti-paper-bag text-light"></i>
                </span>
                <span class="hide-menu text-light">My Product</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../addProduct.php" aria-expanded="false">
                <span>
                  <i class="ti ti-drag-drop text-light"></i>
                </span>
                <span class="hide-menu text-light">Add New Product</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../recent.php" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar text-light"></i>
                </span>
                <span class="hide-menu text-light">Recent Product</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="../removedInv.php" aria-expanded="false">
                <span>
                  <i class="ti ti-archive text-light"></i>
                </span>
                <span class="hide-menu text-light">Past Invoices</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-world text-light"></i>
                </span>
                <span class="hide-menu text-light">Handle Portfolio Site</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Search more</h6>
                <a href="#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Navigate</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
      </div>
    </aside>
    <div class="body-wrapper">

      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="./AllCharts.php" class="btn btn-dark"> <i class="ti ti-chart-donut"></i> Charts</a>&nbsp;
              <a href="../reports/UserReports.php" class="btn btn-dark"> <i class="ti ti-receipt"></i> Reports</a>


              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../images/logos/logo.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="../home.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">Online Store</p>
                    </a>
                    <a href="" class="btn btn-outline-primary mx-3 mt-2 d-block">Sign Out</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-6 align-items-lg-stretch">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4" style="background-color: rgba(43, 45, 66, 0.93);">
                <h5 class="card-title mb-9 fw-semibold text-light fs-4">Today's Buyer &nbsp;&nbsp;
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                </h5>

                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3 text-danger">No Buyer Yet </h4>
                    <div class="d-flex align-items-center mb-3">
                      <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up-left text-success"></i>
                      </span>
                      <p class="text-light me-1 fs-3 mb-0">0 x</p>
                      <p class="fs-3 mb-0 text-warning">00</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-center">
                      <img class="img-fluid rounded-circle mx-auto mb-0" src="../resources/nrtGQr.jpg" style="width: 100px; height: 100px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6  col-6 align-items-lg-stretch">
            <div class="card overflow-hidden">
              <div class="card-body p-4" style="background-color: rgba(43, 45, 66, 0.93);">
                <h5 class="card-title mb-9 fw-semibold text-light fs-4">Today's Product &nbsp;&nbsp;
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                  <i class="bi bi-star-fill text-warning fs-5"></i>
                </h5>

                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3 text-danger">No Recent Product Yet </h4>
                    <div class="d-flex align-items-center mb-3">
                      <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up-left text-success"></i>
                      </span>
                      <p class="text-light me-1 fs-3 mb-0">0 x</p>
                      <p class="fs-3 mb-0 text-warning">00</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex justify-content-center">
                      <img class="img-fluid rounded-circle mx-auto mb-0" src="../resources/nrtGQr.jpg" style="width: 100px; height: 100px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100" style="background-color: rgba(43, 45, 66, 0.93);">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold text-light">Recent Transactions</h5>
                </div>
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-light flex-shrink-0 text-end">2024.07.07</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-info mt-n1">Product Title<span class="text-light fw-bold">Rs.1000.00</span> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100" style="background-color: rgba(43, 45, 66, 0.93);">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-light">Approve Feedback</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Feedback</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Type</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Product</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Status</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-primary">Feedback Here</h6>
                          <span class="text-light fw-bold">Delta Codex</span>

                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal text-light">2024.07.07</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">5 Stars</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-warning">Product Title</h6>
                        </td>
                        <td class="border-bottom-0">
                          <button class="bg-transparent border border-0"><img src="../images/backgrounds/check-mark-transparent-gif-13.png" width="40"></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <br>
              </div>
            </div>
          </div>
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100" style="background-color: rgba(43, 45, 66, 0.93);">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-light">Manage Products - NutShell</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Image</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Product</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Price</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Avaliable QTY</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Added On</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Status</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <img src="../resources/nrtGQr.jpg" style="height: 50px; margin-left: 30px;" />
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal text-light">Product Title</p>
                        </td>

                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-primary">Rs. 00.00</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-light">100</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-warning">2024.07.08</h6>
                        </td>
                        <td class="border-bottom-0">
                          <button class="bg-transparent border border-0"><img src="../img/sad.ico" width="40"></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <br>
                <h5 class="card-title fw-semibold mb-4 text-light">Manage Users - NutShell</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Profile</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">First name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Mobile</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Joined On</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Status</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <td class="border-bottom-0">
                        <img src="../resources/user.png" style="height: 50px; margin-left: 30px;" />
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal text-light">test@gmail.com</p>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 fs-4 text-primary">Test user</h6>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 fs-4 text-light">0771112233</h6>
                      </td>
                      <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 fs-4 text-warning">2024.07.07</h6>
                      </td>
                      <td class="border-bottom-0">
                        <button class="bg-transparent border border-0"><img src="../images/backgrounds/uncheck-mark-transparent-gif-13.png" width="40"></button>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <br>
                <h5 class="card-title fw-semibold mb-4 text-light">View Admins</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">First name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Last name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 text-light">Last Verification Code</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal text-light">admin@gmail.com</p>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-primary">admin</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-primary">admin</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4 text-warning">V_code</h6>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../libs/jquery/dist/jquery.min.js"></script>
  <script src="../libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/sidebarmenu.js"></script>
  <script src="../js/app.min.js"></script>
  <script src="../libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../libs/simplebar/dist/simplebar.js"></script>
  <script src="../js/dashboard.js"></script>
</body>

</html>