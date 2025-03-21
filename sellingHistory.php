<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Selling History </title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="resources/logo.png" />

</head>

<body class="body" style="background-size: 115%; background-color: rgba(43, 45, 66, 0.91);">

  <div class="container-fluid">
    <div class="row">

      <div class="col-12 text-center" style="background-color:#2B2D42;">
        <label class="form-label text-light title1 fs-1 fw-bold f3">Selling History</label>&nbsp;
        <i class="bi bi-clipboard-minus" style="color: white; font-size: 30px;"></i>
      </div>

      <div class="col-12 border-0 border-end border-1 border-primary">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item fw-bold f4"><a href="html/index.php">Back to Dashboard</a></li>
            <li class="breadcrumb-item active text-light f4" aria-current="page">Selling History</li>
          </ol>
        </nav>
      </div>

      <div class="col-12 main-body mt-3 mb-3">
        <div class="row">
          <div class="col-12 col-lg-3 mt-2">
            <label class="form-label fs-6 text-white fw-bold text-uppercase">Search By invoice ID :</label>
            <input type="text" class="form-control border border-2 border-light bg-dark text-light fs-6" placeholder="invoice ID Here ..." id="searchtxt" onkeyup="searchInvoiceID();" />
          </div>
          <div class="col-12 col-lg-3 offset-lg-2 mt-2">
            <label class="form-label text-white fw-bold text-uppercase fs-6">From Date :
            </label>
            <input type="date" class="form-control fs-6 text-light bg-dark border border-2" id="from" />
          </div>
          <div class="col-12 col-lg-3 mt-2">
            <label class="form-label text-white fw-bold text-uppercase fs-6">To Date :
            </label>
            <input type="date" class="form-control fs-6 text-light bg-dark border border-2" id="to" />
          </div>
          <div class="col-12 col-lg-1" style="margin-top: 40px;">
            <button class="btn bg-white border border-3 text-uppercase fw-bold rounded-5" style="color: #0073e6; font-size: 14px; border-color: #0073e6;" onclick="findSellings();">Find
            </button>
          </div>
        </div>
      </div>


      <div class="col-12">
        <div class="row align-items-center">

          <div class="col-2 col-md-1 col-lg-1 bg-transparent text-md-end text-center">
            <label class="form-label fs-5 fw-bold text-white">ID</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-5 fw-bold" style="color:#0073e6;">Product</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-5 fw-bold text-white">Buyer</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-5 fw-bold" style="color:#0073e6;">Amount</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 bg-dark text-md-end text-center">
            <label class="form-label fs-5 fw-bold text-white">QTY</label>
          </div>
          <div class="col-lg-1 col-3 d-none d-md-block bg-transparent"></div>

        </div>
      </div>


      <?php

      ?>
      <div class="col-12 mt-2 ">
        <div class="row mt-3 mb-3">

          <div class="col-2 col-md-1 col-lg-1 text-md-end text-center">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">01</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Product Title Here</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">Customer Name Here</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Rs.000.00</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 text-md-end text-center bg-dark">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">10</label>
          </div>
          <div class="col-1 col-md-2 col-lg-2 text-center">
            <button class="btn border border-2 border-light fw-bold mt-1 mb-1 text-uppercase fs-4 rounded-circle" title="Pending Confirmation" id="btn" onclick="changeInvStatus();">
              <i class="bi bi-check-circle-fill text-light fs-4"></i>
            </button>
          </div>
          <div class="col-2 col-md-1 col-lg-1 text-md-end text-center">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">01</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Product Title Here</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">Customer Name Here</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Rs.000.00</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 text-md-end text-center bg-dark">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">10</label>
          </div>
          <div class="col-1 col-md-2 col-lg-2 text-center">
            <button class="btn bg-black border border-2 border-danger fw-bold mt-1 mb-1 text-uppercase fs-4 rounded-circle" title="Packaging" id="btn<?php echo $product_data["id"]; ?>" onclick="changeInvStatus('<?php echo $product_data['id']; ?>');">
              <i class="bi bi-box-seam-fill text-danger fs-4"></i>
            </button>
          </div>
          <div class="col-2 col-md-1 col-lg-1 text-md-end text-center">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">01</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Product Title Here</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">Customer Name Here</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Rs.000.00</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 text-md-end text-center bg-dark">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">10</label>
          </div>
          <div class="col-1 col-md-2 col-lg-2 text-center">
            <button class="btn bg-black border border-2 border-warning fw-bold mt-1 mb-1 text-uppercase fs-4 rounded-circle" title="Dispatching" id="btn<?php echo $product_data["id"]; ?>" onclick="changeInvStatus('<?php echo $product_data['id']; ?>');">
              <i class="bi bi-airplane-engines-fill text-warning fs-4"></i>
            </button>
          </div>
          <div class="col-2 col-md-1 col-lg-1 text-md-end text-center">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">01</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Product Title Here</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">Customer Name Here</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Rs.000.00</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 text-md-end text-center bg-dark">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">10</label>
          </div>
          <div class="col-1 col-md-2 col-lg-2 text-center">
            <button class="btn bg-black border border-2 border-primary fw-bold mt-1 mb-1 text-uppercase fs-4 rounded-circle" title="Shipping Status" id="btn<?php echo $product_data["id"]; ?>" onclick="changeInvStatus('<?php echo $product_data['id']; ?>');">
              <i class="bi bi-truck text-primary fs-4"></i>
            </button>
          </div>

          <div class="col-2 col-md-1 col-lg-1 text-md-end text-center">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">01</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Product Title Here</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">Customer Name Here</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Rs.000.00</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 text-md-end text-center bg-dark">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">10</label>
          </div>
          <div class="col-1 col-md-2 col-lg-2 text-center">
            <button class="btn bg-black border border-2 border-info fw-bold mt-1 mb-1 text-uppercase fs-4 rounded-circle" title="Delivering" id="btn<?php echo $product_data["id"]; ?>" onclick="changeInvStatus('<?php echo $product_data['id']; ?>');">
              <i class="bi bi-patch-check-fill text-info fs-4"></i>
            </button>
          </div>
          <div class="col-2 col-md-1 col-lg-1 text-md-end text-center">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">01</label>
          </div>
          <div class="col-3 col-md-4 col-lg-4 text-md-end text-center rounded-start" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Product Title Here</label>
          </div>
          <div class="col-3 col-lg-2 d-none d-lg-block bg-dark text-end">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">Customer Name Here</label>
          </div>
          <div class="col-3 col-md-3 col-lg-2 text-md-end text-center" style="background-color: #343a40;">
            <label class="form-label fs-6 fw-bold mt-1 mb-1" style="color:#0073e6;">Rs.000.00</label>
          </div>
          <div class="col-2 col-md-2 col-lg-1 text-md-end text-center bg-dark">
            <label class="form-label fs-6 fw-bold text-white mt-1 mb-1">10</label>
          </div>
          <div class="col-1 col-md-2 col-lg-2 text-center">
            <button class="btn bg-black border border-2 border-success fw-bold mt-1 mb-1 text-uppercase fs-4 rounded-circle disabled" title="Completed" id="btn<?php echo $product_data["id"]; ?>" onclick="changeInvStatus('<?php echo $product_data['id']; ?>');">
              <i class="bi bi-emoji-laughing text-success fs-4"></i>
            </button>
          </div>

        </div>
      </div>

      <!--  -->
      <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mt-3">
        <nav aria-label="Page navigation example">
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link  fw-bold" href="">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>

            <li class="page-item active">
              <a class="page-link  fw-bold" href=""><?php echo 1; ?></a>
            </li>

            <li class="page-item">
              <a class="page-link  fw-bold" href=""><?php echo 1; ?></a>
            </li>


            <li class="page-item">
              <a class="page-link  fw-bold" href="">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!--  -->


    </div>
  </div>


  <script src="script.js"></script>
  <script src="bootstrap.bundle.js"></script>
</body>

</html>