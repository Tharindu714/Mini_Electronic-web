<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Manage Products</title>

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
                        Manage Products
                        <a href="#" style="font-size: 30px; margin-left: 10px; color: #0073e6"><i class="fa fa-shopping-bag" aria-hidden="true"></i>

                        </a>
                    </h2>
                </div>
                <div class="col-10 offset-1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item fw-bold"><a href="html/index.php">Back to Dashboard</a></li>
                            <li class="breadcrumb-item active text-light" aria-current="page">Product Management page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row ">
                <div class="col-12 d-flex justify-content-center">
                    <div class="mt-3">

                        <input class="input-search rounded-3 manage-search" style="font-size: 16px; border: none; width: 400px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" placeholder="Search here......." id="mp">
                        <button class="search-icon rounded-3 " style="font-size: 16px; border: none;   background-color:  #0073e6; color: white; width: 100px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" onclick="searchMP();">Search</button>
                    </div>

                </div>
                <div class="col-12 mt-3 d-lg-block d-none">
                    <div class="row mx-2 rounded-3 " style="background-color: white; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
                        <div class="col-lg-1 text-end">
                            <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">#</label>
                        </div>
                        <div class="col-lg-2 ">
                            <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Product Image</label>

                        </div>
                        <div class="col-lg-3 ">
                            <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Title</label>

                        </div>
                        <div class="col-lg-2 ">
                            <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Price</label>

                        </div>
                        <div class="col-lg-1 ">
                            <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Quantity</label>

                        </div>
                        <div class="col-lg-2 ">
                            <label class="form-label f4 fs-6 fw-bold my-1" style="color: #0073e6;">Registered Date</label>

                        </div>

                    </div>

                </div>

                <div class="col-12">
                        <div class="row mx-2 my-3 rounded-3 " style="background-color: #2b2d42; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
                            <div class="col-lg-1 text-end">
                                <label class="form-label text-white f4 fs-6 my-2">01</label>
                            </div>

                                <div class="col-lg-2 d-flex justify-content-center my-1">
                                    <img src="category\Product\rice4.jpg" style="height: 40px;">
                                </div>

                            <div class="col-lg-3 ">
                                <label class="form-label f4 fs-6 my-2 text-white">Product Title</label>

                            </div>
                            <div class="col-lg-2 ">
                                <label class="form-label f4 fs-6 my-2 text-white">Rs. 00.00</label>

                            </div>
                            <div class="col-lg-1 ">
                                <label class="form-label f4 fs-6 my-2 text-white">10</label>

                            </div>
                            <div class="col-lg-2 ">
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
                <hr style="color: white;" />

                <div class="col-12 text-center">
                    <h3 class=" fw-bold text-white f3">Manage Categories</h3>
                </div>

                <div class="col-12 mb-3">
                    <div class="row gap-1 justify-content-center mx-2">
                            <div class="col-12 col-lg-3 rounded-3" style="height: 45px; border: 2px solid #0073e6; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
                                <div class="row">
                                    <div class="col-8 mt-2 mb-2">
                                        <label class="form-label fw-bold fs-6 text-white f4">Spare parts Item</label>
                                    </div>
                                    <div class="col-4 border-start border-light text-center mt-2 mb-2">
                                        <label class="form-label fs-6 text-white"><i class="fa fa-trash"></i></label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-12 col-lg-3 rounded-3" style="height: 45px; border: 2px solid #0073e6; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" onclick="addNewCategory();">
                            <div class="row">
                                <div class="col-8 mt-2 mb-2">
                                    <label class="form-label fw-bold fs-6 text-white">Add new Category</label>
                                </div>
                                <div class="col-4 border-start border-light text-center mt-2 mb-2">
                                    <label class="form-label fs-6 text-white"><i class="fa fa-plus" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 text-center">
                    <h3 class=" fw-bold text-white f3">Add Images For Categories</h3>
                </div>
                <div class="col-12 d-none" id="addmsgdiv">
                    <div class="alert alert-success" role="alert" id="addalertdiv">
                        <i class="bi bi-check2-circle fs-5" id="addmsg">

                        </i>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-3 d-flex justify-content-center">
                    <select class="form-select text-center text-white rounded-4" id="category1" style="height: 40px; background-color: #2b2d42; border: 2px solid white; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset; font-size: medium;">
                            <option value="">Electronics Item</option>
                            <option value="">Electrical Item</option>
                            <option value="">Spare parts Item</option>
                    </select>
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center">
                    <input type="file" class="d-none" id="imageuploder" />
                    <label for="imageuploder" class="col-12 btn btn-outline-primary fw-bold text-white" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" onclick="changeProductimg();">Upload Images</label>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="col-lg-6 offset-lg-3 col-md-4 col-sm-10 offset-sm-1 d-flex justify-content-center border border-light rounded my-2">
                        <img src="resources/addproductimg.svg" class="img-fluid" style="width:250px; height:250px;" id="i0" />
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 col-md-4 col-sm-10 offset-sm-1 d-flex justify-content-center">
                    <button class="btn btn-outline-primary fw-bold text-white" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">Add Category Image</button>
                </div>
                <div class="col-12">
                    <hr class="" style="border-width: 3px; color: white;" />
                </div>
                <!-- modal 2 -->
                <div class="modal" tabindex="-1" id="addCategoryModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="color: #ffffff; background-color: #2b2d42;">
                                <h5 class="modal-title text-uppercase fw-bold">Add New Category</h5>
                                <button type="button" class="btn-close bg-light text-light border border-2 border-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body body3">
                                <div class="col-12">
                                    <input type="text" class="form-control border border-2 border-primary text-primary" placeholder="Enter new category........" id="m" />
                                </div>
                                <br>
                                <div class="col-12">
                                    <input type="text" class="form-control border border-2 border-success text-primary" placeholder="Enter Your Email........" id="e" />
                                </div>
                            </div>
                            <div class="modal-footer" style="color: #ffffff; background-color: #2b2d42;">
                                <button type="button" class="btn bg-dark text-danger border border-2 border-danger rounded text-uppercase fw-bold" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn bg-dark text-primary border border-2 border-primary rounded text-uppercase fw-bold">Save New Category</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal 2 -->

                <!-- modal 3 -->
                <div class="modal" tabindex="-1" id="addCategoryVerificationModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="color: #ffffff; background-color: #2b2d42;">
                                <h5 class="modal-title text-uppercase fw-bold" style="color: #ffffff;">Verification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body body3">
                                <div class="col-12 mt-3 mb-3">
                                    <label class="form-label text-light fw-bold">Enter Verification Code :</label>
                                    <input type="text" class="form-control bg-black text-white fw-bold border border-2 border-info " id="modaltxt" />
                                </div>
                            </div>
                            <div class="modal-footer" style="color: #ffffff; background-color: #2b2d42;">
                                <button type="button" class="btn bg-dark text-danger border border-2 border-danger rounded text-uppercase fw-bold" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn bg-dark text-info border border-2 border-info rounded text-uppercase fw-bold">Verify & Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal 3 -->
            </div>
        </div>

        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
    </body>

</html>