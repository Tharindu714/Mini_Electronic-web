<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Manage Users</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />


    <link rel="icon" href="resources/logo.png" />


  </head>

  <body class="body" style="background-color: rgba(43, 45, 66, 0.91);">
    <div class="col-12">
      <div class="row h-25 d-flex justify-content-center" style="background-color: #2b2d42">


        <div class="col-lg-6 col-md-5 col-sm-12">
          <h2 class="f3 text-white mt-2" style="display: flex; align-items: center; justify-content: center">
            Manage All Users
            <a href="#" style="font-size: 30px; margin-left: 10px; color: #0073e6"><i class="fa fa-users" aria-hidden="true"></i>
            </a>
          </h2>
        </div>
        <div class="col-10 offset-1">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item fw-bold"><a href="html/index.php">Back to Dashboard</a></li>
              <li class="breadcrumb-item active text-light" aria-current="page">User Management page</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="row ">
        <div class="col-12 d-flex justify-content-center">
          <div class="mt-3">
            <input class="input-search rounded-3 manage-search" style="font-size: 16px; border: none; width: 400px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" placeholder="Search Users" id="mu">
            <button class="search-icon rounded-3" style="font-size: 16px; border: none;   background-color: #0073e6; color: white; width: 100px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" onclick="searchMU();">Search</button>
          </div>

        </div>
        <div class="col-12 mt-3 d-lg-block d-none">
          <div class="row mx-2 rounded-3 " style="background-color: white; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
            <div class="col-lg-1 text-end">
              <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">#</label>
            </div>
            <div class="col-lg-2 ">
              <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Profile Image</label>

            </div>
            <div class="col-lg-2 ">
              <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Username</label>

            </div>
            <div class="col-lg-2 ">
              <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Email</label>

            </div>
            <div class="col-lg-2 ">
              <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Mobile</label>

            </div>
            <div class="col-lg-2 ">
              <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Registered Date</label>
            </div>
          </div>
        </div>
        <div class="col-12">

            <div class="row mx-2 my-3 rounded-3 " style="background-color: #2b2d42; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
              <div class="col-lg-1 text-end">
                <label class="form-label f4 fs-6 my-2 text-white"><?php echo 1 + 1; ?></label>
              </div>
                <div class="col-lg-1 d-flex justify-content-center my-1">
                  <img src="resources/nrtGQr.jpg" class="rounded-circle"  style="height: 40px;">
                </div>
              <div class="col-lg-2">
                <label class="form-label f4 fs-6 my-2 text-white">User Name</label>

              </div>
              <div class="col-lg-3">
                <label class="form-label f4 fs-6 my-2 text-white">test@gmail.com</label>

              </div>
              <div class="col-lg-2">
                <label class="form-label f4 fs-6 my-2 text-white">0771112233</label>

              </div>
              <div class="col-lg-2">
                <label class="form-label f4 fs-6 my-2 text-white">2024.07.07</label>

              </div>
              <div class="col-lg-1">
                  <button class="rounded-3 text-white my-2" style="background-color: #0073e6; border: none; width: 75px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">Block</button>
              </div>
            </div>
        </div>

        <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mt-3">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-lg justify-content-center">
              <li class="page-item">
                <a class="page-link  fw-bold" style="color: #0073e6;" href="<?php if (2 <= 1) {
                                                                              echo ("#");
                                                                            } else {
                                                                              echo "?page=" . (2 - 1);
                                                                            } ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
                  <li class="page-item active">
                    <a class="page-link  fw-bold" style="background-color: #0073e6; border: none;" href=""><?php echo 1; ?></a>
                  </li>

                  <li class="page-item">
                    <a class="page-link  fw-bold" style="border: none;" href=""><?php echo 2; ?></a>
                  </li>

              <li class="page-item">
                <a class="page-link  fw-bold" style="color: #0073e6;" href="<?php if (2 >= 1) {
                                                                              echo ("#");
                                                                            } else {
                                                                              echo "?page=" . (2 + 1);
                                                                            } ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
  </body>

</html>
