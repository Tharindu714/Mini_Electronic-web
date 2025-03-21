<!DOCTYPE html>

<html>
<?php


    // $rs = Database::search("SELECT * FROM `feedback`
    // INNER JOIN `user` ON  `feedback`.`user_email` = `user`.`email`
    // INNER JOIN `product` ON  `feedback`.`product_id` = `product`.`id` 
    // ORDER BY `feedback`.`date` ASC");

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
                            <li class="breadcrumb-item f4"><a href="userAdreessReport.php" class="text-decoration-none text-light">User Address Report</a></li>
                            <li class="breadcrumb-item f4"><a href="ProductReport.php" class="text-decoration-none text-light">Product Report</a></li>
                            <li class="breadcrumb-item f4"><a href="invoiceReport.php" class="text-decoration-none text-light">Invoice Report</a></li>
                            <li class="breadcrumb-item f4"><a href="RecentReports.php" class="text-decoration-none text-light">Recent Product Report</a></li>
                            <li class="breadcrumb-item f4 active text-primary">Feedback Report</li>
                            <li class="breadcrumb-item f4"><a href="HappycustomerReports.php" class="text-decoration-none text-light">Happy Customers Report</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

                <div class="container mt-3 table-responsive" id="printArea">
                    <h2 class="text-center fw-bold">Feedback Report</h2>

                    <table class="table table-hover mt-5 ">
                        <thead class="fw-bold">
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center">Product Image</th>
                                <th>Reviewed By</th>
                                <th class="text-center">Profile Picture</th>
                                <th>Star Ratings</th>
                                <th>feedback</th>
                                <th>Reviewed Date</th>
                                <th>Authorized Status</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                                <tr>
                                    <td>Product Name</td>
                                    <td class="text-center">
                                            <img src="../resources/user.png" height="30px">
                                    </td>
                                <td>User name</td>
                                <td class="text-center">

                                        <img src="../resources/user.png" height="30px">
                                </td>
                            <td>
                                <?php echo ("5 Stars");?>
                            </td>
                            <td>feedback</td>
                            <td>2024.07.07</td>

                            <td>
                                    <span class="text-success">
                                        <?php
                                        echo ("Authorized");
                                        ?>
                                    </span>

                            </td>
                                </tr>
                        </tbody>
                    </table>
                </div>


                <div class="d-flex justify-content-end container my-2 col-12">
                    <button class="btn btn-dark  col-md-4 col-lg-2 col-sm-6" onclick="printDiv();"><i class="bi bi-printer-fill me-2"></i>Print Report</button>
                </div>
                <script src="../script.js"></script>
                <script src="../bootstrap.bundle.js"></script>
    </body>

</html>
