<!DOCTYPE html>

<html>
<?php
    // $email = $_SESSION["aduser"]["email"];
    // $rs =  Database::search("SELECT * FROM `user` INNER JOIN `gender` ON `user`.`gender_id` = `gender`.`id`
    // ORDER BY `user`.`join_date` ASC");
    // $num = $rs->num_rows;
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Business Reports </title>

        <link rel="stylesheet" href="../bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="../style.css" />

        <link rel="icon" href="../resources/logo.png" />

    </head>

    <body class="body" style="background-size: 115%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center py-3 d-flex align-items-center justify-content-center" style="background-color:#2b2d42; height: 50px;">
                    <label class="form-label text-light title1 fs-4 fw-bold">Business Reports</label>
                    <i class="bi bi-clipboard-minus fs-4" style="color: white;"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-12 py-2 border-0 border-end border-1 border-primary" style="background-color: rgba(43, 45, 66, 0.91);">
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item f4"><a href="../html/index.php" class="text-decoration-none text-light">Dashboard</a></li>
                            <li class="breadcrumb-item f4"><a href="UserReports.php" class="text-decoration-none text-light">User Report</a></li>
                            <li class="breadcrumb-item f4 active text-primary">User Address Report</li>
                            <li class="breadcrumb-item f4"><a href="ProductReport.php" class="text-decoration-none text-light">Product Report</a></li>
                            <li class="breadcrumb-item f4"><a href="invoiceReport.php" class="text-decoration-none text-light">Invoice Report</a></li>
                            <li class="breadcrumb-item f4"><a href="RecentReports.php" class="text-decoration-none text-light">Recent Product Report</a></li>
                            <li class="breadcrumb-item f4"><a href="feedbackReports.php" class="text-decoration-none text-light">Feedback Report</a></li>
                            <li class="breadcrumb-item f4"><a href="HappycustomerReports.php" class="text-decoration-none text-light">Happy Customers Report</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12" id="printArea">
                    <h2 class="text-center fw-bold">User Address Report</h2>
                    <div class="table-responsive">
                        <table class="table table-hover mt-5">
                            <thead class="fw-bold">
                                <tr>
                                    <th class="text-center">Profile Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Line 1</th>
                                    <th>Line 2</th>
                                    <th>City</th>
                                    <th>Postal Code</th>
                                    <th>District</th>
                                    <th>Province</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold">

                                    <tr>

                                        <td class="text-center">
                                                <img src="../resources/user.png" height="30px" class="rounded-circle">
                                        </td>
                                        <td>User First Name</td>
                                        <td>User Last Name</td>
                                            <td>line1</td>
                                            <td>line2</td>
                                            <td>city_name</td>
                                            <td>postal_code</td>
                                            <td>district_name</td>
                                            <td>province_name</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex justify-content-end container my-2 col-12">
                    <button class="btn btn-dark  col-md-4 col-lg-2 col-sm-6" onclick="printDiv();"><i class="bi bi-printer-fill me-2"></i>Print Report</button>
                </div>
            </div>
        </div>
        <script src="../script.js"></script>
        <script src="../bootstrap.bundle.js"></script>
    </body>


</html>